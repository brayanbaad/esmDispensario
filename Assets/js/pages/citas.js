const myModal = new bootstrap.Modal(document.getElementById('myModal'));
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale:'es',
        headerToolbar:{
            left:'prev,next,today',
            center:'title',
            right:'dayGridMonth,timeGridWeek,listWeek'
        },
        dateClick:function(info) {
            document.getElementById('start').value= info.dateStr;
            document.getElementById('titulo').textContent= "REGISTRO DE CITA"
            myModal.show();
        }
    });
    calendar.render();
});

var ctx = document.getElementById("usuarios");
var myPieChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["Blue", "Red", "Yellow", "Green","Yellow", "Green"],
        datasets: [{
            data: [12.21, 15.58, 11.25, 8.32, 12.21, 15.58,],
            backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745', '#ffc107', '#28a745'],
        }],
    },
});

var ctx = document.getElementById("personal");
var myLineChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["January", "February", "March", "April", "May", "June"],
        datasets: [{
            label: "Revenue",
            backgroundColor: "rgba(2,117,216,1)",
            borderColor: "rgba(2,117,216,1)",
            data: [4215, 5312, 6251, 7841, 9821, 14984],
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