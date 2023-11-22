<section id="garantien" class="cards">
	<div class="wrapper fc">
		<div class="title__cont">
			<h2>
				<?php echo carbon_get_theme_option('cf_guarantees_title'); ?>
			</h2>
			<?php
			if (carbon_get_theme_option('cf_guarantees_sub')) {
				echo '<p class="center">' . carbon_get_theme_option('cf_guarantees_sub') . '</p>';
			}
			?>
		</div>
		<div class="cards__cont">
			<?php
			$img = [16, 26, 17, 10, 14, 15];
			foreach (carbon_get_theme_option('cf_guarantees_accrd') as $key => $card) {
				echo '<div class="cards__item bg-alt">
							<div class="cards__img">
								<img src="' . URI . IMG . 'mid/' . $img[$key] . '.svg" alt="">
								<div class=" icon-16"><i class="fa-solid fa-check"></i></div>
							</div>
							<h4>' . $card['cf_guarantees_t'] . '</h4>
							<p>' . $card['cf_guarantees_s'] . '</p>
						</div>';
			}
			?>
		</div>
	</div>
</section>