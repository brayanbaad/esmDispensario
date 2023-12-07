const modalEstado = document.querySelector('#modalEstado');
const title = document.querySelector('#title');
const myModal = new bootstrap.Modal(modalEstado);
let tdlCitas;
tdlCitas=$('#tdlCitas').DataTable( {
    ajax: {
        url: BASE_URL+ 'ConsultaCitas/listar',
        dataSrc: ''
    },
    columns: [ 
        {'data':'department'},
        {'data':'description'},
        {'data':'start'},
        {'data':'end'},
        {'data':'estado'},
        {'data':'acciones'},
    ],
    language : {
        url:'https://cdn.datatables.net/plug-ins/1.13.5/i18n/es-ES.json'
    },
    responsive: true,
    order: [[3,'asc']]
    
} );

function ConfirmarEstado(id) {
    const url = BASE_URL + 'ConsultaCitas/confirmarEstado/' + id;
    AlertaActivacion('Mensaje!','Esta seguro de confirmar la cita?',url,tdlCitas);
}

function DesconfirmarEstado(id) {
    const url = BASE_URL + 'ConsultaCitas/desconfirmarEstado/' + id;
    AlertaActivacion('Mensaje!','Esta seguro de desconfirmar la cita?',url,tdlCitas);
}
reporteHoras();
function reporteHoras() {
    const url = BASE_URL + 'ConsultaCitas/reporteHoras';
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            const res = JSON.parse(this.responseText);
            let end = [];
            let cantidad = [];
            for (let i = 0; i < res.length; i++) {
                end.push(res[i]['end']);
                cantidad.push(res[i]['cantidad']);
            }
            var ctx = document.getElementById("horas");
            var myLineChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: end,
                    datasets: [{
                        label: "Horas",
                        lineTension: 0.3,
                        backgroundColor: "rgba(46, 181, 189,1)",
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

reporteFechas();
function reporteFechas() {
    const url = BASE_URL + 'ConsultaCitas/reporteFechas';
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            const res = JSON.parse(this.responseText);
            let start = [];
            let cantidad = [];
            for (let i = 0; i < res.length; i++) {
                start.push(res[i]['start']);
                cantidad.push(res[i]['cantidad']);
            }
            var ctx = document.getElementById("clasificacion");
            var myLineChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: start,
                    datasets: [{
                        label: "",
                        lineTension: 0.3,
                        backgroundColor: "rgba(63, 230, 55 ,1)",
                        borderColor: "rgba(63, 230, 55 ,1)",
                        pointRadius: 5,
                        pointBackgroundColor: "rgba(231, 190, 24 ,1)",
                        pointBorderColor: "rgba(231, 190, 24 ,1)",
                        pointHoverRadius: 5,
                        pointHoverBackgroundColor: "rgba(201, 222, 29,1)",
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


