<?php
	/*
	Template Name: info
	*/
	get_header();
?>

    <main>

		<?php get_template_part( 'template-parts/page-banner', null, array(
			'title' => get_field( "title" )
		) ); ?>

        <section class="content">
            <div class="container">

				<?php
					$show_more_text = get_field( 'btn_more' );
					$show_less_text = get_field( 'btn_less' );

					//Post query
					$args         = ( [
						'fields'         => 'ids',
						'posts_per_page' => 3,
						'post_type'      => 'info',
						'paged'          => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
					] );
					$query        = new WP_Query( $args );
					$total_pages  = $query->max_num_pages;
					$current_page = max( 1, get_query_var( 'paged' ) );

					if ( $query->have_posts() ) :
						while ( $query->have_posts() ) :
							$query->the_post();
							?>
                            <article class="info-card">
                                <div class="carousel-wrapper">
                                    <div class="swiper swiperInfo">
										<?php
											$images = get_field( 'gallery_post' );
											if ( $images ): ?>
                                                <div class="swiper-wrapper">
													<?php foreach ( $images as $image ): ?>
                                                        <a class="swiper-slide"
                                                           href="<?php echo esc_url( $image['url'] ); ?>"
                                                           data-lightbox="<?php the_ID(); ?>">
                                                            <img src="<?php echo esc_url( $image['url'] ); ?>"
                                                                 alt="<?php echo esc_attr( $image['alt'] ); ?>">
                                                        </a>
													<?php endforeach; ?>
                                                </div>
											<?php endif; ?>

                                        <div class="button-arrow--small button-next">
                                            <svg width="12" height="24">
                                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right"></use>
                                            </svg>
                                        </div>
                                        <div class="button-arrow--small button-prev">
                                            <svg width="12" height="24">
                                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <div class="description">
                                    <div class="top">
                                        <h2 class="title-gradient-h2"><?php the_field( 'title_post' ); ?></h2>
                                        <p class="text-expandable"><?php the_field( 'text_post' ); ?></p>
                                    </div>
                                    <button class="button--outlined" onclick=expandText(this)>
                                        <span>
                                            <i class="btn-text"> <?php echo $show_more_text; ?></i>
                                            <i class="btn-text hidden"> <?php echo $show_less_text; ?></i>
                                            <i class="icon-chevron-right"></i>
                                        </span>
                                    </button>
                                </div>
                            </article>
						<?php endwhile; ?>
					<?php endif; ?>

                <div class="pagination">
					<?php
						echo paginate_links( [
							'base'      => get_pagenum_link( 1 ) . '%_%',
							'format'    => '/page/%#%',
							'current'   => $current_page,
							'total'     => $total_pages,
							'prev_next' => false,
						] );
					?>
                </div>


            </div>
        </section>
    </main>


<?php get_footer(); ?>