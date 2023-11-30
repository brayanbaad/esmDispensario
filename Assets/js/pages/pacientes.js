const frm = document.querySelector('#formulario');
const title = document.querySelector('#title');
const fechaNacimiento = document.getElementById("fechaNacimiento");
const edad = document.getElementById("edad");
document.addEventListener('DOMContentLoaded', function () {

    frm.addEventListener('submit', function (e) {
        e.preventDefault();
        if (frm.tipoIdentificacion.value == 'SELECCIONAR' || frm.identificacion.value == "" || frm.apellidos.value == '' || frm.nombres.value == ''
            || frm.telefono.value == '' || frm.direccion.value == '' || frm.nivelEducativo.value == '' || frm.ocupacion.value == '') {
            alertaPersonalizada('warning', 'LOS DATOS CON (*) SON REQUERIDOS PARA EL REGISTRO');
        } else if (frm.edad.value == '') {
            alertaPersonalizada('warning', 'ESCOJA LA FECHA DE NACIMIENTO PARA CONOCER LA EDAD');
        } else {
            const http = new XMLHttpRequest();
            const url = BASE_URL + "Pacientes/registrar";
            const data = new FormData(frm);
            http.open("POST", url, true);
            http.send(data);
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    const res = JSON.parse(this.responseText);
                    alertaPersonalizada(res.tipo, res.mensaje);
                    if (res.tipo == 'success') {
                        frm.reset();
                    }
                }
            }
        }
    })
});


$('#fechaNacimiento').on('change', function () {
    $('#edad').val(calcularEdad());

});
function calcularEdad() {
    var fechaSeleccionada = $('#fechaNacimiento').val();
    var fechaNacimiento = new Date(fechaSeleccionada);
    var fechaActual = new Date();
    var edad = (parseInt((fechaActual - fechaNacimiento) / (1000 * 60 * 60 * 24 * 365)));
    return edad;
}
$('#Peso,#Talla').on('change', function () {
    $('#IMC').val(CalcularIMC());

});
function CalcularIMC() {
    var peso = $('#Peso').val();
    var talla = $('#Talla').val();
    var IMC = (peso / (Math.pow(talla, 2)));
    IMC = IMC.toFixed(2);
    return IMC;
}

$('#fechaCPN1,#fechaMenstruacion').on('change', function () {
    $('#sgestacionalIngreso').val(CalcularSemanasGestacionIngreso());

});

function CalcularSemanasGestacionIngreso() {
    var $fechaMenstruacion = new Date($('#fechaMenstruacion').val());
    var $fechaCPN1 = new Date($('#fechaCPN1').val());
    var diferenciaMili = $fechaCPN1 - $fechaMenstruacion;
    var semanas = diferenciaMili / (1000 * 60 * 60 * 24 * 7);
    var semanasEnteras = Math.round(semanas);
    return semanasEnteras
}


$('#fechaUControlPre,#fechaMenstruacion').on('change', function () {
    $('#SemanasAControl').val(CalcularSemanasActuales());

});

function CalcularSemanasActuales() {
    var $fechaMenstruacion = new Date($('#fechaMenstruacion').val());
    var $fechaUControlPre = new Date($('#fechaUControlPre').val());
    var diferenciaMili = $fechaUControlPre - $fechaMenstruacion;
    var semanas = diferenciaMili / (1000 * 60 * 60 * 24 * 7);
    var semanasEnteras = Math.round(semanas);
    return semanasEnteras
}

reporteEdades();
function reporteEdades() {
    const url = BASE_URL + 'Pacientes/reporteEdades';
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            const res = JSON.parse(this.responseText);
            let edad = [];
            let cantidad = [];
            let porcentaje = [];
            for (let i = 0; i < res.length; i++) {
                edad.push(res[i]['edad']);
                cantidad.push(res[i]['cantidad']);
                porcentaje.push(res[i]['porcentaje']);
            }
            var ctx = document.getElementById("edades");
            var myLineChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: edad,
                    datasets: [{
                        label: "Edades",
                        lineTension: 0.3,
                        backgroundColor: "rgba(46, 181, 189,0.2)",
                        borderColor: "rgba(2,117,216,1)",
                        pointRadius: 5,
                        pointBackgroundColor: "rgba(59, 142, 242 ,1)",
                        pointBorderColor: "rgba(59, 142, 242 ,1)",
                        pointHoverRadius: 5,
                        pointHoverBackgroundColor: "rgba(2,117,216,1)",
                        pointHitRadius: 50,
                        pointBorderWidth: 2,
                        data: cantidad,
                    }],
                },
                options: {
                    scales: {
                        xAxes: [{
                            time: {
                                unit: 'date'
                            },
                            gridLines: {
                                display: false
                            },
                            ticks: {
                                maxTicksLimit: 7
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                min: 0,
                                max: 40000,
                                maxTicksLimit: 5
                            },
                            gridLines: {
                                color: "rgba(0, 0, 0, .125)",
                            }
                        }],
                    },
                    legend: {
                        display: false
                    }
                }
            });
        }
    }
}



