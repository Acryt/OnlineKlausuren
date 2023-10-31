<?php
$args = array(
	'post_type' => 'post',
	'posts_per_page' => 6,
	'orderby' => 'date',
	'order' => 'DESC'
);
$query = new WP_Query($args);
?>

<section class="slider-blog bg-alt">
	<div class="wrapper">
		<h2>Blog</h2>
		<div class="swiper slider-blog__swiper">
			<div class="swiper-wrapper">
				<?php
				if ($query->have_posts()) {
					while ($query->have_posts()) {
						$query->the_post();
						?>
						<div class="swiper-slide slider-blog__slide">
							<?php the_post_thumbnail(); ?>
							<a class="slider-blog__link" href="<?php the_permalink(); ?>"><strong>
									<?php the_title(); ?>
								</strong></a>
							<div class="slider-blog__under">
								<p>
									<?php the_time('F j, Y'); ?>
								</p>
							</div>
						</div>
						<?php
					}
				} else {
					// Ваш код, если статей не найдено
				}
				wp_reset_postdata();
				?>
			</div>
			<div class="slider-blog__prev"><i class="fa-solid fa-arrow-left"></i></div>
			<div class="slider-blog__next"><i class="fa-solid fa-arrow-right"></i></div>
		</div>
		<div class="slider-blog__btn">
			<a href="/blog/" class="btn btn__white"><i class="fa-regular fa-pen-to-square"></i>Zur Blog-Seite</a>
		</div>
	</div>
</section>