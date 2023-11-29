
const frm = document.querySelector('#formulario');
const usuario = document.querySelector('#usuario');
const clave = document.querySelector('#clave');

document.addEventListener('DOMContentLoaded',function () {
    frm.addEventListener('submit',function(e) {
        e.preventDefault();
        if (usuario.value =='' || clave.value=='') {
            alertaPersonalizada('warning', 'Todos los campos son obligatorios');
            usuario.focus();
        }else{
            const url = BASE_URL+ 'Usuarios/validar';
            const data = new FormData(frm);
            const http = new XMLHttpRequest();
            http.open("POST", url, true);
            http.send(data);
            http.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    const res = JSON.parse(this.responseText);
                    alertaPersonalizada(res.tipo, res.mensaje);
                    if (res.tipo=='success') {
                        let timerInterval
                        Swal.fire({
                            title: res.mensaje,
                            html: '',
                            timer: 1000,
                            timerProgressBar: true,
                            didOpen: () => {
                                Swal.showLoading()
                                const b = Swal.getHtmlContainer().querySelector('b')
                                timerInterval = setInterval(() => {
                                    b.textContent = Swal.getTimerLeft()
                                },100)
                            },
                            willClose: () => {
                                clearInterval(timerInterval)
                            }
                        }).then((result) => {
                            if (result.dismiss === Swal.DismissReason.timer) {
                                window.location = BASE_URL+'dashboard';
                            }
                        })
                    }
                }
            };
        }
    })
})