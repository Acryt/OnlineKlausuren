<!DOCTYPE html>
<html lang="de" style="margin-top: 0px !important">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="X-Frame-Options" content="DENY">
	<meta http-equiv="X-Content-Type-Options" content="nosniff">
	<meta name="referrer" content="strict-origin-when-cross-origin">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/svg+xml" href="/favicon.svg">
	<script src="https://www.google.com/recaptcha/api.js"></script>

	<?php
	if (is_single()) { ?>
		<script type="application/ld+json">
							</script>
	<?php } ?>
	<script type="application/ld+json">
		</script>
	<?php wp_head(); ?>
</head>

<body>
	<header class="header" name="top">
		<div class="header__info">
			<img class="header__logo" src="<?php echo URI . IMG . 'logo.svg' ?>" alt="">
			<div class="header__info-text">
				<a href="">Mo – So <b>8:00 – 23:00</b></a>
				<a href="">info@onlineklausuren.de</a>
				<a href=""><i class="fa-solid fa-phone-flip"></i>+49 (30) 223-898-44</a>
				<a href=""><i class="fa-brands fa-whatsapp"></i>WhatsApp</a>
				<button class="btn__hover"><i class="fa-solid fa-pen"></i>Unverbindlich Anfragen</button>
			</div>
		</div>
		<div class="wrapper">
			<nav class="header__nav">
				<a href="">Про нас</a>
				<a href="">Почему мы</a>
				<a href="">Гарантии</a>
				<a href="">Скидки</a>
				<a href="">Как заказать</a>
				<a href="">Последние работы</a>
				<a href="">Отзывы</a>
				<a href="">Предметы</a>
				<a href="">Факи</a>
			</nav>
		</div>
	</header>