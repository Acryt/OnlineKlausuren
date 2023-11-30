<section id="faq" class="faq">
	<div class="wrapper">
		<h2><?php echo carbon_get_theme_option('cf_faq_title'); ?></h2>
		<div class="faq__cont">
			<?php
			foreach (carbon_get_theme_option('cf_faq_accrd') as $k => $v) {
				foreach ($v['cf_faq_qa'] as $kt => $vt) {
					?>
					<div class="faq__item">
						<input class="faq__check" type="checkbox" name="faq" id="<?php echo $k . $kt ?>">
						<label class="faq__question" for="<?php echo $k . $kt ?>">
							<?php echo $vt['cf_faq_quest']; ?>
						</label>
						<div class="faq__answer">
							<div class="faq__item-cont"><?php echo $vt['cf_faq_answer']; ?></div>
						</div>
					</div>
					<?php
				}
			}
			?>
		</div>
	</div>
</section>