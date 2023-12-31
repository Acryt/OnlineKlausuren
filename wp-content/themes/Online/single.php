<?php
/*
Template Name: Single
*/ 
?>

<?php the_post(); ?>
<?php get_header(); ?>

<main class="main">
	<?php
	get_template_part('parts/sections/section-first-screen-post');
	get_template_part('parts/section-crumbs');
	get_template_part('parts/content-blog');
	get_template_part('parts/section-faq-accrd');
	get_template_part('parts/section-content');
	?>
</main>

<?php 
get_template_part('parts/popups');
get_footer();
?>