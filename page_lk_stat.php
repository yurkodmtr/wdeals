<?php include 'lk_header.php'; ?>
<?php include 'lk_nav.php'; ?>

		<div class="page_stat">
			<div class="center">

				<div class="item">
					<div class="title">
						Использовано кодов
					</div>
					<div class="descr">
						<canvas id="myChart" width="400" height="200"></canvas>
					</div>
				</div>
				
				
			</div>
		</div>

<?php include 'lk_footer.php'; ?>

<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
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
            lineTension:0
        }]
    },
    options: {
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