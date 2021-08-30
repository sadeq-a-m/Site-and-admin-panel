//This part of the code is related to the user panel diagrams
//that have been implemented by the chart library

// Vertical bar chart
var ctx = document.getElementById('barChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Hong Kong', 'Macau', 'Japan', 'Switzerland', 'Spain', 'Singapore'],
        datasets: [{
            label: 'Life expectancy',
            data: [84.308, 84.188, 84.118, 83.706, 83.5, 83.468],
            backgroundColor: [
                'rgba(216, 27, 96, 0.6)',
                'rgba(3, 169, 244, 0.6)',
                'rgba(255, 152, 0, 0.6)',
                'rgba(29, 233, 182, 0.6)',
                'rgba(156, 39, 176, 0.6)',
                'rgba(84, 110, 122, 0.6)'
            ],
            borderColor: [
                'rgba(216, 27, 96, 1)',
                'rgba(3, 169, 244, 1)',
                'rgba(255, 152, 0, 1)',
                'rgba(29, 233, 182, 1)',
                'rgba(156, 39, 176, 1)',
                'rgba(84, 110, 122, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        legend: {
            display: true
        },
        title: {
            display: true,
            text: '',
            position: 'top',
            fontSize: 16,
            padding: 20
        },
        scales: {
            yAxes: [{
                ticks: {
                    min: 75
                }
            }]
        }
    }
});


// line chart
var ctx = document.getElementById('lineChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['فروردین', 'اردیبهشت', 'خرداد', 'تیر ', 'مرداد', 'شهریور'],
        datasets: [{
            label: 'میزان فروش سال 99',
            data: [45.308, 23.188, 34.118, 13.706, 13.5, 9.468],
            backgroundColor: [
                'rgba(0, 110, 0, 0.6)'
            ],
            borderColor: [
                'rgba(0, 110, 0, 1)'
            ],
            borderWidth: 1
            },
                   {
            label: 'میزان فروش سال 1400',
            data: [15.308, 3.188, 24.118, 33.706, 10.5, 19.468],
            backgroundColor: [
                'rgba(0, 0, 255, 0.6)'
            ],
            borderColor: [
                'rgba(0, 0, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        legend: {
            display: true
        },
        title: {
            display: true,
            text: '',
            position: 'top',
            fontSize: 16,
            padding: 20
        },
        scales: {
            yAxes: [{
                ticks: {
                    min: 0
                }
            }]
        }
    }
});