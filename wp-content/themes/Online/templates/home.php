<?php
/*
Template Name: Home
*/

get_header();
?>
<main>
<?php 
	get_template_part( SECTION . 'section-first-screen');
	get_template_part( SECTION . 'section-images');
	get_template_part( SECTION . 'section-warning');
	get_template_part( SECTION . 'section-our-help');
	get_template_part( SECTION . 'section-relink');
	get_template_part( SECTION . 'section-better');
	get_template_part( SECTION . 'section-chain');
	get_template_part( SECTION . 'section-link-calc');
	get_template_part( SECTION . 'section-form-blitz');
	get_template_part( SECTION . 'section-guarantees');
	get_template_part( SECTION . 'section-online-types');

	get_template_part( SECTION . 'section-tt-parts1');
	get_template_part( SECTION . 'section-advantages');
	get_template_part( SECTION . 'section-connect');
	get_template_part( SECTION . 'section-form-big');
	get_template_part( SECTION . 'section-slider-review');
	get_template_part( SECTION . 'section-slider-blog');
	get_template_part( SECTION . 'section-faq');
	get_template_part( SECTION . 'section-form-last');
	
	
	// get_template_part( SECTION . 'section-img-text-table');
	// get_template_part( SECTION . 'section-stages');
	// get_template_part( SECTION . 'section-content');
	// get_template_part( SECTION . 'del-alt-content');
	// get_template_part( SECTION . 'section-tt-parts2');
	// get_template_part( SECTION . 'section-tt-parts3');
	// get_template_part( SECTION . 'section-notfound');
	?>
</main>

<?php
get_footer();
?>