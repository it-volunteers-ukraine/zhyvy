<?php
	get_header();
?>

    <main>

		<?php get_template_part( 'template-parts/page-banner', null, array(
			'title' => get_field( "title" )
		) ); ?>

        <div class="container">
            <div class="single-event-wrapper">
                <div class="main-content">
                    <article class="post">

						<?php get_template_part( 'template-parts/content', 'event-card', array( 'isEventPost' => true ) ); ?>

                        <div class="events-text-wrapper">
							<?php the_field( 'text' ); ?>
                        </div>

                        <div class="socials">

                        </div>
                    </article>
                    <section class="comments">comments</section>
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