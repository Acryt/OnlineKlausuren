<a rel="canonical" href="<?php the_permalink(); ?>">
<div class="blog__item <?php if (! has_post_thumbnail() ) { echo 'no-img'; } ?>">
	<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail('full');
	}?>
	<h3 class="blog__title"><?php the_title(); ?></h3>
	<?php
$post_content = get_the_content(); // Получаем содержимое поста
$excerpt = wpautop(wp_trim_words( $post_content, 30, ' ...' )); // Оставляем только 15 первых слов

echo $excerpt; // Выводим анонс поста

?>
	<p class="blog__author">
	<?php
$author_id = get_the_author_meta('ID'); // Получаем ID автора текущего поста
$first_name = get_the_author_meta('first_name', $author_id); // Получаем имя автора
$last_name = get_the_author_meta('last_name', $author_id); // Получаем фамилию автора

$full_name = $first_name . ' ' . $last_name; // Составляем полное имя автора

echo $full_name; // Выводим полное имя автора
    ?>
	</p>
	<p class="blog__date">
		<?php the_time("F d, Y"); ?>
	</p>
   

</div>
</a>