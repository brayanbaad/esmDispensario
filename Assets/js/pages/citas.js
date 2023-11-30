let calendarEl = document.getElementById('calendar');
const myModal = new bootstrap.Modal(document.getElementById('myModal'));
const btnGuardar = new bootstrap.Modal(document.getElementById('btnaccion'));
const fechaHoy = document.getElementById('fechaHoy').value;
let frm = document.getElementById('formulario');
let btnEliminar = document.getElementById('btnEliminar');
let start = document.getElementById('btnEliminar');

document.addEventListener('DOMContentLoaded', function () {
    calendar = new FullCalendar.Calendar(calendarEl, {
        locale: 'es',
        headerToolbar: {
            left: 'prev next today',
            center: 'title',
            right: 'dayGridMonth timeGridWeek listWeek'
        },
        events: cargarCitas,
        editable: true,
        dateClick: function (info) {
            if (info.dateStr < fechaHoy) {
            } else {
                frm.reset();
                document.getElementById('id_cita').value = "";
                document.getElementById('start').value = info.dateStr;
                btnEliminar.classList.add('d-none')
                document.getElementById('titulo').textContent = "REGISTRO DE CITA"
                myModal.show();

            }
        },
        eventClick: function (info) {
            document.getElementById('identificacion').value = info.event.extendedProps.department;
            document.getElementById('start').value = info.event.startStr;
            document.getElementById('end').value = info.event.extendedProps.end;
            document.getElementById('title').value = info.event.textColor;
            document.getElementById('color').value = info.event.backgroundColor;
            document.getElementById('description').value = info.event.extendedProps.description;
            document.getElementById('id_cita').value = info.event.id;
            document.getElementById('id_paciente').value = info.event.groupId;
            document.getElementById('titulo').textContent = "INFORMACION DE LA CITA";
            btnEliminar.classList.remove('d-none')
            myModal.show();
        },
        eventDrop: function (info) {
            const start = info.event.startStr;
            const id = info.event.id;
            if (start < fechaHoy) {
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "FECHA NO VALIDA PARA MODIFICAR",
                    showConfirmButton: false,
                    timer: 1500
                });
                calendar.refetchEvents();
            } else {
                const url = BASE_URL + 'Citas/drop';
                const http = new XMLHttpRequest();
                const data = new FormData(frm);
                data.append('start', start);
                data.append('id', id);
                http.open("POST", url, true);
                http.send(data);
                http.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        console.log(this.responseText);
                        const res = JSON.parse(this.responseText);
                        alertaPersonalizada(res.tipo, res.mensaje);
                        if (res.tipo == 'success') {
                            myModal.hide();
                            calendar.refetchEvents();
                        }
                    }
                }
            }
        }
    });
    calendar.render();
    btnEliminar.addEventListener('click', function () {
        myModal.hide();
        Swal.fire({
            title: 'Advertencia?',
            text: "Esta seguro de eliminar la cita!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminar!'
        }).then((result) => {
            if (result.isConfirmed) {
                const url = BASE_URL + 'Citas/eliminar/' + document.getElementById('id_cita').value;
                const http = new XMLHttpRequest();
                http.open("GET", url, true);
                http.send();
                http.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        console.log(this.responseText);
                        const res = JSON.parse(this.responseText);
                        alertaPersonalizada(res.tipo, res.mensaje);
                        if (res.tipo == 'success') {
                            myModal.hide();
                            calendar.refetchEvents();
                        }
                    }
                }
            }
        })
    });

});

function RegistrarCita(e) {
    e.preventDefault();
    const start = document.getElementById('start').value;
    const end = document.getElementById('end').value;
    const id = document.getElementById('identificacion').value;
    if (id == '') {
        alertaPersonalizada('warning', 'DIGITE LA IDENTICACION DEL PACIENTE');
    } else if (end == "SELECCIONAR") {
        alertaPersonalizada('warning', 'SELECCIONE LA HORA DE LA CITA');
    } else {
        const data = new FormData(frm);
        const url = BASE_URL + "Citas/registrar";
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(data);
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const res = JSON.parse(this.responseText);
                alertaPersonalizada(res.tipo, res.mensaje);
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
    if (e.which == 13) {
        var selectId = document.getElementById('identificacion').value;
        const data = new FormData(frm);
        const url = BASE_URL + "Citas/cargarDatos/" + selectId;
        const http = new XMLHttpRequest();
        http.open("GET", url, true);
        http.send();
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const res = JSON.parse(this.responseText);
                document.getElementById('id_paciente').value = res.id;
                document.getElementById('description').value = res.apellidos;
                document.getElementById('title').value = res.nombres;
                document.getElementById('identificacion').value = res.identificacion;
            }
        }
    }
}

function cargarCitas() {
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
                        title: event.end + ' - ' + event.title + ' ' + event.description,
                        start: event.start,
                        backgroundColor: event.color,
                        textColor: event.title,
                        groupId: event.groupId,
                        extendedProps: {
                            description: event.description,
                            end: event.end,
                            department: event.department,
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

