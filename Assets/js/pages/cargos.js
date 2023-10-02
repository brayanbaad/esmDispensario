const frm = document.querySelector('#formulario');
const btnNuevo = document.querySelector('#btnNuevo');
const modalRegistro = document.querySelector('#modalRegistro');
const title = document.querySelector('#title');
const myModal = new bootstrap.Modal(modalRegistro);
let tdlCargos;
document.addEventListener('DOMContentLoaded',function () {
    //CARGAR DATOS CON DATATABLE
    tdlCargos=$('#tdlCargos').DataTable( {
        ajax: {
            url: BASE_URL+ 'Cargos/listar',
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
        title.textContent='NUEVO CARGO';
        frm.id_cargo.value="";
        frm.reset();
        myModal.show();
    })
    //REGISTRAR ESPECIALIDAD
    frm.addEventListener('submit',function(e){
        e.preventDefault();
        if (frm.nombre.value=='' ) {
            alertaPersonalizada('warning','EL CAMPO ES REQUERIDO');
        } else {
            const data = new FormData(frm);
            const url =BASE_URL+ "Cargos/registrar";
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
                        tdlCargos.ajax.reload();
                    }
                }
            }
        }
    })
})

function Activar(id) {
    const url = BASE_URL + 'Cargos/activar/' + id;
    AlertaActivacion('Mensaje!','Esta seguro de activar el Cargo?',url,tdlCargos);
}

function Eliminar(id) {
    const url = BASE_URL + 'Cargos/eliminar/' + id;
    eliminarRegistro('ESTÁ SEGURO?','SE DESACTIVARA DE FORMA PERMANENTE','Si Desactivar',url,tdlCargos);
}

function Editar(id){
            const http= new XMLHttpRequest();
            const url =BASE_URL+ "Cargos/editar/"+id;
            http.open("GET",url,true);
            http.send();
            http.onreadystatechange = function(){
                if(this.readyState== 4 && this.status==200){
                        const res = JSON.parse(this.responseText);
                        frm.id_cargo.value = res.id;
                        frm.nombre.value = res.nombre;
                        title.textContent='MODIFICAR CARGO';
                        myModal.show();
                }
            }
}