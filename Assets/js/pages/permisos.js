const frm = document.querySelector('#formulario');
const btnNuevo = document.querySelector('#btnNuevo');
const modalRegistro = document.querySelector('#modalRegistro');
const title = document.querySelector('#title');
const myModal = new bootstrap.Modal(modalRegistro);
let tblUsuarios;
document.addEventListener('DOMContentLoaded',function () {
    
    //REGISTRAR USUARIO
    frm.addEventListener('submit',function(e){
        e.preventDefault();
        const url =BASE_URL+ 'Usuarios/registrarPermiso';
        const frm = document.getElementById("formulario");
        const http= new XMLHttpRequest(); 
        http.open("POST",url,true);
        http.send(new FormData(frm));
        http.onreadystatechange = function(){
            if(this.readyState== 4 && this.status==200){
                const res = JSON.parse(this.responseText);
                if (res.tipo=='success') {
                    alertaPersonalizada(res.tipo,res.mensaje);
                }
            }
        }
    })
})

