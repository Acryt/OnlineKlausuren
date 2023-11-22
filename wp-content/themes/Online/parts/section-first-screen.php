<section class="tt-parts">
	<img class="tt-parts__bg" src="<?php echo URI . IMG . 'bg1.svg' ?>" alt="">
	<div class="wrapper tt-parts__tri">
		<div class="tt-parts__medium">
			<h1 class="tt-parts__adv-title">
				<?php
				if (is_category()) {
					echo single_term_title();
				} 
				elseif (carbon_get_post_meta(get_the_ID(), 'cf_title_title')) {
					echo carbon_get_post_meta(get_the_ID(), 'cf_title_title');
				}
				else {
					echo '<span>Ghostwriter</span> für Online-Klausuren oder Online-Prüfungen';
				}
				?>
			</h1>
			<?php 
			if (carbon_get_post_meta(get_the_ID(), 'cf_title_sub')) {
				echo '<p>' . carbon_get_post_meta(get_the_ID(), 'cf_title_sub') . '</p>';
			}
			?>
			<a href="#fb" class="btn__height"><i class="icon-calculator"></i> Preis kalkulieren</a>
		</div>
		<form class="tt-parts__short-form form bg" id="form-first" accept-charset="utf-8">
			<p class="upc title center"><strong>FÜLLEN SIE DAS KURZE FORMULAR <br>AUS UND ERHALTEN SIE HILFE BEI <br>IHRER ONLINE-PRÜFUNG</strong></p>
			<div class="form__item">
				<label for="name">Name</label>
				<input type="text" name="name" placeholder="Dein Name">
			</div>
			<div class="form__item">
				<label for="phone">* Phone/WhatsApp</label>
				<input type="tel" name="phone" placeholder="+49 123 456 789">
			</div>
			<div class="form__item">
				<label for="email">* E-Mail</label>
				<input type="email" name="email" placeholder="asdf@asdf.de">
			</div>
			<div class="form__item">
				<button class="btn" type="submit">
					<i class="icon-pen"></i>
					<span>Das Formular abschicken</span>
				</button>
			</div>
			<a href="#" class="form__link upc"><i class="icon-guarantee"></i><strong>Unsere
					Garantien</strong></a>
		</form>
		<div class="form__pay">
			<img src="<?php echo URI . IMG . 'pay/1.svg' ?>" alt="">
			<img src="<?php echo URI . IMG . 'pay/2.svg' ?>" alt="">
			<img src="<?php echo URI . IMG . 'pay/3.svg' ?>" alt="">
			<img src="<?php echo URI . IMG . 'pay/4.svg' ?>" alt="">
			<img src="<?php echo URI . IMG . 'pay/5.svg' ?>" alt="">
			<img src="<?php echo URI . IMG . 'pay/6.svg' ?>" alt="">
			<img src="<?php echo URI . IMG . 'pay/7.svg' ?>" alt="">
			<img src="<?php echo URI . IMG . 'pay/8.svg' ?>" alt="">
			<img src="<?php echo URI . IMG . 'pay/9.svg' ?>" alt="">
		</div>
		<img class="tt-parts__img-a" src="<?php echo URI . IMG . 'mid/27.svg' ?>" alt="">
	</div>

</section>