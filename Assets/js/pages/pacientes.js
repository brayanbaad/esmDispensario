const frm = document.querySelector('#formularioPaciente');
const title = document.querySelector('#title');
const fechaNacimiento = document.getElementById("fechaNacimiento");
const edad = document.getElementById("edad");
document.addEventListener('DOMContentLoaded',function () {

    frm.addEventListener('submit',function(e){
        e.preventDefault();
        if ( frm.tipoIdentificacion.value == 'SELECCIONAR' || frm.identificacion.value =="" ||frm.apellidos.value=='' ||frm.nombres.value=='' 
        || frm.telefono.value=='' || frm.direccion.value=='' ||frm.nivelEducativo.value=='' || frm.ocupacion.value=='' ) {
            alertaPersonalizada('warning','LOS DATOS CON (*) SON REQUERIDOS PARA EL REGISTRO');
        }else if(frm.edad.value==''){
            alertaPersonalizada('warning','ESCOJA LA FECHA DE NACIMIENTO PARA CONOCER LA EDAD');
        }else{
            const http= new XMLHttpRequest();
            const url =BASE_URL+ "RegistroPaciente/registrar";
            const data = new FormData(frm);
            http.open("POST",url,true);
            http.send(data);
            http.onreadystatechange = function(){
                if(this.readyState== 4 && this.status==200){
                    console.log(this.responseText);
                    //     const res = JSON.parse(this.responseText);
                    //     alertaPersonalizada(res.tipo,res.mensaje);
                    // if (res.tipo == 'success') {
                    //     frm.reset();
                    //     myModal.hide();
                    // }
                }
            }
        }
    })
});


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
    return semanasEnteras
}


