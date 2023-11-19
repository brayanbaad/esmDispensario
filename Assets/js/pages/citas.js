const myModal = new bootstrap.Modal(document.getElementById('myModal'));
const btnGuardar = new bootstrap.Modal(document.getElementById('btnaccion'));
const modalEvento = new bootstrap.Modal(document.getElementById('modalEvento'));
let frm = document.getElementById('formulario');
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        locale:'es',
        headerToolbar:{
            left:'prev,next,today',
            center:'title',
            right:'dayGridMonth,timeGridWeek,listWeek'
        },
        selectable: true,
        editable: true,
        navLinks: true,
        events: cargarEvento,
        editable:true,
        dateClick:function(info) {
            frm.reset();
            document.getElementById('start').value= info.dateStr;
            document.getElementById('titulo').textContent= "REGISTRO DE CITA"
            myModal.show();
        },
        eventClick: function (info) {
            document.getElementById('eventoNombre').value = info.event.extendedProps.department;
            document.getElementById('eventoFecha').value = info.event.startStr;
            document.getElementById('eventoHora').value = info.event.extendedProps.end;
            document.getElementById('eventoColor').value = info.event.backgroundColor;
            document.getElementById('eventoApellidos').value = info.event.extendedProps.description;
            document.getElementById('eventoId').value = info.event.id;
            document.getElementById('eventoTitulo').textContent= "INFORMACION DE LA CITA";
            modalEvento.show();
        },
    })
    calendar.render();
});

function RegistrarEvento(e){
        e.preventDefault();
        const start = document.getElementById('start').value;
        const end = document.getElementById('end').value;
        const id = document.getElementById('id').value;
        const title = document.getElementById('title').value;
        const description = document.getElementById('description').value;
        if (  id == '' || title=="" || description=="" ) {
            alertaPersonalizada('warning','DIGITE LA IDENTICACION DEL PACIENTE');
        } else {
            const data = new FormData(frm);
            const url =BASE_URL+ "Citas/registrar";
            const http= new XMLHttpRequest();
            http.open("POST",url,true);
            http.send(data);
            http.onreadystatechange = function(){
                if(this.readyState== 4 && this.status==200){
                    const res = JSON.parse(this.responseText);
                        alertaPersonalizada(res.tipo,res.mensaje);
                    if (res.tipo == 'success') {
                        myModal.hide();
                        calendar.refetchEvents();
                    }
                }
            }
        }
} 

function cargarDatos(e) {
    e.preventDefault();
    if (e.which==13) {
        var selectId = document.getElementById('id').value;
        const data = new FormData(frm);
                const url =BASE_URL+ "Citas/cargarDatos/"+selectId;
                const http= new XMLHttpRequest();
                http.open("GET",url,true);
                http.send();
                http.onreadystatechange = function(){
                    if(this.readyState== 4 && this.status==200){
                        const res = JSON.parse(this.responseText);
                        document.getElementById('description').value = res.apellidos;
                        document.getElementById('title').value = res.nombres;
                        document.getElementById('id').value = res.identificacion;
                    }
                }
    }
}



function cargarEvento() {
    return new Promise((resolve, reject) => {
        const data = new FormData(frm)
        const url = BASE_URL + 'Citas/listar'
        const http = new XMLHttpRequest()
        http.open('GET', url, true)
        http.send()
        http.onreadystatechange = function () {
            if (this.readyState == 4) {
                if (this.status == 200) {
                    const res = JSON.parse(this.responseText)
                    const events = res.map((event) => ({
                        id: event.id,
                        title: event.end +' - '+event.title +' - '+ event.description,
                        start: event.start,
                        backgroundColor: event.color,
                        extendedProps: {
                            description: event.description,
                            end: event.end,
                            department: event.title
                        },
                    }))
                    resolve(events)
                } else {
                    reject(new Error(`Error: ${this.status}`))
                }
            }
        }
    })
}







// var ctx = document.getElementById("usuarios");
// var myPieChart = new Chart(ctx, {
//     type: 'doughnut',
//     data: {
//         labels: ["Blue", "Red", "Yellow", "Green","Yellow", "Green"],
//         datasets: [{
//             data: [12.21, 15.58, 11.25, 8.32, 12.21, 15.58,],
//             backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745', '#ffc107', '#28a745'],
//         }],
//     },
// });

// var ctx = document.getElementById("personal");
// var myLineChart = new Chart(ctx, {
//     type: 'bar',
//     data: {
//         labels: ["January", "February", "March", "April", "May", "June"],
//         datasets: [{
//             label: "Revenue",
//             backgroundColor: "rgba(2,117,216,1)",
//             borderColor: "rgba(2,117,216,1)",
//             data: [4215, 5312, 6251, 7841, 9821, 14984],
//         }],
//     },
//     options: {
//         scales: {
//             xAxes: [{
//                 time: {
//                     unit: 'month'
//                 },
//                 gridLines: {
//                     display: false
//                 },
//                 ticks: {
//                     maxTicksLimit: 6
//                 }
//             }],
//             yAxes: [{
//                 ticks: {
//                     min: 0,
//                     max: 15000,
//                     maxTicksLimit: 5
//                 },
//                 gridLines: {
//                     display: true
//                 }
//             }],
//         },
//         legend: {
//             display: false
//         }
//     }
// });