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
        {'data':'title'},
        {'data':'start'},
        {'data':'end'},
        {'data':'estado'},
        {'data':'acciones'},
    ],
    language : {
        url:'https://cdn.datatables.net/plug-ins/1.13.5/i18n/es-ES.json'
    },
    responsive: true,
    order: [[0,'desc']]
    
} );

function Editar(id){
        title.textContent='MODIFICAR ESTADO';
        myModal.show();
        
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

var ctx = document.getElementById("clasificacion");
            var myPieChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ["TS", "TD"],
                    datasets: [{
                        data: [12.21, 15.58],
                        backgroundColor: ['#19B040 ', '#B01919'],
                    }],
                },
            });