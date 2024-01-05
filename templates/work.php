<?php
/*
Template Name: work
*/
get_header();
?>
<main>
    <section class="page-banner">
        <div class="container">
            <div class="page-banner__wrapper">
                <h1 class="title-page"><?php the_title(); ?></h1>
            </div>
        </div>
    </section>

    <section class="work-directions">
        <div class="container">
            <?php if (have_posts()) {
    global $post;
    
    $myposts = get_posts([
        'post_type' => 'work',
    ]);
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
    ?>
            </ul>

            <?php
     } 
     else { echo 'Проектів не знайдено' ; } ?>
        </div>
    </section>
</main>




<?php get_footer(); ?>