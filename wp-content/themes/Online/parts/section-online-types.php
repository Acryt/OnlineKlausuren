<section class="online-types bg-alt">
	<div class="wrapper fc">
		<div class="title__cont">
			<h2>
				<?php echo carbon_get_theme_option('cf_onlinet_title') ?>
			</h2>
			<?php
			if (carbon_get_theme_option('cf_onlinet_sub')) {
				echo '<p class="center">' . carbon_get_theme_option('cf_guarantees_sub') . '</p>';
			}
			?>
		</div>
		<div class="online-types__cont">
			<?php
			$img = [34, 35, 36];
			foreach (carbon_get_theme_option('cf_onlinet_accrd') as $key => $card) {
				echo '<div class="online-types__item">
							<img class="online-types__img" src="' . URI . IMG . 'mid/' . $img[$key] . '.svg" alt="">
								<h4 class="left">' . $card['cf_onlinet_t'] . '</h4>
								<p>' . $card['cf_onlinet_s'] . '</p>
								<button class="btn__height"><i class="fa-solid fa-calculator"></i>Berechnen Sie die Kosten für Ihre
									Klausur</button>
							</div>';
			}
			?>
		</div>
		<p class="center">Wenn Ihre Online-Klausur oder Online-Prüfung anders gestaltet ist, kein Problem. Wir helfen Ihnen auf jeden Fall. Senden Sie eine unverbindliche Anfrage über das Formular und unser:e Kundenbetreuer:in wird sich innerhalb von 15 Minuten bei Ihnen melden.</p>
	</div>
</section>