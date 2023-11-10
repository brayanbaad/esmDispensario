const frm = document.querySelector('#formulario');
const btnNuevo = document.querySelector('#btnNuevo');
const modalRegistro = document.querySelector('#modalRegistro');
const title = document.querySelector('#title');
const myModal = new bootstrap.Modal(modalRegistro);
const fechaNacimiento = document.getElementById("fechaNacimiento");
const edad = document.getElementById("edad");
let tblPacientes;
document.addEventListener('DOMContentLoaded',function () {
     //CARGAR DATOS CON DATATABLE
    tblPacientes=$('#tblPacientes').DataTable( {
        ajax: {
            url: BASE_URL+ 'Pacientes/listar',
            dataSrc: ''
        },
        columns: [ 
            {'data':'identificacion'},
            {'data':'acciones'},
            {'data':'apellidos'},
            {'data':'nombres'},
            {'data':'direccion'},
            {'data':'telefono'},
            {'data':'nivelEducativo'},
            {'data':'ocupacion'},
            {'data':'edad'},
            {'data':'fecha_ingreso'},
            {'data':'id'},
            {'data':'estado'},
        ],
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
        },
        responsive: true,
        order: [[0,'desc']]
    } );
    frm.addEventListener('submit',function(e){
        e.preventDefault();
        if ( frm.tipoIdentificacion.value == 'SELECCIONAR' || frm.identificacion.value =="" ||frm.apellidos.value=='' ||frm.nombres.value=='' 
        || frm.telefono.value=='' || frm.direccion.value=='' ||frm.nivelEducativo.value=='' || frm.ocupacion.value=='' ) {
            alertaPersonalizada('warning','TODOS LOS CAMPOS SON REQUERIDOS');
        }else if(frm.edad.value==''){
            alertaPersonalizada('warning','ESCOGA UNA FECHA PARA CONOCER LA EDAD');
        }else{
            const data = new FormData(frm);
            const url =BASE_URL+ "Pacientes/registrar";
            const http= new XMLHttpRequest();
            http.open("POST",url,true);
            http.send(data);
            http.onreadystatechange = function(){
                if(this.readyState== 4 && this.status==200){
                    console.log(this.responseText);
                        const res = JSON.parse(this.responseText);
                        alertaPersonalizada(res.tipo,res.mensaje);
                    if (res.tipo == 'success') {
                        frm.reset();
                        myModal.hide();
                        tblPacientes.ajax.reload();
                    }
                }
            }
        }
    })
});


$('#fechaNacimiento').on('change',function() {
    $('#edad').val(calcularEdad());
    
});
function calcularEdad() {
    var fechaSeleccionada = $('#fechaNacimiento').val();
    var fechaNacimiento= new Date(fechaSeleccionada);
    var fechaActual = new Date();
    var edad = (parseInt((fechaActual-fechaNacimiento)/(1000*60*60*24*365)));
    return edad;
}

// var ctx = document.getElementById("personal");
// var myPieChart = new Chart(ctx, {
//     type: 'doughnut',
//     data: {
//         labels: ["Sso", "Ps", "Ts", "SmSm"],
//         datasets: [{
//             data: [12.21, 15.58, 11.25, 8.32],
//             backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745'],
//         }],
//     },
// });

var ctx = document.getElementById("usuarios");
var myPieChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["Blue", "Red", "Yellow", "Green","Yellow", "Green"],
        datasets: [{
            data: [12.21, 15.58, 11.25, 8.32, 12.21, 15.58,],
            backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745', '#ffc107', '#28a745'],
        }],
    },
});

var ctx = document.getElementById("personal");
var myLineChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["January", "February", "March", "April", "May", "June"],
        datasets: [{
            label: "Revenue",
            backgroundColor: "rgba(2,117,216,1)",
            borderColor: "rgba(2,117,216,1)",
            data: [4215, 5312, 6251, 7841, 9821, 14984],
        }],
    },
    options: {
        scales: {
            xAxes: [{
                time: {
                    unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 15000,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});

