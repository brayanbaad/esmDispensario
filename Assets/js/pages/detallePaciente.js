function ModificarPaciente(e) {
    e.preventDefault();
    const url =BASE_URL+ 'Detalles/modificarDetalle';
    const frm = document.getElementById("formularioDetalle");
    const http= new XMLHttpRequest(); 
    http.open("POST",url,true);
    http.send(new FormData(frm));
    http.onreadystatechange = function(){
        if(this.readyState== 4 && this.status==200){
            const res = JSON.parse(this.responseText);
            if (res.tipo=='success') {
                let timerInterval
                Swal.fire({
                    title: res.mensaje,
                    html: 'MODIFICANDO',
                    timer: 1000,
                    timerProgressBar: false,
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
                        window.location = BASE_URL+'detalles';
                    }
                })
            }
        }
    }
}

$('#fechaNacimiento').on('change',function() {
    $('#edad').val(calcularEdad());
    
});
function calcularEdad() {
    var fechaSeleccionada = $('#fechaNacimiento').val();
    var fechaNacimiento= new Date(fechaSeleccionada);
    var fechaActual = new Date();
    var edad = (parseInt((fechaActual-fechaNacimiento)/(1000*60*60*24*365)));
    return edad;
}
$('#Peso,#Talla').on('change',function() {
    $('#IMC').val(CalcularIMC());
    
});
function CalcularIMC() {
    var peso = $('#Peso').val();
    var talla = $('#Talla').val();
    var IMC= (peso/(Math.pow(talla,2)));
        IMC = IMC.toFixed(2);
    return IMC;
}

$('#fechaCPN1,#fechaMenstruacion').on('change',function() {
    $('#sgestacionalIngreso').val(CalcularSemanasGestacionIngreso());
    
});

function CalcularSemanasGestacionIngreso() {
    var $fechaMenstruacion = new Date($('#fechaMenstruacion').val());
    var $fechaCPN1= new Date($('#fechaCPN1').val());
    var diferenciaMili = $fechaCPN1- $fechaMenstruacion;
    var semanas = diferenciaMili/(1000*60*60*24*7);
    var semanasEnteras = Math.round(semanas);
    return semanasEnteras
}


$('#fechaUControlPre,#fechaMenstruacion').on('change',function() {
    $('#SemanasAControl').val(CalcularSemanasActuales());
    
});

function CalcularSemanasActuales() {
    var $fechaMenstruacion = new Date($('#fechaMenstruacion').val());
    var $fechaUControlPre= new Date($('#fechaUControlPre').val());
    var diferenciaMili = $fechaUControlPre- $fechaMenstruacion;
    var semanas = diferenciaMili/(1000*60*60*24*7);
    var semanasEnteras = Math.round(semanas);
    return semanasEnteras;
}
