const frm = document.querySelector('#formulario');
const btnNuevo = document.querySelector('#btnNuevo');
const modalRegistro = document.querySelector('#modalRegistro');
const title = document.querySelector('#title');
const myModal = new bootstrap.Modal(modalRegistro);
let tdlGrados;
document.addEventListener('DOMContentLoaded',function () {
    //CARGAR DATOS CON DATATABLE
tdlGrados=$('#tdlGrados').DataTable( {
        ajax: {
            url: BASE_URL+ 'Grados/listar',
            dataSrc: ''
        },
        columns: [ 
            {'data':'id'},
            {'data':'nombre'},
            {'data':'nombreCorto'},
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
        title.textContent='NUEVO GRADO';
        frm.id_grado.value="";
        frm.reset();
        myModal.show();
    })
    //REGISTRAR GRADO
    frm.addEventListener('submit',function(e){
        e.preventDefault();
        if (frm.nombre.value=='' ) {
            alertaPersonalizada('warning','EL CAMPO ES REQUERIDO');
        } else {
            const data = new FormData(frm);
            const url =BASE_URL+ "Grados/registrar";
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
                        tdlGrados.ajax.reload();
                    }
                }
            }
        }
    })
})

function Activar(id) {
    const url = BASE_URL + 'Grados/activar/' + id;
    AlertaActivacion('MENSAJE!','ESTA SEGURO DE ACTIVAR EL GRADO?',url,tdlGrados);
}

function Eliminar(id) {
    const url = BASE_URL + 'Grados/eliminar/' + id;
    eliminarRegistro('ESTÁ SEGURO?','SE DESACTIVARA DE FORMA PERMANENTE','Si Desactivar',url,tdlGrados);
}

function Editar(id){
            const url =BASE_URL+ "Grados/editar/"+id;
            const http= new XMLHttpRequest();
            http.open("GET",url,true);
            http.send();
            http.onreadystatechange = function(){
                if(this.readyState== 4 && this.status==200){
                        const res = JSON.parse(this.responseText);
                        title.textContent='MODIFICAR GRADO';
                        document.getElementById("id_grado").value = res.id;
                        document.getElementById("nombre").value = res.nombre;
                        document.getElementById("nombreCorto").value = res.nombreCorto;
                        myModal.show();
                }
            }
}