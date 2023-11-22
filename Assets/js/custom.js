// Here goes your custom javascript

function alertaPersonalizada(type,mensaje) {
    Swal.fire({
        position: 'top-end',
        icon: type,
        title: mensaje,
        showConfirmButton: false,
        timer: 1500
    })
}

function eliminarEvento(tittle, text,accion,url,calendar) {
    Swal.fire({
        title: tittle,
        text: text,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: accion
    }).then((result) => {
        if (result.isConfirmed) {
            const http= new XMLHttpRequest();
            http.open("GET",url,true);
            http.send();
            http.onreadystatechange = function(){
                if(this.readyState== 4 && this.status==200){
                        const res = JSON.parse(this.responseText);
                        alertaPersonalizada(res.tipo,res.mensaje);
                        if (res.tipo=="success") {
                            calendar.refetchEvents();
                        }
                }
            }
        }
    })
}
function eliminarRegistro(tittle, text,accion,url,table) {
    Swal.fire({
        title: tittle,
        text: text,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: accion
    }).then((result) => {
        if (result.isConfirmed) {
            const http= new XMLHttpRequest();
            http.open("GET",url,true);
            http.send();
            http.onreadystatechange = function(){
                if(this.readyState== 4 && this.status==200){
                        const res = JSON.parse(this.responseText);
                        alertaPersonalizada(res.tipo,res.mensaje);
                        if (res.tipo=="success") {
                            table.ajax.reload();
                            
                        }
                }
            }
        }
    })
}

function desactivarRegistro(tittle, text,accion,url,table) {
    Swal.fire({
        title: tittle,
        text: text,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: accion
    }).then((result) => {
        if (result.isConfirmed) {
            const http= new XMLHttpRequest();
            http.open("GET",url,true);
            http.send();
            http.onreadystatechange = function(){
                if(this.readyState== 4 && this.status==200){
                        const res = JSON.parse(this.responseText);
                        alertaPersonalizada(res.tipo,res.mensaje);
                        if (res.tipo=="success") {
                            table.ajax.reload();
                            
                        }
                }
            }
        }
    })
}

function AlertaActivacion(tittle, text,url,table) {
    Swal.fire({
        title: tittle,
        text: text,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText:'No'
    }).then((result) => {
        if (result.isConfirmed) {
            const http= new XMLHttpRequest();
            http.open("GET",url,true);
            http.send();
            http.onreadystatechange = function(){
                if(this.readyState== 4 && this.status==200){
                        const res = JSON.parse(this.responseText);
                        alertaPersonalizada(res.tipo,res.mensaje);
                        if (res.tipo == 'success') {
                            table.ajax.reload();
                        }
                    
                }
            }
        }
    })
}



