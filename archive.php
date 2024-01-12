<?php
	get_header();
?>

<main>
	<?php get_template_part( 'template-parts/page-banner', null, array(
		'title' => get_the_archive_title()
	) ); ?>

	<?php $category_name = ( get_queried_object() ) ? get_queried_object()->name : ''; ?>

	<?php get_template_part( 'template-parts/content', 'event-list', array(
		'category_name' => $category_name
	) ); ?>
</main>

<?php get_footer(); ?>
