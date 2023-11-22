<section class="chain">
	<div class="wrapper">
		<img class="chain__bg" src="<?php echo URI . IMG . 'chain.svg' ?>" alt="">
		<h2>
			<?php echo carbon_get_theme_option('cf_chain_title') ?>
		</h2>
		<div class="chain__cont">
			<?php
			$img = [13,12,10,9];
			foreach (carbon_get_theme_option('cf_chain_accrd') as $key => $card) {
				echo '<div class="chain__item">
							<div class="chain__img">
								<img src="' . URI . IMG . 'mid/' . $img[$key] . '.svg" alt="">
							</div>
							<h6 class="left">' . $card['cf_chain_t'] . '</h6>
							<p>' . $card['cf_chain_s'] . '</p>
						</div>';
			}
			?>
		</div>
	</div>
</section>