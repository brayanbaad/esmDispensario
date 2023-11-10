const frm = document.querySelector('#formulario');
const btnNuevo = document.querySelector('#btnNuevo');
const modalRegistro = document.querySelector('#modalRegistro');
const title = document.querySelector('#title');
const myModal = new bootstrap.Modal(modalRegistro);
let tblUsuarios;
document.addEventListener('DOMContentLoaded',function () {
    //CARGAR DATOS CON DATATABLE
    tblUsuarios=$('#tblUsuarios').DataTable( {
        ajax: {
            url: BASE_URL+ 'Usuarios/listar',
            dataSrc: ''
        },
        columns: [ 
            {'data':'id'},
            {'data':'apellidos'},
            {'data':'usuario'},
            {'data':'rol'},
            {'data':'estado'},
            {'data':'acciones'},
        ],
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
        },
        dom:"<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>"+
            "<'row'<'col-sm-12'tr>>"+
            "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        buttons: [
            'copy', 'excel', 'pdf'
        ],
        responsive: true,
        order: [[0,'asc']]
    } );
    btnNuevo.addEventListener('click',function(){
        title.textContent='NUEVO USUARIO';
        document.getElementById('claves').classList.remove('d-none');
        frm.reset();
        myModal.show();
    })
    //REGISTRAR USUARIO
    frm.addEventListener('submit',function(e){
        e.preventDefault();
        if ( frm.usuario.value == '' || frm.persona.value =="SELECCIONAR" ||frm.programa.value=='SELECCIONAR' ||frm.rol.value=='SELECCIONAR' ) {
            alertaPersonalizada('warning','TODOS LOS CAMPOS SON REQUERIDOS');
        }else{
            const data = new FormData(frm);
            const url =BASE_URL+ "Usuarios/registrar";
            const http= new XMLHttpRequest();
            http.open("POST",url,true);
            http.send(data);
            http.onreadystatechange = function(){
                if(this.readyState== 4 && this.status==200){
                        const res = JSON.parse(this.responseText);
                        alertaPersonalizada(res.tipo,res.mensaje);
                    if (res.tipo == 'success') {
                        frm.reset();
                        myModal.hide();
                        tblUsuarios.ajax.reload();
                    }
                }
            }
        }
    })
})

function Activar(id) {
    const url = BASE_URL + 'Usuarios/activar/' + id;
    AlertaActivacion('Mensaje!','Esta seguro de activar el Usuario?',url,tblUsuarios);
}

function Eliminar(id) {
    const url = BASE_URL + 'Usuarios/eliminar/' + id;
    eliminarRegistro('ESTÁ SEGURO?','SE ELIMINAR DE FORMA PERMANENTE','Si Eliminar',url,tblUsuarios);
}

function Editar(id){
            const http= new XMLHttpRequest();
            const url =BASE_URL+ 'Usuarios/editar/' + id;
            http.open("GET",url,true);
            http.send();
            http.onreadystatechange = function(){
                if(this.readyState== 4 && this.status==200){
                        const res = JSON.parse(this.responseText);
                        frm.id_usuario.value = res.id;
                        frm.persona.value = res.id_persona;
                        frm.usuario.value = res.usuario;
                        frm.rol.value = res.rol;
                        title.textContent='MODIFICAR USUARIO';
                        document.getElementById('claves').classList.add('d-none');
                        myModal.show();
                        tblUsuarios.ajax.reload();
                }
            }
}

function registrarPermisos(e){
    e.preventDefault();
    const url =BASE_URL+ 'Usuarios/registrarPermiso';
    const frm = document.getElementById("formulario");
    const http= new XMLHttpRequest(); 
    http.open("POST",url,true);
    http.send(new FormData(frm));
    http.onreadystatechange = function(){
        if(this.readyState== 4 && this.status==200){
            console.log(this.responseText);
                
        }
    }
}