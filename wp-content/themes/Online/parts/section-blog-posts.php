<section class="blog">
	<div class="wrapper">
		<div class="section__header">
			<!-- <h2>Blog</h2> -->
			<!-- <p>Subtitle Blog</p> -->
		</div>
		<div class="content">
			<div class="content__cont">
				<?php echo do_shortcode('[ajax_load_more container_type="div" post_type="post" category="blog" posts_per_page="5" button_label="Mehr laden"]') ?>
			</div>
			<div class="content__aside">
				<div class="content__slide">
					<h4 class="form__heading">Anruf Bestellen</h4>
					<?php get_template_part('parts/form-medium'); ?>
				</div>
			</div>
		</div>
	</div>
</section>