<?php include 'lk_header.php'; ?>
<?php include 'lk_nav.php'; ?>

		<div class="page_settings_1">
			<div class="center">
				<div class="item__list">
					<div class="item">
						<div class="title">
							Размер скидки по коду
						</div>
						<div class="range">
							<input type="text" id="range1" value="" name="range1" />
						</div>
						<div class="bottom">
							<div class="value">
								<input type="text" class="input_fix__range1" disabled="true">
								<span>% от суммы товаров в корзине</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="title">
							Срок действия кода
						</div>
						<div class="range">
							<input type="text" id="range2" value="" name="range2" />
						</div>
						<div class="bottom">
							<div class="value">
								<input type="text" class="input_fix__range2" disabled="true">
								<span>час.</span>
							</div>
						</div>
						<div class="min_max">
							<span>Минимум – 1 час</span>
							<span>Максимум – 10 часов</span>							
						</div>		
					</div>
					<div class="item disabled">
						<div class="title">
							Срок пролонгации кода
						</div>
						<div class="range">
							<input type="text" id="range3" value="" name="range3" />
						</div>
						<div class="bottom">
							<div class="value">
								<input type="text" class="input_fix__range3" disabled="true">
								<span>час.</span>
							</div>
						</div>
						<div class="min_max">
							<span>Минимум – 0.5 часа</span>
							<span>Максимум – 3 часа</span>							
						</div>
						<div class="switcher">
							<span>Пролонгация</span>
							<b></b>
						</div>
					</div>
				</div>
				<div class="btn__wrap__center">					
					<a href="#" class="btn btn__blue_transparent">сбросить</a>
					<a href="#" class="btn btn__blue">сохранить</a>
				</div>
			<div>
			        
		</div>
	
		<script>
		    $(function () {
		        $("#range1").ionRangeSlider({
		            hide_min_max: true,
		            keyboard: false,
		            min: 0,
		            max: 100,
		            from: 10,
		            type: 'single',
		            step: 1,
		            grid: false
		        });
		        $("#range2").ionRangeSlider({
		            hide_min_max: true,
		            keyboard: false,
		            min: 1,
		            max: 10,
		            from: 3,
		            type: 'single',
		            step: 1,
		            grid: false
		        });
		        $("#range3").ionRangeSlider({
		            hide_min_max: true,
		            keyboard: false,
		            min: 0.5,
		            max: 3,
		            from: 1.5,
		            type: 'single',
		            step: 0.5,
		            grid: false
		        });
		    });
		</script>		
		</div>

<?php include 'lk_footer.php'; ?>