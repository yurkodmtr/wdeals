<?php include 'lk_header.php'; ?>
<?php include 'lk_nav.php'; ?>

		<div class="page_stat">
			<div class="center">

				<div class="item _item_1 act">
					<div class="title">
						<span>Использовано кодов</span>
					</div>
					<div class="descr" style="display:block;">
                        <div class="descr_tabs">
                            <div class="descr_tabs__nav clearfix">
                                <ul>
                                    <li class="act">
                                        <span class="large">Сегодня</span>
                                        <span class="small">Сегодня</span>
                                    </li>
                                    <li>
                                        <span class="large">за неделю</span>
                                        <span class="small">неделя</span>
                                    </li>
                                    <li>
                                        <span class="large">За месяц</span>
                                        <span class="small">месяц</span>
                                    </li>
                                    <li>
                                        <span class="large">За квартал</span>
                                        <span class="small">квартал</span>
                                    </li>
                                    <li>
                                        <span class="large">За год</span>
                                        <span class="small">год</span>
                                    </li>
                                </ul>
                                <div class="date_picker">
                                    <input type="text" id="datepicker_from" class="datepicker" placeholder="С"> - 
                                    <input type="text" id="datepicker_to" class="datepicker" placeholder="По">
                                </div>
                            </div>
                            <div class="descr_tabs__container">
                                <div class="descr_tabs__content descr_tabs__content_1 act">
                                    <canvas id="myChart1"></canvas>
                                </div>
                                <div class="descr_tabs__content descr_tabs__content_2">
                                    <canvas id="myChart2"></canvas>
                                </div>
                                <div class="descr_tabs__content descr_tabs__content_3">
                                    <canvas id="myChart3"></canvas>
                                </div>
                                <div class="descr_tabs__content descr_tabs__content_4">
                                    <canvas id="myChart4"></canvas>
                                </div>
                                <div class="descr_tabs__content descr_tabs__content_5">
                                    <canvas id="myChart5"></canvas>
                                </div>
                            </div>
                        </div>						
					</div>
				</div>

                <div class="item _item_2 disabled">
                    <div class="title">
                        <span>Сгенерированные коды vs. использованные</span>
                    </div>
                    <div class="descr">

                        <div class="descr_tabs">
                            <div class="descr_tabs__nav clearfix">
                                <ul>
                                    <li class="act">
                                        <span class="large">Сегодня</span>
                                        <span class="small">Сегодня</span>
                                    </li>
                                    <li>
                                        <span class="large">за неделю</span>
                                        <span class="small">неделя</span>
                                    </li>
                                    <li>
                                        <span class="large">За месяц</span>
                                        <span class="small">месяц</span>
                                    </li>
                                    <li>
                                        <span class="large">За квартал</span>
                                        <span class="small">квартал</span>
                                    </li>
                                    <li>
                                        <span class="large">За год</span>
                                        <span class="small">год</span>
                                    </li>
                                </ul>
                                <div class="date_picker">
                                    <input type="text" class="datepicker" placeholder="С" disabled="true"> - 
                                    <input type="text" class="datepicker" placeholder="По" disabled="true">
                                </div>
                            </div>
                            <div class="descr_tabs__container">
                                <div class="descr_tabs__content descr_tabs__content_1 act">
                                    <div class="disabledChart">
                                        <div class="text">
                                            <span>Недоступно в базовом тарифе</span>
                                        </div>
                                        <canvas id="disabledChart"></canvas>                            
                                    </div>
                                    <div class="disabledChart__btn btn__wrap__center">
                                        <a href="#" class="btn btn__medium btn__blue">сменить тариф</a>
                                    </div>
                                </div>
                            </div>
                        </div>              
                    </div>
                </div>
                
			</div>
		</div>

<?php include 'lk_footer.php'; ?>

<script>
$(function() {
    $( "#datepicker_from" ).datepicker();
    $( "#datepicker_to" ).datepicker();
});
var disabledChart = new Chart($('#disabledChart'), {
    type: 'line',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '',            
            data: [],
            backgroundColor: 'transparent',
            borderColor: '#21a2ec',
            borderWidth: 2,
            pointBackgroundColor: '#0071db',
            pointBorderColor: '#FFF',
            pointBorderWidth: 2,
            pointRadius: 7,
            lineTension:0,            
        }]
    },
    options: {
        maintainAspectRatio: false,
        legend: {
            display: false,
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

var myChart1 = new Chart($('#myChart1'), {
    type: 'line',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '',            
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: 'transparent',
            borderColor: '#21a2ec',
            borderWidth: 2,
            pointBackgroundColor: '#0071db',
            pointBorderColor: '#FFF',
            pointBorderWidth: 2,
            pointRadius: 7,
            lineTension:0,            
        }]
    },
    options: {
        maintainAspectRatio: false,
        legend: {
            display: false,
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
var myChart2 = new Chart($('#myChart2'), {
    type: 'line',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '',            
            data: [17, 19, 23, 25, 2, 3],
            backgroundColor: 'transparent',
            borderColor: '#21a2ec',
            borderWidth: 2,
            pointBackgroundColor: '#0071db',
            pointBorderColor: '#FFF',
            pointBorderWidth: 2,
            pointRadius: 7,
            lineTension:0,            
        }]
    },
    options: {
        maintainAspectRatio: false,
        legend: {
            display: false,
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
var myChart3 = new Chart($('#myChart3'), {
    type: 'line',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '',            
            data: [17, 19, 23, 25, 2, 3],
            backgroundColor: 'transparent',
            borderColor: '#21a2ec',
            borderWidth: 2,
            pointBackgroundColor: '#0071db',
            pointBorderColor: '#FFF',
            pointBorderWidth: 2,
            pointRadius: 7,
            lineTension:0,            
        }]
    },
    options: {
        maintainAspectRatio: false,
        legend: {
            display: false,
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
var myChart4 = new Chart($('#myChart4'), {
    type: 'line',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '',            
            data: [17, 19, 23, 25, 2, 3],
            backgroundColor: 'transparent',
            borderColor: '#21a2ec',
            borderWidth: 2,
            pointBackgroundColor: '#0071db',
            pointBorderColor: '#FFF',
            pointBorderWidth: 2,
            pointRadius: 7,
            lineTension:0,            
        }]
    },
    options: {
        maintainAspectRatio: false,
        legend: {
            display: false,
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
var myChart5 = new Chart($('#myChart5'), {
    type: 'line',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '',            
            data: [17, 19, 23, 25, 2, 3],
            backgroundColor: 'transparent',
            borderColor: '#21a2ec',
            borderWidth: 2,
            pointBackgroundColor: '#0071db',
            pointBorderColor: '#FFF',
            pointBorderWidth: 2,
            pointRadius: 7,
            lineTension:0,            
        }]
    },
    options: {
        maintainAspectRatio: false,
        legend: {
            display: false,
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>