<section id="feedback" class="slider-review">
	<div class="wrapper">
		<h3>Feedback der Studenten</h3>
		<div class="swiper slider-review__swiper">
			<div class="swiper-wrapper">
				<?php
				$reviews = carbon_get_theme_option('cf_review_slider');
				foreach ($reviews as $review) { ?>
					<div class="swiper-slide slider-review__slide" data-fancybox="review" data-caption="#1"
						href="<?php echo $review['image']; ?>">
						<img src="<?php echo $review['image']; ?>">
					</div>
				<?php } ?>
			</div>
			<div class="slider-review__prev"><i class="fa-solid fa-arrow-left"></i></div>
			<div class="slider-review__next"><i class="fa-solid fa-arrow-right"></i></div>
			<!-- <div class="slider-review__pagination"></div> -->
		</div>
	</div>
</section>