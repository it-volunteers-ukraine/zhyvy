<?php
	/*
	Template Name: contacts
	*/
	get_header();
?>

<main>

    <?php
			get_template_part( 'template-parts/page-banner', null, array(
				'title' => get_field( "title" )
			) ); ?>

    <section class="container">
        <div class="content">
            <div class="contacts">

                <!--  Top  -->
                <div class="contacts-top">
                    <a href="<?php the_field( 'google_map_link', 'option' ); ?>" target="_blank"
                        aria-label="Показати адресу на карті">
                        <span class="icon"
                            style="background: url('<?php bloginfo( 'template_url' ); ?>/assets/images/colorIcon-location.svg');"></span>
                        <p class="text"><?php the_field( 'address', 'option' ); ?></p>
                    </a>

                    <a href="mailto:<?php the_field( 'email', 'option' ); ?>" target="_blank"
                        aria-label="Зв'язатись за допомогою електронної пошти">
                        <span class="icon"
                            style="background: url('<?php bloginfo( 'template_url' ); ?>/assets/images/colorIcon-envelope.svg');"></span>
                        <p class="text"><?php the_field( 'email', 'option' ); ?></p>
                    </a>

                    <a href="tel:<?php the_field( 'phone_hotline', 'option' ); ?>" target="_blank"
                        aria-label="Зв'язатись за допомогою телефону">
                        <span class="icon"
                            style="background: url('<?php bloginfo( 'template_url' ); ?>/assets/images/colorIcon-phone.svg');"></span>
                        <p class="text">
                            <span><?php the_field( 'phone_hotline_display', 'option' ); ?></span>
                            <span><?php the_field( 'phone_text' ); ?></span>
                        </p>
                    </a>
                </div>

                <!--  Middle  -->
                <div class="contacts-middle">
                    <?php if ( get_field( 'facebook_main', 'option' ) ) { ?>
                    <a href="<?php the_field( 'facebook_main', 'option' ); ?>" target="_blank"
                        aria-label="Перейти на сторінку в Фейсбук">
                        <span class="icon">
                            <svg width="32" height="32">
                                <use
                                    href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-facebook2">
                                </use>
                            </svg>
                        </span>
                        <p class="text"><?php the_field( 'facebook_main_text' ); ?></p>
                    </a>
                    <?php } ?>

                    <?php if ( get_field( 'facebook_hub', 'option' ) ) { ?>
                    <a href="<?php the_field( 'facebook_hub', 'option' ); ?>" target="_blank"
                        aria-label="Перейти на сторінку в Фейсбук">
                        <span class="icon">
                            <svg width="32" height="32">
                                <use
                                    href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-facebook2">
                                </use>
                            </svg>
                        </span>
                        <p class="text"><?php the_field( 'facebook_hub_text' ); ?></p>
                    </a>
                    <?php } ?>

                    <?php if ( get_field( 'site', 'option' ) ) { ?>
                    <a href="<?php the_field( 'site', 'option' ); ?>" target="_blank"
                        aria-label="Перейти на сайт-візитку">
                        <span class="icon">
                            <svg width="32" height="32">
                                <use
                                    href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-site">
                                </use>
                            </svg>
                        </span>
                        <p class="text"><?php the_field( 'site_text' ); ?></p>
                    </a>
                    <?php } ?>

                    <?php if ( get_field( 'viber', 'option' ) ) { ?>
                    <a href="<?php the_field( 'viber', 'option' ); ?>" target="_blank"
                        aria-label="Зв'язатись за допомогою Вайбер">
                        <span class="icon">
                            <svg width="32" height="32">
                                <use
                                    href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-viber">
                                </use>
                            </svg>
                        </span>
                        <p class="text"><?php the_field( 'viber_text' ); ?></p>
                    </a>
                    <?php } ?>
                </div>

                <!--  Bottom  -->
                <div class="contacts-bottom">
                    <?php if ( get_field( 'twitter', 'option' ) ) { ?>
                    <a href="<?php the_field( 'twitter', 'option' ); ?>" target="_blank"
                        aria-label="Перейти на сторінку в Твіттер">
                        <span class="icon">
                            <svg width="32" height="32">
                                <use
                                    href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-twitter">
                                </use>
                            </svg>
                        </span>
                    </a>
                    <?php } ?>

                    <?php if ( get_field( 'youtube', 'option' ) ) { ?>
                    <a href="<?php the_field( 'youtube', 'option' ); ?>" target="_blank"
                        aria-label="Перейти на сторінку в Ютуб">
                        <span class="icon">
                            <svg width="32" height="32">
                                <use
                                    href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-youtube">
                                </use>
                            </svg>
                        </span>
                    </a>
                    <?php } ?>

                    <?php if ( get_field( 'instagram', 'option' ) ) { ?>
                    <a href="<?php the_field( 'instagram', 'option' ); ?>" target="_blank"
                        aria-label="Перейти на сторінку в Інстаграм">
                        <span class="icon">
                            <svg width="32" height="32">
                                <use
                                    href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-instagram">
                                </use>
                            </svg>
                        </span>
                    </a>
                    <?php } ?>

                    <?php if ( get_field( 'telegram', 'option' ) ) { ?>
                    <a href="<?php the_field( 'telegram', 'option' ); ?>" target="_blank"
                        aria-label="Перейти на групу в Телеграм">
                        <span class="icon">
                            <svg width="32" height="32">
                                <use
                                    href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-telegram">
                                </use>
                            </svg>
                        </span>
                    </a>
                    <?php } ?>

                    <?php if ( get_field( 'tiktok', 'option' ) ) { ?>
                    <a href="<?php the_field( 'tiktok', 'option' ); ?>" target="_blank"
                        aria-label="Перейти на сторінку в Тікток">
                        <span class="icon">
                            <svg width="32" height="32">
                                <use
                                    href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-tik_tok">
                                </use>
                            </svg>
                        </span>
                    </a>
                    <?php } ?>
                </div>
            </div>

            <!--  Map  -->
            <div class="map">
                <iframe src="<?php the_field( 'google_map_embed', 'option' ); ?>" width="100%" height="100%"
                    style="border:0;" allowfullscreen loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

</main>


<?php get_footer(); ?>