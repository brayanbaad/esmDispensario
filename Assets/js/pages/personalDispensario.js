const frm = document.querySelector('#formulario');
const btnNuevo = document.querySelector('#btnNuevo');
const modalRegistro = document.querySelector('#modalRegistro');
const title = document.querySelector('#title');
const myModal = new bootstrap.Modal(modalRegistro);
const hoy_fecha = new Date().toISOString().substring(0, 10);
document.querySelector("input[name='fecha']").max = hoy_fecha;
document.addEventListener('DOMContentLoaded',function () {
    
    
    tdlPersonalDispensario=$('#tdlPersonalDispensario').DataTable( {
        ajax: {
            url: BASE_URL+ 'PersonalDispensario/listar',
            dataSrc: ''
        },
        columns: [
            {'data':'identificacion'},
            {'data':'acciones'},
            {'data':'apellidos'},
            {'data':'nombres'},
            {'data':'grado'},
            {'data':'cargo'},
            {'data':'estado'},
            {'data':'fecha_nacimiento'},
            {'data':'correo'},
            {'data':'telefono'},
            {'data':'especialidad'},
            {'data':'seccion'},
            {'data':'arma'},
            {'data':'novedad'},
            {'data':'id'}, 
        ],
        language : {
            url:'https://cdn.datatables.net/plug-ins/1.13.5/i18n/es-ES.json'
        },
        responsive: true,
        order: [[14,'desc']]
        
    } );
    btnNuevo.addEventListener('click',function(){
        title.textContent='NUEVO PERSONAL';
        frm.id_personalDispensario.value="";
        frm.identificacion.removeAttribute('readonly');
        frm.reset();
        myModal.show();
    })
    //REGISTRAR PERSONAL
    frm.addEventListener('submit',function(e){
        e.preventDefault();
        if (frm.grado.value=='SELECCIONAR' || frm.identificacion.value=='' 
        ||frm.fecha.value == ''
        ||frm.apellidos.value=='' || frm.nombres.value=='' || frm.telefono.value==''
        || frm.correo.value=='' || frm.especialidad.value=='SELECCIONAR' || frm.cargo.value=='SELECCIONAR' 
        ||frm.seccion.value=='SELECCIONAR'|| frm.arma.value=='' || frm.novedad =='' ) {
            alertaPersonalizada('warning','TODOS LOS CAMPOS SON REQUERIDOS');
        } else {
            const url =BASE_URL+"PersonalDispensario/registrar";
            const http= new XMLHttpRequest();
            http.open("POST",url,true);
            http.send(new FormData(frm));
            http.onreadystatechange = function(){
                if(this.readyState== 4 && this.status==200){
                        const res = JSON.parse(this.responseText);
                        alertaPersonalizada(res.tipo,res.mensaje);
                    if (res.tipo == 'success') {
                        frm.reset();
                        myModal.hide();
                        tdlPersonalDispensario.ajax.reload();
                    }
                }
            }
        }
    });

    
})

function Activar(id) {
    const url = BASE_URL + 'PersonalDispensario/activar/' + id;
    AlertaActivacion('Mensaje!','Esta seguro de activar la persona?',url,tdlPersonalDispensario);
}

function Eliminar(id) {
    const url = BASE_URL + 'PersonalDispensario/eliminar/' + id;
    eliminarRegistro('ESTA SEGURO DE ELIMINAR','LA PERSONA NO SE ELIMINARA DE FORMA PERMANENTE','ELIMINAR',url,tdlPersonalDispensario );
}

function Editar(id) {
    const http= new XMLHttpRequest();
    const url =BASE_URL+"PersonalDispensario/editar/" + id;
    http.open("GET",url,true);
    http.send(new FormData(frm));
    http.onreadystatechange = function(){
        if(this.readyState== 4 && this.status==200){
                const res = JSON.parse(this.responseText);
                console.log(res);
                // title.textContent = "EDITAR PERSONAL";
                // frm.id_personalDispensario.value = res.id;
                // frm.grado.value = res.id_grado;
                // frm.identificacion.value = res.identificacion;
                // frm.identificacion.setAttribute('readonly','readonly');
                // frm.fecha.value = res.fecha_nacimiento;
                // frm.apellidos.value = res.apellidos;
                // frm.nombres.value = res.nombres;
                // frm.telefono.value = res.telefono;
                // frm.correo.value = res.correo;
                // frm.especialidad.value = res.id_especialidad;
                // frm.cargo.value = res.id_cargo;
                // frm.seccion.value = res.id_seccion;
                // frm.arma.value = res.arma;
                // frm.novedad.value = res.novedad;
                // myModal.show();
                // tdlPersonalDispensario.ajax.reload();
            
        }
    }
}