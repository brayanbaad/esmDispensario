const frm = document.querySelector('#formulario');
const btnNuevo = document.querySelector('#btnNuevo');
const modalRegistro = document.querySelector('#modalRegistro');
const title = document.querySelector('#title');
const myModal = new bootstrap.Modal(modalRegistro);
let tdlSecciones;
document.addEventListener('DOMContentLoaded',function () {
    //CARGAR DATOS CON DATATABLE
    tdlSecciones=$('#tdlSecciones').DataTable( {
        ajax: {
            url: BASE_URL+ 'Secciones/listar',
            dataSrc: ''
        },
        columns: [ 
            {'data':'id'},
            {'data':'nombre'},
            {'data':'estado'},
            {'data':'acciones'},
        ],
        language : {
            url:'https://cdn.datatables.net/plug-ins/1.13.5/i18n/es-ES.json'
        },
        responsive: true,
        order: [[0,'desc']]
        
    } );
    btnNuevo.addEventListener('click',function(){
        title.textContent='NUEVA SECCION';
        frm.id_seccion.value="";
        frm.reset();
        myModal.show();
    })
    //REGISTRAR SECCION
    frm.addEventListener('submit',function(e){
        e.preventDefault();
        if (frm.nombre.value=='' ) {
            alertaPersonalizada('warning','EL CAMPO ES REQUERIDO');
        } else {
            const data = new FormData(frm);
            const url =BASE_URL+ "Secciones/registrar";
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
                        tdlSecciones.ajax.reload();
                    }
                }
            }
        }
    })
})


function Activar(id) {
    const url = BASE_URL + 'Secciones/activar/' + id;
    AlertaActivacion('Mensaje!','Esta seguro de activar la Sección?',url,tdlSecciones);
}

function Eliminar(id) {
    const url = BASE_URL + 'Secciones/eliminar/' + id;
    eliminarRegistro('ESTÁ SEGURO?','SE DESACTIVARA DE FORMA PERMANENTE','Si Desactivar',url,tdlSecciones);
}

function Editar(id){
            const http= new XMLHttpRequest();
            const url =BASE_URL+ "Secciones/editar/"+id;
            http.open("GET",url,true);
            http.send();
            http.onreadystatechange = function(){
                if(this.readyState== 4 && this.status==200){
                        const res = JSON.parse(this.responseText);
                        frm.id_seccion.value = res.id;
                        frm.nombre.value = res.nombre;
                        title.textContent='MODIFICAR SECCION';
                        myModal.show();
                }
            }
}