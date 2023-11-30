const frm = document.querySelector('#formulario');
const btnNuevo = document.querySelector('#btnNuevo');
const modalRegistro = document.querySelector('#modalRegistro');
const title = document.querySelector('#title');
const myModal = new bootstrap.Modal(modalRegistro);
let tdlArmas;
document.addEventListener('DOMContentLoaded',function () {
    //CARGAR DATOS CON DATATABLE
    tdlArmas=$('#tdlArmas').DataTable( {
        ajax: {
            url: BASE_URL+ 'Armas/listar',
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
        order: [[0,'asc']]
        
    } );
    btnNuevo.addEventListener('click',function(){
        title.textContent='NUEVA ARMA';
        frm.id_arma.value="";
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
            const url =BASE_URL+ "Armas/registrar";
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
                        tdlArmas.ajax.reload();
                    }
                }
            }
        }
    })
})

function Activar(id) {
    const url = BASE_URL + 'Armas/activar/' + id;
    AlertaActivacion('Mensaje!','Esta seguro de activar el Cargo?',url,tdlArmas);
}

function Eliminar(id) {
    const url = BASE_URL + 'Armas/eliminar/' + id;
    eliminarRegistro('ESTÁ SEGURO?','SE DESACTIVARA DE FORMA PERMANENTE','Si Desactivar',url,tdlArmas);
}

function Editar(id){
            const http= new XMLHttpRequest();
            const url =BASE_URL+ "Armas/editar/"+id;
            http.open("GET",url,true);
            http.send();
            http.onreadystatechange = function(){
                if(this.readyState== 4 && this.status==200){
                        const res = JSON.parse(this.responseText);
                        frm.id_arma.value = res.id;
                        frm.nombre.value = res.nombre;
                        title.textContent='MODIFICAR ARMA';
                        myModal.show();
                }
            }
}