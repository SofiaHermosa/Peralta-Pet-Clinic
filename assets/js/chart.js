var bar = document.getElementById('barChart');
var line = document.getElementById('lineChart');
window.dashboardData = [];

$.post('/res/dashboard/data').done(function(res){
    var barChart = new Chart(bar, {
        type: 'line',
        data: {
            labels: res.appointment.month,
            datasets: res.appointment.counts
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                legend: {
                    display: true,
                }
            }
        }
    });
    
    console.log(window.aptPerMonth);
    var lineChart = new Chart(line, {
        type: 'bar',
        data: {
            labels: res.inquiries.month,
            datasets: [{
                data: res.inquiries.counts,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                legend: {
                    display: false,
                }
            }
        }
    });
});