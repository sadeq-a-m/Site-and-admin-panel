let navbar=document.querySelector('.navbar')
let hamburger=document.querySelector('.fa-bars')
let arrowEl=document.querySelectorAll('.arrowEl')
let iconTimes=document.querySelector('.fa-times')
let cogs=document.querySelector('.cogs')
let setting=document.querySelector('.setting')
let submenu1=document.querySelector('.submenu1')


hamburger.addEventListener('click',() => {
	navbar.classList.toggle('deactive-navbar')
})

iconTimes.addEventListener('click',()=>{
	navbar.classList.remove('deactive-navbar')
})

cogs.addEventListener('click',()=>{
	setting.classList.toggle('active-setting')
})

arrowEl.forEach(item => {
	item.addEventListener('click',()=>{
		let x=item.lastElementChild.lastElementChild
		x.classList.toggle('active-arrow')
		
		let y=item.nextElementSibling
		y.classList.toggle('active-submenu')
	})
})

//This part of the code is related to the user panel diagrams
//that have been implemented by the chart library

// Vertical bar chart
var ctx = document.getElementById('verticalChart').getContext('2d');
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
            display: false
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


// Doughnut chart
var ctx = document.getElementById('doughnutChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['دستمزد پرسنل', 'هزینه بیمه', 'هزینه  های جاری', 'تبلیغات', 'مالیات'],
        datasets: [{
            data: [27.92, 17.53, 14.94, 26.62, 12.99],
            backgroundColor: ['#e91e63', '#00e676', '#ff5722', '#1e88e5', '#ffd600'],
            borderWidth: 0.5 ,
            borderColor: '#ddd'
        }]
    },
    options: {
        title: {
            display: true,
            text: 'هزینه ها و مخارج کسب و کار',
            position: 'top',
            fontSize: 16,
            fontColor: '#111',
            padding: 20
        },
        legend: {
            display: true,
            position: 'bottom',
            labels: {
                boxWidth: 20,
                fontColor: '#111',
                padding: 15
            }
        },
        tooltips: {
            enabled: false
        },
        plugins: {
            datalabels: {
                color: '#111',
                textAlign: 'center',
                font: {
                    lineHeight: 1.6
                },
                formatter: function(value, ctx) {
                    return ctx.chart.data.labels[ctx.dataIndex] + '\n' + value + '%';
                }
            }
        }
    }
});


