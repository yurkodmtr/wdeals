<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<link rel="stylesheet" href="css/widget.css?v=<?php echo time();?>" />


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->


<!--[if lt IE 8]>
 <div style=' clear: both; text-align:center; position: relative;'>
 <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
 <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
 </a>
 </div>
 <![endif]-->
 
</head>
<body>

<div class="wdeals_banner">
	<div class="wdeals_banner__close"></div>			
	<div class="wdeals_banner__step_1">
		<div class="wdeals_banner__center">
			<span class="wdeals_banner__step_1__text_1">
				У ВАС ЕСТЬ СКИДКА • 
			</span>
			<span class="wdeals_banner__step_1__text_2">
				Получить ПРОМО-КОД
			</span>			
		</div>		
	</div>
	<div class="wdeals_banner__step_2">
		<div class="wdeals_banner__center">
			<div class="wdeals_banner__progress">
				<span class="wdeals_banner__progress__filled"></span>
			</div>
			<div class="wdeals_banner__step_2__wrap_large">
				<figure class="wdeals_banner__step_2__wrap_large__figure">
					<img src="images/widgets/wdeals_banner/img_ok.png" alt="">
				</figure>
				<div class="wdeals_banner__step_2__wrap_large__text">
					Код  <b>65G786HGR4</b>  скопирован в буфер обмена. Введите его при оформлении заказа и получите скидку 5%. Код действителен ещё:
				</div>
				<div class="wdeals_banner__step_2__wrap_large__timer">
					<span>29</span>:31 мин
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		$('.wdeals_banner__step_1').click(function(){
			$('.wdeals_banner__step_1').hide();
			$('.wdeals_banner__step_2').show();
		});
	});
</script>

</body>
</html>