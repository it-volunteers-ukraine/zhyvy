<?php
	/*
	Template Name: about
	*/
	get_header();
?>
    <main class="about-page main" id="about">

		<?php get_template_part(
			'template-parts/page-banner',
			null,
			array(
				'title' => get_field( "about_title" )
			)
		); ?>


        <!--    history_section -->
        <section class="history" id="history">
            <div class="container">
                <div class="history-wrapper">
                    <div class="image">
                        <img src="<?php echo esc_url( get_field( 'history_image' )['url'] ); ?>"
                             alt="<?php echo esc_attr( get_field( 'history_image' )['alt'] ); ?>">
                    </div>
                    <div class="content">
                        <h2 class="title-gradient-h1"><?php the_field( 'history_title' ); ?></h2>
                        <p><?php the_field( 'history_text' ); ?></p>
                    </div>
                </div>
            </div>
        </section>


        <!-- team_section  -->
        <section class="team" id="team">
            <div class="container">
                <h2 class="title-gradient-h1"><?php the_field( 'team_title' ); ?></h2>

                <div id="teamCardsGrid" class="grid-container">
					<?php if ( have_rows( 'team_card' ) ) :
						while ( have_rows( 'team_card' ) ) :
							the_row(); ?>
                            <div class="grid-item">
                                <article class="card" onclick=toggleCardMobileHover(this)>
                                    <div class="top">
                                        <div class="top-front">
                                            <img src="<?php the_sub_field( 'team_card_image' ) ?>"
                                                 alt="<?php the_sub_field( 'team_card_name' ) . ' ' .
											                the_sub_field( 'team_card_surname' ); ?>">
                                        </div>
                                        <div class="top-back">
                                            <p><?php the_sub_field( 'my_goal' ); ?></p>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <h3><?php the_sub_field( 'team_card_name' ) . ' ' .
										          the_sub_field( 'team_card_surname' ); ?></h3>
                                        <p><?php the_sub_field( 'team_card_position' ); ?></p>
                                    </div>
                                </article>
                            </div>
						<?php endwhile;
					endif; ?>
                </div>
            </div>
        </section>


        <!-- results_section  -->
        <section class="results" id="results">
            <div class="container">
                <div class="results-container">

                    <h2 class="title-gradient-h1">
						<?php
							the_field( 'results_title' );
						?>
                    </h2>

                    <div class="swiper swiperResults">
                        <div class="swiper-wrapper">
							<?php
								$images = get_field( 'results_banners' );
								if ( $images ): ?>

							<?php foreach ( $images as $image ): ?>
                                <div class="swiper-slide">
                                    <a href="<?php
										echo esc_url( $image['url'] );
									?>" data-lightbox="resultsGallery" tabindex="1">
                                        <img src="<?php echo esc_url( $image['url'] ); ?>"
                                             alt="<?php echo esc_attr( $image['alt'] ); ?>"/>
                                    </a>
                                </div>
							<?php endforeach; ?>
                        </div>
						<?php endif; ?>

                        <div class="swiper-pagination"></div>
                        <div class="button-arrow--medium button-prev">
                            <svg width="12" height="24">
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right">
                                </use>
                            </svg>
                        </div>
                        <div class="button-arrow--medium button-next">
                            <svg width="12" height="24">
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right">
                                </use>
                            </svg>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- honors-and-thanks section  -->
        <section class="honors" id="honors">
            <div class="container">
                <h2 class="title-gradient-h1"><?php the_field( 'thanks_title' ); ?></h2>
                <div class="carousel-wrapper">
                    <div class="swiper swiperHonors">
						<?php
							$images = get_field( 'honour_galery' );
							if ( $images ): ?>
                                <div class="swiper-wrapper">
									<?php foreach ( $images as $image ): ?>
                                        <a class="swiper-slide" href="<?php echo esc_url( $image['url'] ); ?>"
                                           data-lightbox="honorsGallery">
                                            <img src="<?php echo esc_url( $image['url'] ); ?>"
                                                 alt="<?php echo esc_attr( $image['alt'] ); ?>">
                                        </a>
									<?php endforeach; ?>
                                </div>
							<?php endif; ?>
                    </div>
                    <div class="button-arrow--medium button-next_honors">
                        <svg width="12" height="24">
                            <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right"></use>
                        </svg>
                    </div>
                    <div class="button-arrow--medium button-prev_honors">
                        <svg width="12" height="24">
                            <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </section>


        <!-- partners_section  -->
        <section class="partners" id="partners">

            <div class="container">
                <div class="partners-container">

                    <h2 class="title-gradient-h1">
						<?php
							the_field( 'partners_title' );
						?>
                    </h2>

					<?php if ( have_rows( 'partners' ) ): ?>

                        <div class="partners_list">
							<?php while ( have_rows( 'partners' ) ):
								the_row(); ?>
								<?php
								$logo = get_sub_field( 'partners_logo' );
								$name = get_sub_field( 'partners_name' );
								$link = get_sub_field( 'partners_link' );
								?>

                                <div class="partners-card ">
									<?php
										if ( $link && $logo ) {
											?>
                                            <div class="  partners-card-img-wrapper">
                                                <a href="<?php echo $link; ?>" target="_blanc" tabindex="1">
                                                    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $name; ?>"
                                                         loading="lazy"/>
                                                    <span class='hint'>
                                                Зовнішнє посиланя
                                            </span>
                                                </a>
                                            </div>

											<?php
										} elseif ( ! $link && $logo ) {
											?>
                                            <div class="  partners-card-img-wrapper">
                                                <img src="<?php echo $logo['url']; ?>" alt="<?php echo $name; ?>"
                                                     loading="lazy"/>
                                            </div>
											<?php
										} elseif ( $link && ! $logo && $name ) {
											?>
                                            <a href="<?php echo $link; ?>" target="_blanc" tabindex="1">
                                                <p class="partners_name">
													<?php echo $name; ?>
                                                </p>
                                                <div class='hint_wraper'>
                                                    <p class='hint'>
                                                        Зовнішнє посиланя
                                                    </p>
                                                </div>
                                            </a>
											<?php
										} else {
											?>
                                            <p class="partners_name">
												<?php echo $name; ?>
                                            </p>
											<?php
										}
									?>
                                </div>
							<?php
							endwhile; ?>
                        </div>
					<?php endif; ?>
                </div>
            </div>
        </section>
    </main>

<?php
	get_footer();
