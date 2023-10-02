const frm = document.querySelector('#formulario');
const btnNuevo = document.querySelector('#btnNuevo');
const modalRegistro = document.querySelector('#modalRegistro');
const title = document.querySelector('#title');
const myModal = new bootstrap.Modal(modalRegistro);
let tdlProgramas;
document.addEventListener('DOMContentLoaded',function () {
    //CARGAR DATOS CON DATATABLE
    tdlProgramas=$('#tdlProgramas').DataTable( {
        ajax: {
            url: BASE_URL+ 'Programas/listar',
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
        title.textContent='NUEVO PROGRAMA';
        frm.id_programa.value="";
        frm.reset();
        myModal.show();
    })
    //REGISTRAR PROGRAMA
    frm.addEventListener('submit',function(e){
        e.preventDefault();
        if (frm.nombre.value=='' ) {
            alertaPersonalizada('warning','EL CAMPO ES REQUERIDO');
        } else {
            const data = new FormData(frm);
            const url =BASE_URL+ "Programas/registrar";
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
                        tdlProgramas.ajax.reload();
                    }
                }
            }
        }
    })
})

function Activar(id) {
    const url = BASE_URL + 'Programas/activar/' + id;
    AlertaActivacion('Mensaje!','Esta seguro de activar el programa?',url,tdlProgramas);
}

function Eliminar(id) {
    const url = BASE_URL + 'Programas/eliminar/' + id;
    eliminarRegistro('ESTÁ SEGURO?','SE DESACTIVARA DE FORMA PERMANENTE','Si Desactivar',url,tdlProgramas);
}

function Editar(id){
            const http= new XMLHttpRequest();
            const url =BASE_URL+ "Programas/editar/"+id;
            http.open("GET",url,true);
            http.send();
            http.onreadystatechange = function(){
                if(this.readyState== 4 && this.status==200){
                        const res = JSON.parse(this.responseText);
                        frm.id_programa.value = res.id;
                        frm.nombre.value = res.nombre;
                        title.textContent='MODIFICAR PROGRAMA';
                        myModal.show();
                }
            }
}