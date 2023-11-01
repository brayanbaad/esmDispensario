const frm = document.querySelector('#formulario');
const btnNuevo = document.querySelector('#btnNuevo');
const modalRegistro = document.querySelector('#modalRegistro');
const title = document.querySelector('#title');
const myModal = new bootstrap.Modal(modalRegistro);
const hoy_fecha = new Date().toISOString().substring(0, 10);
document.querySelector("input[name='fecha']").max = hoy_fecha;
let tdlCargos;
document.addEventListener('DOMContentLoaded',function () {
     //CARGAR DATOS CON DATATABLE
    tblPacientes=$('#tblPacientes').DataTable( {
        ajax: {
            url: BASE_URL+ 'Pacientes/listar',
            dataSrc: ''
        },
        columns: [ 
            {'data':'identificacion'},
            {'data':'apellidos'},
            {'data':'nombres'},
            {'data':'direccion'},
            {'data':'telefono'},
            {'data':'acciones'},
            {'data':'id'},
            {'data':'edad'},
            {'data':'nivelEducativo'},
            {'data':'ocupacion'},
            {'data':'fecha_ingreso'},
            {'data':'estado'},
        ],
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
        },
        responsive: true,
        order: [[0,'desc']]
    } );
    btnNuevo.addEventListener('click',function(){
        title.textContent='NUEVO PACIENTE';
        frm.id_pacientes.value="";
        frm.reset();
        myModal.show();
    })
})

function Detalles(id){
    const http= new XMLHttpRequest();
    const url =BASE_URL+ 'Pacientes/detalles/' + id;
    http.open("GET",url,true);
    http.send();
    http.onreadystatechange = function(){
        if(this.readyState== 4 && this.status==200){
            console.log(this.responseText);
                // const res = JSON.parse(this.responseText);
                // frm.id_usuario.value = res.id;
                // frm.persona.value = res.id_persona;
                // frm.usuario.value = res.usuario;
                // frm.rol.value = res.rol;
                // frm.programa.value = res.id_programa;
                // title.textContent='MODIFICAR USUARIO';
                // document.getElementById('claves').classList.add('d-none');
                // myModal.show();
                // tblUsuarios.ajax.reload();
        }
    }
}