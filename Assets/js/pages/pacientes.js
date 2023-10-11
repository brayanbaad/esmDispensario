const frm = document.querySelector('#formulario');
const btnNuevo = document.querySelector('#btnNuevo');
const modalRegistro = document.querySelector('#modalRegistro');
const title = document.querySelector('#title');
const myModal = new bootstrap.Modal(modalRegistro);
const hoy_fecha = new Date().toISOString().substring(0, 10);
document.querySelector("input[name='fecha']").max = hoy_fecha;
let tdlCargos;
document.addEventListener('DOMContentLoaded',function () {
    btnNuevo.addEventListener('click',function(){
        title.textContent='NUEVO PACIENTE';
        frm.id_paciente.value="";
        frm.reset();
        myModal.show();
    })
})