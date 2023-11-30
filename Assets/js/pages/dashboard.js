reporteGrados();
function reporteGrados() {
  const url =BASE_URL+ 'Dashboard/reporteGrados';
    const http= new XMLHttpRequest(); 
    http.open("POST",url,true);
    http.send();
    http.onreadystatechange = function(){
        if(this.readyState== 4 && this.status==200){
            const res = JSON.parse(this.responseText);
            let grado=[];
            let porcentaje=[];
            for (let i = 0; i < res.length; i++) {
              grado.push(res[i]['grado']);
              porcentaje.push(res[i]['porcentaje']);
            }
            var ctx = document.getElementById("personal");
            var myLineChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: grado,
                    datasets: [{
                        label: "Porcentaje",
                        backgroundColor: "rgba(115, 119, 124 ,2)",
                        borderColor: "rgba(115, 119, 124 ,2)",
                        data: porcentaje,
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
reporteEspecialidades();
function reporteEspecialidades() {
  const url =BASE_URL+ 'Dashboard/reporteEspecialidades';
    const http= new XMLHttpRequest(); 
    http.open("POST",url,true);
    http.send();
    http.onreadystatechange = function(){
        if(this.readyState== 4 && this.status==200){
            const res = JSON.parse(this.responseText);
            let especialidad=[];
            let cantidad=[];
            for (let i = 0; i < res.length; i++) {
              especialidad.push(res[i]['especialidad']);
              cantidad.push(res[i]['cantidad']);
            }
            var ctx = document.getElementById("usuarios");
            var myLineChart = new Chart(ctx, {
              type: 'line',
              data: {
                labels: especialidad,
                datasets: [{
                  label: "Especialidades",
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

reporteHoras();
function reporteHoras() {
    const url = BASE_URL + 'Citas/reporteHoras';
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
                type: 'line',
                data: {
                    labels: end,
                    datasets: [{
                        label: "Horas",
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


