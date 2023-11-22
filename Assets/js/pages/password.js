

function frmCambiarPass(e){
    e.preventDefault();
    const actual = document.getElementById('claveActual').value;
    const nueva = document.getElementById('claveNueva').value;
    const confirmar = document.getElementById('claveConfirmar').value;
    if (actual=="" || nueva=="" || confirmar=="" ) {
        alertaPersonalizada('warning','TODOS LOS CAMPOS SON REQUERIDOS');
    } else {
        if (nueva != confirmar) {
            alertaPersonalizada('warning','LAS CONTRASEÑAN NO COINCIDEN');
        }else{
            const http= new XMLHttpRequest();
                const url =BASE_URL+ 'Usuarios/cambiarPass/';
                http.open("POST",url,true);
                let frm = document.getElementById('frmCambiarPass');
                http.send( new FormData(frm));
                http.onreadystatechange = function(){
                    if(this.readyState== 4 && this.status==200){
                            const res = JSON.parse(this.responseText);
                            alertaPersonalizada(res.tipo,res.mensaje);
                        if (res.tipo == 'success') {
                            $("#cambiarPass").modal("hide");
                        }
                    }
                }
        }
    }
}