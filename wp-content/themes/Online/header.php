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
		<div class="header__info wrapper">
			<a href="/"><img class="header__logo" src="<?php echo URI . IMG . 'logo.svg' ?>" alt=""></a>
			<div class="header__info-text">
				<p>Mo – So <b>8:00 – 23:00</b></p>
				<a href="mailto:info@onlineklausuren.de">info@onlineklausuren.de</a>
				<a href="tel:+493022389844"><i class="icon-phone"></i>+49 (30) 223-898-44</a>
				<a href="https://wa.me/493022389844"><i class="icon-whatsapp"></i>WhatsApp</a>
				<a href="#fb" class="btn__hover"><i class="icon-pen"></i>UNVERBINDLICH ANFRAGEN</a>
			</div>
		</div>
	</header>
	<div class="header__menu">
		<div class="wrapper">
			<nav class="header__nav">
				<a href="#relink">Disziplinen</a>
				<a href="#garantien">Garantien</a>
				<a href="#feedback">Feedback</a>
				<a href="#faq">FAQ</a>
				<a href="/blog/">Blog</a>
			</nav>
		</div>
	</div>