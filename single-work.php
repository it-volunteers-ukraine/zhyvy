<?php
/**
 * The template for displaying training single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wp-it-volunteers
 */

get_header();
?>
<main class="work">

    <?php
		get_template_part( 'template-parts/page-banner', null, array(
			'title' => get_field( "title" )
		) ); ?>

    <section class="work-article">
        <div class="container">
            <?php
		        while ( have_posts() ) :
		    	the_post();
			    get_template_part( 'template-parts/content', 'work', get_post_type() );
			    endwhile; 
		    ?>
        </div>
    </section>

    <?php get_footer(); ?>