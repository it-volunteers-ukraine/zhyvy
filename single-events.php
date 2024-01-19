<?php
	get_header();
?>

    <main>
		<?php get_template_part( 'template-parts/page-banner', null, array(
			'title' => get_field( "title" )
		) ); ?>

		<?php get_template_part( 'template-parts/content', 'event-list-nav' ); ?>

        <div class="container">
            <div class="single-event-wrapper">
                <div class="main-content">
                    <article class="post">
						<?php get_template_part( 'template-parts/content', 'event-card', array( 'isEventPost' => true ) ); ?>

                        <div class="events-text-wrapper">
							<?php the_field( 'text' ); ?>
                        </div>

                        <div class="socials">
                            <p>Поділитися</p>
                            <div class="icon-list">
                                <a class="icon-link" href="viber://forward?text=<?php the_permalink(); ?>"
                                   target="_blank" aria-label="Поділитися у Вайбер">
                                    <svg width="24" height="24">
                                        <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-viber-outlined"></use>
                                    </svg>
                                </a>
                                <a class="icon-link"
                                   href="mailto:?subject=<?php the_field( 'title' ); ?>&body=<?php the_permalink(); ?>"
                                   target="_blank" aria-label="Поділитися через електорнну пошту">
                                    <span class="icon">
                                    <svg width="24" height="24">
                                    <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-email-outlined"></use>
                                    </svg>
                                    </span>
                                </a>
								<?php if ( get_field( 'instagram', 'option' ) ) { ?>
                                    <a class="icon-link" href="<?php the_field( 'instagram', 'option' ); ?>"
                                       target="_blank" aria-label="Поділитися у інстаграм">
                                    <span class="icon">
                                    <svg width="24" height="24">
                                    <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-instagram-outlined"></use>
                                    </svg>
                                    </span>
                                    </a>
								<?php } ?>

                                <a class="icon-link" href="https://wa.me/?text=<?php the_permalink(); ?>"
                                target="_blank" aria-label="Поділитися у вотсапп">
                                <span class="icon">
                                    <svg width="24" height="24">
                                    <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-whatsapp-outlined"></use>
                                    </svg>
                                    </span>
                                </a>
                                <a class="icon-link"
                                   href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"
                                   target="_blank" aria-label="Поділитися у фейсбук">
                                    <span class="icon">
                                    <svg width="24" height="24">
                                    <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-facebook-outlined"></use>
                                    </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </article>

                    <section class="comments">
						<?php if ( comments_open() || get_comments_number() ) {
							comments_template();
						} ?>
                    </section>

                </div>
                <section class="sidebar">
                    <div class="small-card-list">
						<?php $args = ( [
							'posts_per_page' => 4,
							'post_type'      => 'events',
						] );
							$query  = new WP_Query( $args );
							if ( $query->have_posts() ) :
								while ( $query->have_posts() ) :
									$query->the_post(); ?>
                                    <article>
                                        <a href="<?php the_permalink(); ?>">
											<?php get_template_part( 'template-parts/content', 'event-mini-card' ); ?>
                                        </a>
                                    </article>
								<?php endwhile;
								wp_reset_postdata();
							endif; ?>
                    </div>

					<?php $args = ( [
						'posts_per_page' => 1,
						'post_type'      => 'events',
						'offset'         => 4,
					] );
						$query  = new WP_Query( $args );
						if ( $query->have_posts() ) :
							while ( $query->have_posts() ) :
								$query->the_post(); ?>
                                <article class="card-large">
                                    <a href="<?php the_permalink(); ?>">
										<?php get_template_part( 'template-parts/content', 'event-card' ); ?>
                                    </a>
                                </article>
							<?php endwhile;
							wp_reset_postdata();
						endif; ?>
                </section>
            </div>
        </div>
    </main>

<?php get_footer(); ?>