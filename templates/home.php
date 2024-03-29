<?php
	/*
	Template Name: home
	*/
	get_header();
?>

    <main>
        <!-- Hero section -->
        <section class="hero">
            <div class="container">
                <div class="hero-wrapper">
                    <div class="top">
                        <span id="animatedTitle" class="animated-title">живи</span>
                        <h1 class="slogan"><?php the_field( 'hero_slogan' ); ?></h1>
                    </div>
                    <p class="text"><?php the_field( 'hero_text' ); ?></p>
                    <a class="contact" href="tel:<?php the_field( 'phone_hotline', 'option' ); ?>" target="_blank"
                       aria-label="Подзвонити на гарячу лінію">
                        <svg width="30" height="30">
                            <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-phone_24"></use>
                        </svg>
                        <p>
                            <span class="contact-phone"><?php the_field( 'hero_phone_number', ); ?></span>
                            <span class="contact-text"><?php the_field( 'hero_phone_text' ); ?></span>
                        </p>
                    </a>
                </div>
            </div>
        </section>

        <!--  About section  -->
        <section class="about">
            <div class="container">
                <div class="about-wrapper">
                    <div class="image">
                        <img src="<?php echo esc_url( get_field( 'about_img' )['url'] ); ?>"
                             alt="<?php echo esc_attr( get_field( 'about_img' )['alt'] ); ?>">
                    </div>
                    <div class="content">
                        <h2 class="title-gradient-h1"><?php the_field( 'about_title' ); ?></h2>
                        <p><?php the_field( 'about_paragraph_1' ); ?></p>
                        <p>
                            <strong><?php the_field( 'about_title_2' ); ?></strong>
							<?php the_field( 'about_paragraph_2' ); ?>
                        </p>
                        <a href="<?php echo get_permalink( get_page_by_path( 'pro-nas' ) ); ?>"
                           class="button--medium"><?php the_field( 'about_btn_text' ); ?>
                            <svg width="8" height="16">
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--  Work directions section  -->
        <section class="work">
            <div class="container">
                <div id="workDirectionsGrid" class="grid-container">
                    <div class="grid-item description">
                        <h2 class="title-gradient-h1"><?php the_field( 'work_title' ); ?></h2>
                        <p><?php the_field( 'work_text' ); ?></p>
                    </div>
					<?php $args = ( [
						'posts_per_page' => - 1,
						'post_type'      => 'work',
					] );
						$query  = new WP_Query( $args );
						if ( $query->have_posts() ) :
							while ( $query->have_posts() ) :
								$query->the_post(); ?>
                                <div class="grid-item">
                                    <article class="card">
                                        <div class="top">
                                            <div class="top-front">
                                                <img src="<?php the_field( 'img' ); ?>"
                                                     alt="<?php the_field( 'alt' ); ?>">
                                            </div>
                                            <div class="top-back">
                                                <p><?php the_field( 'homepage_hover' ); ?></p>
                                                <a href="<?php the_permalink(); ?>">
                                                    дізнатися Більше</a>
                                            </div>
                                        </div>
                                        <div class="bottom" onclick=showAccordionCard(this)>
                                            <h3><?php the_field( 'title' ); ?></h3>
                                            <p><?php the_field( 'homepage_description' ); ?></p>
                                        </div>
                                    </article>
                                </div>
							<?php endwhile;
							wp_reset_postdata();
						endif; ?>
                </div>
            </div>
        </section>


        <!--  Help section  -->
        <section class="help">
            <div class="container">
                <h2 class="title"><?php the_field( 'help_title' ); ?></h2>
                <div class="bottom">
                    <div class="help-item">
                        <p><?php the_field( 'help_questionnaire_text' ); ?></p>
                        <a href="<?php the_field( 'questionnaire', 'option' ); ?>" target="_blank"
                           aria-label="Перейти на сторінку анкети" class="button--help">
							<?php the_field( 'help_questionnaire_btn' ); ?>
                            <i class="icon-chevron-right"></i>
                        </a>
                    </div>
                    <div class="help-item">
                        <p><?php the_field( 'help_phone_text' ); ?></p>
                        <a href="tel:<?php the_field( 'phone_hotline', 'option' ); ?>" target="_blank"
                           aria-label="Подзвонити на гарячу лінію" class="button--phone">
                            <i class="icon-phone"></i>
							<?php the_field( 'phone_hotline_display', 'option' ); ?>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--  Events section  -->
        <section class="events">
            <div class="container">
                <h2 class="title-gradient-h1 hidden-on-desktop"><?php the_field( 'events_title' ); ?></h2>
                <p class="text hidden-on-desktop"><?php the_field( 'events_text' ); ?></p>

                <div class="events-wrapper">
                    <div class="left">
						<?php $args = ( [
							'posts_per_page' => 2,
							'post_type'      => 'events',
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
                    </div>
                    <div class="right">
                        <h2 class="title-gradient-h1"><?php the_field( 'events_title' ); ?></h2>
                        <p class="text"><?php the_field( 'events_text' ); ?></p>
						<?php $args = ( [
							'posts_per_page' => 2,
							'post_type'      => 'events',
							'offset'         => 2,
						] );
							$query  = new WP_Query( $args );
							if ( $query->have_posts() ) :
								while ( $query->have_posts() ) :
									$query->the_post();
									get_template_part( 'template-parts/content', 'event-mini-card' );
								endwhile;
								wp_reset_postdata();
							endif; ?>
                        <a href="<?php echo get_permalink( get_page_by_path( 'podiyi' ) ); ?>"
                           class="button--large"><?php the_field( 'events_btn' ); ?>
                            <svg width="8" height="16">
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right"></use>
                            </svg>
                        </a>
                    </div>
                </div>

                <a href="<?php echo get_permalink( get_page_by_path( 'podiyi' ) ); ?>"
                   class="button--large hidden-on-desktop"><?php the_field( 'events_btn' ); ?>
                    <svg width="8" height="16">
                        <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right"></use>
                    </svg>
                </a>
            </div>
        </section>

        <!--  Results section  -->
        <section class="results">
            <div class="container">
                <div class="results-wrapper">
                    <h2 class="title-gradient-h1"><?php the_field( 'results_title' ); ?></h2>
                    <p class="text"><?php the_field( 'results_text' ); ?></p>
                    <div class="card-list">
						<?php if ( have_rows( 'results_cards' ) ): ?>
							<?php while ( have_rows( 'results_cards' ) ): the_row(); ?>
                                <div class="card">
                                    <p class="card-number"><?php the_sub_field( 'number' ); ?></p>
                                    <p class="card-title"><?php the_sub_field( 'title' ); ?></p>
                                    <p class="card-description"><?php the_sub_field( 'description' ); ?></p>
                                </div>
							<?php endwhile; ?>
						<?php endif; ?>
                    </div>
                    <div class="text-list">
						<?php if ( have_rows( 'results_text_items' ) ): ?>
							<?php while ( have_rows( 'results_text_items' ) ): the_row(); ?>
                                <p><?php the_sub_field( 'description' ); ?></p>
							<?php endwhile; ?>
						<?php endif; ?>
                    </div>

                </div>
            </div>
        </section>

        <!--  Gallery section -->
        <section class="gallery">
            <div class="container">
                <h2 class="title-gradient-h1"><?php the_field( 'gallery_title' ); ?></h2>
                <div class="carousel-wrapper">
                    <div class="swiper swiperGallery">
						<?php
							$images = get_field( 'gallery_images' );
							if ( $images ): ?>
                                <div class="swiper-wrapper">
									<?php foreach ( $images as $image ): ?>
                                        <a class="swiper-slide" href="<?php echo esc_url( $image['url'] ); ?>"
                                           data-lightbox="galleryImages">
                                            <img src="<?php echo esc_url( $image['url'] ); ?>"
                                                 alt="<?php echo esc_attr( $image['alt'] ); ?>">
                                        </a>
									<?php endforeach; ?>
                                </div>
							<?php endif; ?>
                    </div>
                    <div class="button-arrow--medium button-next">
                        <svg width="12" height="24">
                            <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right"></use>
                        </svg>
                    </div>
                    <div class="button-arrow--medium button-prev">
                        <svg width="12" height="24">
                            <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right"></use>
                        </svg>
                    </div>
                </div>
                <a href="<?php echo get_permalink( get_page_by_path( 'galereya' ) ); ?>"
                   class="button--large"><?php the_field( 'gallery_btn' ); ?>
                    <svg width="8" height="16">
                        <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right"></use>
                    </svg>
                </a>
            </div>
        </section>
    </main>

<?php get_footer(); ?>