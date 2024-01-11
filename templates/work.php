<?php
/*
Template Name: work
*/
get_header();
?>

<main>
    <?php
		get_template_part( 'template-parts/page-banner', null, array(
			'title' => get_field( "title" )
		) ); ?>

    <section class="work-directions">
        <div class="container">
            <?php if (have_posts()) {
                global $post;
                $myposts = get_posts(['post_type' => 'work', 'posts_per_page' => -1,]);
            ?>
            <ul class="work-directions__list">
                <?php if ($myposts)
                        { foreach ($myposts as $post) 
                            { setup_postdata($post);
                                set_query_var('type', 'work-directions' );                                                    
                            get_template_part('template-parts/content', 'wd-card' );
                            } 
                        }    
                        wp_reset_postdata();
            } ?>
            </ul>
        </div>
    </section>
</main>

<?php get_footer(); ?>