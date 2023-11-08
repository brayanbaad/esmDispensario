const frm = document.querySelector('#formulario');
const title = document.querySelector('#title');
const fechaNacimiento = document.getElementById("fechaNacimiento");
const edad = document.getElementById("edad");
document.addEventListener('DOMContentLoaded',function () {

    frm.addEventListener('submit',function(e){
        e.preventDefault();
        if ( frm.tipoIdentificacion.value == 'SELECCIONAR' || frm.identificacion.value =="" ||frm.apellidos.value=='' ||frm.nombres.value=='' 
        || frm.telefono.value=='' || frm.direccion.value=='' ||frm.nivelEducativo.value=='' || frm.ocupacion.value=='' ) {
            alertaPersonalizada('warning','LOS DATOS CON (*) SON REQUERIDOS');
        }else if(frm.edad.value==''){
            alertaPersonalizada('warning','ESCOGA UNA FECHA PARA CONOCER LA EDAD');
        }else{
            const data = new FormData(frm);
            const url =BASE_URL+ "RegistroPaciente/registrar";
            const http= new XMLHttpRequest();
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
                    //     tblPacientes.ajax.reload();
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
    var IMC= (peso/(talla*talla));
    return IMC;
}

