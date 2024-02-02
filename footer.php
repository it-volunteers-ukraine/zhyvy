    <!--  ============= to top button =============  -->
    <div class="to-top-wrapper container">
        <a href="#" class="button-arrow--up" aria-label="Кнопка вгору">
            <svg class="to-top-icon">
                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-to-top"></use>
            </svg>
        </a>
    </div>

    <!--  ============= footer =============  -->
    <footer class="footer">
        <div class="footer-content-wrapper">
            <div class="footer-content container">

                <!--  ============= footer-logo =============  -->
                <div class="footer-logo-wrapper">
                    <a class="footer-logo" href="<?php echo site_url(''); ?>">
                        <img class="footer-logo" src="<?php echo esc_url(get_field('footer_logo','options')['url']); ?>"
                            alt="logo" />
                    </a>
                    <p class="footer-logo-desc">
                        <?php the_field( 'footer_logo_desc', 'option' ); ?>
                    </p>

                    <!--  ============= footer-socials-list =============  -->
                    <ul class="footer-socials-list">

                        <?php if ( get_field( 'telegram', 'option' ) ) { ?>
                        <li class="footer-social-item">
                            <a class="footer-social-link" href="<?php the_field( 'telegram', 'option' ); ?>"
                                target="_blank">
                                <svg class="footer-social-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-telegram">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <?php } ?>

                        <?php if ( get_field( 'facebook_main', 'option' ) ) { ?>
                        <li class="footer-social-item">
                            <a class="footer-social-link" href="<?php the_field( 'facebook_main', 'option' ); ?>"
                                target="_blank"><svg class="footer-social-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-facebook">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <?php } ?>

                        <?php if ( get_field( 'youtube', 'option' ) ) { ?>
                        <li class="footer-social-item">
                            <a class="footer-social-link" href="<?php the_field( 'youtube', 'option' ); ?>"
                                target="_blank"><svg class="footer-social-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-youtube">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <?php } ?>

                        <?php if ( get_field( 'instagram', 'option' ) ) { ?>
                        <li class="footer-social-item">
                            <a class="footer-social-link" href="<?php the_field( 'instagram', 'option' ); ?>"
                                target="_blank"><svg class="footer-social-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-instagram">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <?php } ?>

                        <?php if ( get_field( 'tiktok', 'option' ) ) { ?>
                        <li class="footer-social-item">
                            <a class="footer-social-link" href="<?php the_field( 'tiktok', 'option' ); ?>"
                                target="_blank"><svg class="footer-social-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-tik_tok">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <?php } ?>

                        <?php if ( get_field( 'viber', 'option' ) ) { ?>
                        <li class="footer-social-item">
                            <a class="footer-social-link" href="<?php the_field( 'viber', 'option' ); ?>"
                                target="_blank"><svg class="footer-social-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-viber">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <?php } ?>

                    </ul>
                </div>

                <!--  ============= footer-menu =============  -->
                <div class="footer-menu-wrapper">
                    <ul class="footer-menu-list">
                        <li class="footer-menu-item">
                            <div data-path="one" class="footer-menu-item-title-wrapper footer-dropdown-toggle">
                                <h3 class="footer-menu-item-title">
                                    <?php the_field( 'footer_menu_title_1', 'option' ); ?>
                                </h3>
                                <svg data-icon="one" class="footer-menu-item-title-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-btn_arrow">
                                    </use>
                                </svg>
                            </div>
                            <div data-target="one" class="footer-menu-item-wrapper footer-dropdown-menu">
                                <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-1', 'menu_class' => 'link-list last-child' )); ?>
                            </div>
                        </li>
                        <li class="footer-menu-item">
                            <div data-path="two" class="footer-menu-item-title-wrapper footer-dropdown-toggle">
                                <h3 class="footer-menu-item-title">
                                    <?php the_field( 'footer_menu_title_2', 'option' ); ?>
                                </h3>
                                <svg data-icon="two" class="footer-menu-item-title-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-btn_arrow">
                                    </use>
                                </svg>
                            </div>
                            <div data-target="two" class="footer-menu-item-wrapper footer-dropdown-menu">
                                <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-2', 'menu_class' => 'link-list last-child' )); ?>
                            </div>
                        </li>
                        <li class="footer-menu-item">
                            <div data-path="three" class="footer-menu-item-title-wrapper footer-dropdown-toggle">
                                <h3 class="footer-menu-item-title">
                                    <?php the_field( 'footer_menu_title_3', 'option' ); ?>
                                </h3>
                                <svg data-icon="three" class="footer-menu-item-title-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-btn_arrow">
                                    </use>
                                </svg>
                            </div>
                            <div data-target="three" class="footer-menu-item-wrapper footer-dropdown-menu">
                                <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-3', 'menu_class' => 'link-list last-child' )); ?>
                            </div>
                        </li>
                        <li class="footer-menu-item">
                            <div data-path="four" class="footer-menu-item-title-wrapper footer-dropdown-toggle">
                                <h3 class="footer-menu-item-title">
                                    <?php the_field( 'footer_menu_title_4', 'option' ); ?>
                                </h3>
                                <svg data-icon="four" class="footer-menu-item-title-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-btn_arrow">
                                    </use>
                                </svg>
                            </div>
                            <div data-target="four" class="footer-menu-item-wrapper footer-dropdown-menu">
                                <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-4', 'menu_class' => 'link-list last-child' )); ?>
                            </div>

                        </li>
                        <li class="footer-menu-item">
                            <div data-path="five" class="footer-menu-item-title-wrapper footer-dropdown-toggle">
                                <h3 class="footer-menu-item-title">
                                    <?php the_field( 'footer_menu_title_5', 'option' ); ?>
                                </h3>
                                <svg data-icon="five" class="footer-menu-item-title-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-btn_arrow">
                                    </use>
                                </svg>
                            </div>
                            <div data-target="five" class="footer-menu-item-wrapper footer-dropdown-menu">
                                <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-5', 'menu_class' => 'link-list last-child' )); ?>
                            </div>
                        </li>
                    </ul>

                    <!--  ============= footer-socials-list-mob =============  -->
                    <ul class="footer-socials-list-mob">
                        <?php if ( get_field( 'telegram', 'option' ) ) { ?>
                        <li class="footer-social-item">
                            <a class="footer-social-link" href="<?php the_field( 'telegram', 'option' ); ?>"
                                target="_blank">
                                <svg class="footer-social-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-telegram">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <?php } ?>

                        <?php if ( get_field( 'facebook_main', 'option' ) ) { ?>
                        <li class="footer-social-item">
                            <a class="footer-social-link" href="<?php the_field( 'facebook_main', 'option' ); ?>"
                                target="_blank"><svg class="footer-social-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-facebook">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <?php } ?>

                        <?php if ( get_field( 'youtube', 'option' ) ) { ?>
                        <li class="footer-social-item">
                            <a class="footer-social-link" href="<?php the_field( 'youtube', 'option' ); ?>"
                                target="_blank"><svg class="footer-social-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-youtube">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <?php } ?>

                        <?php if ( get_field( 'instagram', 'option' ) ) { ?>
                        <li class="footer-social-item">
                            <a class="footer-social-link" href="<?php the_field( 'instagram', 'option' ); ?>"
                                target="_blank"><svg class="footer-social-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-instagram">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <?php } ?>

                        <?php if ( get_field( 'tiktok', 'option' ) ) { ?>
                        <li class="footer-social-item">
                            <a class="footer-social-link" href="<?php the_field( 'tiktok', 'option' ); ?>"
                                target="_blank"><svg class="footer-social-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-tik_tok">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <?php } ?>

                        <?php if ( get_field( 'viber', 'option' ) ) { ?>
                        <li class="footer-social-item">
                            <a class="footer-social-link" href="<?php the_field( 'viber', 'option' ); ?>"
                                target="_blank"><svg class="footer-social-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-viber">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>

        <!--  ============= footer-buttons-panel =============  -->
        <div class=" footer-btns-panel ">
            <div class="container footer-btns-wrapper">
                <div class="footer-btn-wrapper">
                    <a class="button footer-btn" href="<?php the_field( 'questionnaire', 'option' ); ?>"
                        target="_blank"><?php the_field( 'footer_btn_1', 'option' ); ?>
                        <i class="icon-chevron-right"></i>
                    </a>
                    <p class="footer-btn-desc"><?php the_field( 'footer_btn_desc_1', 'option' ); ?></p>
                </div>
                <div class="footer-btn-wrapper">
                    <a class="button footer-btn" href="tel:<?php the_field( 'phone_hotline', 'option' ); ?>"
                        target="_blank" aria-label="Подзвонити на гарячу лінію">
                        <i class="icon-phone"></i>
                        <?php the_field( 'footer_btn_2', 'option' ); ?></a>
                    <p class="footer-btn-desc"><?php the_field( 'footer_btn_desc_2', 'option' ); ?></p>
                </div>
                <div class="footer-btn-wrapper">
                    <a class="button footer-btn"
                        href="<?php echo get_permalink( get_page_by_path( 'pidtrymaty' ) ); ?>"><?php the_field( 'footer_btn_3', 'option' ); ?>
                        <i class="icon-chevron-right"></i>
                    </a>
                    <p class="footer-btn-desc"><?php the_field( 'footer_btn_desc_3', 'option' ); ?></p>
                </div>
            </div>
        </div>

        <!--  ============= footer-copyright =============  -->
        <div class="footer-copyright-wrapper">
            <p class="footer-copyright-text">© <?php echo date( "Y" ); ?> ГО “ЖИВИ” All Right Reserved</p>
        </div>
    </footer>
    <?php wp_footer(); ?>
    </body>

    </html>