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
<main class="wd">
    <section class="single-page-banner">
        <div class="container">
            <div class="singel-page-banner__wrapper">
                <h1 class="title-event "><?php the_title(); ?></h1>
            </div>
        </div>
    </section>

    <section class="wd__article">
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