reporteClasificacion();
function reporteClasificacion() {
    const url = BASE_URL + 'Pacientes/reporteClasificacion';
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            const res = JSON.parse(this.responseText);
            let clasificacion = [];
            let porcentaje = [];
            for (let i = 0; i < res.length; i++) {
                clasificacion.push(res[i]['clasificacionRiesgo']);
                porcentaje.push(res[i]['porcentaje']);
            }
            var ctx = document.getElementById("clasificacion");
            var myPieChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: clasificacion,
                    datasets: [{
                        data: porcentaje,
                        backgroundColor: ['#19B040 ', '#B01919'],
                    }],
                },
            });

        }
    }
}

reporteSemanasGestational();
function reporteSemanasGestational() {
    const url = BASE_URL + 'Pacientes/reporteSemanasGestational';
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            const res = JSON.parse(this.responseText);
            let cantidad = [];
            let semanas = [];
            let porcentaje = [];
            for (let i = 0; i < res.length; i++) {
                semanas.push(res[i]['semanas']);
                cantidad.push(res[i]['cantidad']);
                porcentaje.push(res[i]['porcentaje']);
            }
            var ctx = document.getElementById("semanas");
            var myLineChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: semanas,
                    datasets: [{
                        label: "Semanas",
                        backgroundColor: "rgba(2,117,216,1)",
                        borderColor: "rgba(2,117,216,1)",
                        data: porcentaje
                    }],
                },
                options: {
                    scales: {
                        xAxes: [{
                            time: {
                                unit: 'month'
                            },
                            gridLines: {
                                display: false
                            },
                            ticks: {
                                maxTicksLimit: 6
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                min: 0,
                                max: 15000,
                                maxTicksLimit: 5
                            },
                            gridLines: {
                                display: true
                            }
                        }],
                    },
                    legend: {
                        display: false
                    }
                }
            });

        }
    }
}



//grafica lineas
// var ctx = document.getElementById("pruebas");
// var myLineChart = new Chart(ctx, {
//     type: 'line',
//     data: {
//         labels: ["Mar 1", "Mar 2", "Mar 3", "Mar 4", "Mar 5", "Mar 6", "Mar 7", "Mar 8", "Mar 9", "Mar 10", "Mar 11", "Mar 12", "Mar 13"],
//         datasets: [{
//             label: "Sessions",
//             lineTension: 0.3,
//             backgroundColor: "rgba(2,117,216,0.2)",
//             borderColor: "rgba(2,117,216,1)",
//             pointRadius: 5,
//             pointBackgroundColor: "rgba(2,117,216,1)",
//             pointBorderColor: "rgba(255,255,255,0.8)",
//             pointHoverRadius: 5,
//             pointHoverBackgroundColor: "rgba(2,117,216,1)",
//             pointHitRadius: 50,
//             pointBorderWidth: 2,
//             data: [10000, 30162, 26263, 18394, 18287, 28682, 31274, 33259, 25849, 24159, 32651, 31984, 38451],
//         }],
//     },
//     options: {
//         scales: {
//             xAxes: [{
//                 time: {
//                     unit: 'date'
//                 },
//                 gridLines: {
//                     display: false
//                 },
//                 ticks: {
//                     maxTicksLimit: 7
//                 }
//             }],
//             yAxes: [{
//                 ticks: {
//                     min: 0,
//                     max: 40000,
//                     maxTicksLimit: 5
//                 },
//                 gridLines: {
//                     color: "rgba(0, 0, 0, .125)",
//                 }
//             }],
//         },
//         legend: {
//             display: false
//         }
//     }
// });

// circulo completo
// var ctx = document.getElementById("pruebas");
// var myPieChart = new Chart(ctx, {
//   type: 'pie',
//   data: {
//     labels: ["Blue", "Red", "Yellow", "Green"],
//     datasets: [{
//       data: [12.21, 15.58, 11.25, 8.32],
//       backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745'],
//     }],
//   },
// });


