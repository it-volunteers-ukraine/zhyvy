    <footer class="footer">
        <div class="footer-content-wrapper">
            <div class="footer-content container">
                <div class="footer-logo-wrapper">
                    <a class="footer-logo" href="<?php echo site_url(''); ?>">
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/footer-logo.png"
                            alt="footer logo" />
                    </a>
                    <p class="footer-logo-desc">
                        Громадська Організація ЖИВИ Хаб ЖИВИ Центр Психокорекції Школа
                        Тверезого і Офігєнного Життя
                    </p>

                    <ul class="footer-socials-list">
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
                        <li class="footer-social-item">
                            <a class="footer-social-link" href="<?php the_field( 'facebook_main', 'option' ); ?>"
                                target="_blank"><svg class="footer-social-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-facebook">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <li class="footer-social-item">
                            <a class="footer-social-link" href="<?php the_field( 'youtube', 'option' ); ?>"
                                target="_blank"><svg class="footer-social-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-youtube">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <li class="footer-social-item">
                            <a class="footer-social-link" href="<?php the_field( 'instagram', 'option' ); ?>"
                                target="_blank"><svg class="footer-social-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-instagram">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <li class="footer-social-item">
                            <a class="footer-social-link" href="<?php the_field( 'tiktok', 'option' ); ?>"
                                target="_blank"><svg class="footer-social-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-tik_tok">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <li class="footer-social-item">
                            <a class="footer-social-link" href="<?php the_field( 'viber', 'option' ); ?>"
                                target="_blank"><svg class="footer-social-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-viber">
                                    </use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-menu-wrapper">
                    <ul class="footer-menu-list">
                        <li class="footer-menu-item">
                            <div class="footer-menu-item-title-wrapper " id="footerDropDownBtn-1">
                                <h3 class="footer-menu-item-title">про нас</h3>
                                <svg class="footer-menu-item-title-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-btn_arrow">
                                    </use>
                                </svg>
                            </div>


                            <div class="footer-menu-item-wrapper JSfooter-menu-item-wrapper" id="footerDropDownMenu-1">
                                <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-1', 'menu_class' => 'link-list last-child' )); ?>
                            </div>
                            <!-- <ul class="footer-menu-subList">
                                <li class="footer-menu-subItem">
                                    <a class="footer-menu-subItem-link" href="">Історія створення</a>
                                </li>
                                <li class="footer-menu-subItem">
                                    <a class="footer-menu-subItem-link" href="">Наша команда</a>
                                </li>
                                <li class="footer-menu-subItem">
                                    <a class="footer-menu-subItem-link" href="">Результати</a>
                                </li>
                                <li class="footer-menu-subItem">
                                    <a class="footer-menu-subItem-link" href="">Сертифікати/Подяки</a>
                                </li>
                                <li class="footer-menu-subItem">
                                    <a class="footer-menu-subItem-link" href="">Партнери</a>
                                </li>
                            </ul> -->
                        </li>
                        <li class="footer-menu-item">
                            <div class="footer-menu-item-title-wrapper" id="footerDropDownBtn-2">
                                <h3 class="footer-menu-item-title">контакти</h3>
                                <svg class="footer-menu-item-title-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-btn_arrow">
                                    </use>
                                </svg>
                            </div>
                            <div class="footer-menu-item-wrapper JSfooter-menu-item-wrapper" id="footerDropDownMenu-2">
                                <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-2', 'menu_class' => 'link-list last-child' )); ?>
                            </div>
                            <!-- <ul class="footer-menu-subList">
                                <li class="footer-menu-subItem">
                                    <a class="footer-menu-subItem-link" href="">Наші контакти</a>
                                </li>
                            </ul> -->
                        </li>
                        <li class="footer-menu-item">
                            <div class="footer-menu-item-title-wrapper" id="footerDropDownBtn-3">
                                <h3 class="footer-menu-item-title">ПОДІЇ</h3>
                                <svg class="footer-menu-item-title-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-btn_arrow">
                                    </use>
                                </svg>
                            </div>
                            <div class="footer-menu-item-wrapper" id="footerDropDownMenu-3">
                                <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-3', 'menu_class' => 'link-list last-child' )); ?>
                            </div>
                            <!-- <ul class="footer-menu-subList">
                                <li class="footer-menu-subItem">
                                    <a class="footer-menu-subItem-link" href="">Всі заходи</a>
                                </li>
                                <li class="footer-menu-subItem">
                                    <a class="footer-menu-subItem-link" href="">Online заходи</a>
                                </li>
                                <li class="footer-menu-subItem">
                                    <a class="footer-menu-subItem-link" href="">Offline заходи</a>
                                </li>
                            </ul> -->
                        </li>
                        <li class="footer-menu-item">
                            <div class="footer-menu-item-title-wrapper" id="footerDropDownBtn-4">
                                <h3 class="footer-menu-item-title">ресурси</h3>
                                <svg class="footer-menu-item-title-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-btn_arrow">
                                    </use>
                                </svg>
                            </div>
                            <div class="footer-menu-item-wrapper" id="footerDropDownMenu-4">
                                <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-4', 'menu_class' => 'link-list last-child' )); ?>
                            </div>
                            <!-- <ul class="footer-menu-subList">
                                <li class="footer-menu-subItem">
                                    <a class="footer-menu-subItem-link" href="">Корисна інформація</a>
                                </li>
                                <li class="footer-menu-subItem">
                                    <a class="footer-menu-subItem-link" href="">Галерея</a>
                                </li>
                            </ul> -->
                        </li>
                        <li class="footer-menu-item">
                            <div class="footer-menu-item-title-wrapper" id="footerDropDownBtn-5">
                                <h3 class="footer-menu-item-title">НАПРЯМКИ РОБОТИ</h3>
                                <svg class="footer-menu-item-title-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-btn_arrow">
                                    </use>
                                </svg>
                            </div>
                            <div class="footer-menu-item-wrapper" id="footerDropDownMenu-5">
                                <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-5', 'menu_class' => 'link-list last-child' )); ?>
                            </div>
                            <!-- <ul class="footer-menu-subList">
                                <li class="footer-menu-subItem">
                                    <a class="footer-menu-subItem-link" href="">Школа Тверезого і Офігєнного Життя</a>
                                </li>
                                <li class="footer-menu-subItem">
                                    <a class="footer-menu-subItem-link" href="">Тренінг для співзалежних “Марійка”</a>
                                </li>
                                <li class="footer-menu-subItem">
                                    <a class="footer-menu-subItem-link" href="">Кабінет психологічної допомоги</a>
                                </li>
                                <li class="footer-menu-subItem">
                                    <a class="footer-menu-subItem-link" href="">Відеоефіри та інфоблоки</a>
                                </li>
                                <li class="footer-menu-subItem">
                                    <a class="footer-menu-subItem-link" href="">Марафон “Шлях до себе”</a>
                                </li>
                                <li class="footer-menu-subItem">
                                    <a class="footer-menu-subItem-link" href="">Волонтерська діяльність</a>
                                </li>
                                <li class="footer-menu-subItem">
                                    <a class="footer-menu-subItem-link" href="">Групи взаємодопомоги</a>
                                </li>
                            </ul> -->
                        </li>
                    </ul>
                    <ul class="footer-socials-list-2">
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
                        <li class="footer-social-item">
                            <a class="footer-social-link" href="<?php the_field( 'facebook_main', 'option' ); ?>"
                                target="_blank">
                                <svg class="footer-social-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-facebook">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <li class="footer-social-item">
                            <a class="footer-social-link" href="<?php the_field( 'youtube', 'option' ); ?>"
                                target="_blank"><svg class="footer-social-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-youtube">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <li class="footer-social-item">
                            <a class="footer-social-link" href="<?php the_field( 'instagram', 'option' ); ?>"
                                target="_blank"><svg class="footer-social-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-instagram">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <li class="footer-social-item">
                            <a class="footer-social-link" href="<?php the_field( 'tiktok', 'option' ); ?>"
                                target="_blank"><svg class="footer-social-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-tik_tok">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <li class="footer-social-item">
                            <a class="footer-social-link" href="<?php the_field( 'viber', 'option' ); ?>"
                                target="_blank"><svg class="footer-social-icon">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#colorIcon-viber">
                                    </use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=" footer-btns-panel ">
            <div class="container footer-btns-wrapper">
                <div class="footer-btn-wrapper">
                    <a class="button footer-btn" href="<?php the_field( 'questionnaire', 'option' ); ?>"
                        target="_blank">заповнити анкету
                        <i class="icon-chevron-right"></i>
                    </a>
                    <p class="footer-btn-desc">отримайте допомогу</p>
                </div>
                <div class="footer-btn-wrapper">
                    <a class="button footer-btn" href="tel:<?php the_field( 'phone_hotline', 'option' ); ?>"
                        target="_blank" aria-label="Подзвонити на гарячу лінію">
                        <i class="icon-phone"></i>
                        <?php the_field( 'phone_hotline_display', 'option' ); ?></a>
                    <p class="footer-btn-desc">телефон горячої лінії</p>
                </div>
                <div class="footer-btn-wrapper">
                    <a class="button footer-btn"
                        href="<?php echo get_permalink( get_page_by_path( 'pidtrymaty' ) ); ?>">підтримати
                        <i class="icon-chevron-right"></i>
                    </a>
                    <p class="footer-btn-desc">ДОНАТ</p>
                </div>
            </div>
        </div>
        <div class="footer-copyright-wrapper">
            <p class="footer-copyright-text">© 2023 ГО “ЖИВИ” All Right Reserved</p>
        </div>
    </footer>
    <?php wp_footer(); ?>
    </body>

    </html>