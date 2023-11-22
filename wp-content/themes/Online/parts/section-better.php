<section class="cards bg-alt">
	<div class="wrapper fc">
		<div class="title__cont">
			<h2>
				<?php echo carbon_get_theme_option('cf_better_title'); ?>
			</h2>
			<?php
			if (carbon_get_theme_option('cf_better_sub')) {
				echo '<p class="center">' . carbon_get_theme_option('cf_better_sub') . '</p>';
			}
			?>
		</div>
		<div class="cards__cont">
			<?php
			$img = [18, 11, 22, 23, 4, 19];
			foreach (carbon_get_theme_option('cf_better_accrd') as $key => $card) {
				echo '<div class="cards__item bg">
							<div class="cards__img">
								<img src="' . URI . IMG . 'mid/' . $img[$key] . '.svg" alt="">
								<div class=" icon-16"><i class="fa-solid fa-check"></i></div>
							</div>
							<h4>' . $card['cf_better_t'] . '</h4>
							<p>' . $card['cf_better_s'] . '</p>
						</div>';
			}
			?>
		</div>
	</div>
</section>