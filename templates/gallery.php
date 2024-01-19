<?php
/*
Template Name: gallery
*/
get_header();
?>

<main>
    <?php get_template_part( 'template-parts/page-banner', null, array(
                'title' => get_field( "title" )
            ) ); ?>
    <section class="gallery-page">
       
        <div class="container">
        <?php
			$args          = ( [
				'fields'         => 'ids',
				'posts_per_page' => 5,
				'post_type'      => 'gallery',
				'paged'          => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
			] );
			$gallery_query = new WP_Query( $args );
			$total_pages   = $gallery_query->max_num_pages;
			$current_page  = max( 1, get_query_var( 'paged' ) );

			if ( $gallery_query->have_posts() ) {
				while ( $gallery_query->have_posts() ) {
					$gallery_query->the_post();
					?>    
                <article class="gallery-card">
                    <div class="gallery-image">
                        <div class="slider-wrapper">
                            <div class="gallery-page-swiper swiper">
                                <?php
                                        $images = get_field( 'gallery' );
                                        if ( $images ): ?>
                                            <div class="swiper-wrapper">
                                                <?php foreach ( $images as $image ): ?>

                                                    <a class="swiper-slide" href="<?php echo esc_url( $image['url'] ); ?>" data-lightbox="<?php the_ID(); ?>">
                                                        <img src="<?php echo esc_url( $image['url'] ); ?>"
                                                            alt="<?php echo esc_attr( $image['alt'] ); ?>">
                                                    </a>
                                                
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                <div class="button-arrow--small button-prev">
                                    <svg width="7.8" height="12.7">
                                        <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right"></use>
                                    </svg>
                                </div>
                                <div class="button-arrow--small button-next">
                                    <svg width="7.8" height="12.7">
                                        <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-card-content">
                        <h2 class="title-gradient-h2"><?php echo esc_html( get_field('title') ); ?></h2>
                        <div class="gallery-card-date"><?php echo esc_html( get_field('date') ); ?></div>
                        <div class="gallery-text-wrapper">
                        <?php echo wp_kses_post ( get_field('text') ); ?>
                        </div>
                    </div>
                </article>

            <?php
				}
			}
		?>

                <div class="pagination">
					<?php
						echo paginate_links( [
							'base'      => get_pagenum_link( 1 ) . '%_%',
							'format'    => '/page/%#%',
							'current'   => $current_page,
							'total'     => $total_pages,
							'prev_next' => false,
                            'show_all'  => ($total_pages <= 5 ) ? true : false,
                            'end_size' =>  1,
                            'mid_size' => ($current_page === 1 ) || ($current_page == $total_pages)? 3 : 1,
						] );
					?>
                </div>

            
        </div>

    </section>

</main>




<?php get_footer(); ?>