<?php
	/*
	Template Name: events
	*/
	get_header();
?>

    <main>
		<?php get_template_part( 'template-parts/page-banner', null, array(
			'title' => get_field( "events_title", 'option' )
		) ); ?>

		<?php get_template_part( 'template-parts/content', 'event-list' ); ?>
    </main>

<?php get_footer(); ?>