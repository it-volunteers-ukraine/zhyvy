<?php
	get_header();
?>
    
    <main>

		<?php get_template_part( 'template-parts/page-banner', null, array(
			'title' => get_field( "title" )
		) ); ?>

    </main>

<?php get_footer(); ?>