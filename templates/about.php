<?php
/*
Template Name: about
*/
get_header();
?>
<main class="about-page main" id="about">

    <?php get_template_part('template-parts/page-banner', null, array(
        'title' => get_field("about_title")
    )); ?>


    <!--    history_section*************************************** -->
    <section class="container history" id="history">
        <?php
        $image = get_field('history_image');
        if (!empty($image)): ?>

            <div class="history_image-thumb">
                <img src="<?php
                echo esc_url($image['url']);
                ?>" alt="<?php
                echo esc_attr($image['alt']);
                ?>" />
                <?php
        endif;
        ?>
        </div>

        <div class="history-content">
            <h1 class="title-gradient-h1">
                <?php
                the_field('history_title');
                ?>
            </h1>

            <div class="history-content_description">
                <p class="history-content_text">
                    <?php
                    the_field('history_text');
                    ?>
                </p>
            </div>
        </div> <!-- /   history-content -->
    </section>


    <!-- team_section  ***************************************-->
    <section class="team" id="team">

        <div class="container team-container">
            <h2 class="title-gradient-h1">
                <?php
                the_field('team_title');
                ?>
            </h2>

            <div class="team_list">
                <?php
                if (have_rows('team_card')): ?>
                    <?php
                    while (have_rows('team_card')):
                        the_row();
                        ?>

                        <div class="team-card">
                            <div class="front-side">
                                <img src="<?php
                                the_sub_field('team_card_image');
                                ?>" alt="<?php
                                the_sub_field('team_card_name');
                                ?> <?php
                                 the_sub_field('team_card_surname');
                                 ?>">

                            </div> <!-- / front-side -->

                            <div class="back-side">
                                <p class="back-side_text">
                                    <?php
                                    the_sub_field('my_goal');
                                    ?>
                                </p>
                            </div> <!--/ back-side  -->

                            <!-- content FOR CARDS surname name  etc ...  -->
                            <div class="team-card_content content">
                                <span class="content_title">
                                    <?php
                                    the_sub_field('team_card_name');
                                    ?>
                                    <?php
                                    the_sub_field('team_card_surname');
                                    ?>
                                </span>
                                <span class="content_position">
                                    <?php
                                    the_sub_field('team_card_position');
                                    ?>
                                </span>
                            </div> <!-- /team-card_content content  -->
                        </div> <!-- / team-card  -->
                        <?php
                    endwhile;
                    ?>
                    <?php
                endif;
                ?>
            </div> <!-- /team_list -->
        </div>
        <!-- /container  -->
    </section>


    <!-- results_section *************************************** -->
    <section class="results" id="results">

        <div class="container results-container">
            <h2 class="title-gradient-h1">
                <?php
                the_field('results_title');
                ?>
            </h2>

            <!-- swiper_slide of results_section  -->
            <div class="swiper swiperResults">
                <div class="swiper-wrapper">
                    <?php
                    $images = get_field('results_banners');
                    if ($images): ?>

                        <?php foreach ($images as $image): ?>
                            <div class="swiper-slide">
                                <a href="<?php
                                echo esc_url($image['url']);
                                ?>" data-lightbox="
    <?php
            the_ID();
            ?>" tabindex="1">
                                    <img src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                </a>
                            </div> <!-- /swiper_slide of results_section -->
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div> <!-- /swiper-wraper  -->

                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div> <!-- /swiperResults  -->
        </div> <!-- / results-container   -->
    </section>


    <!-- honors-and-thanks__section *************************************** -->
    <section class="honors-and-thanks" id="thanks">

        <div class="container thanks-container">
            <h2 class="title-gradient-h1">
                <?php
                the_field('thanks_title');
                ?>
            </h2>

            <!-- swiper_slide of honors-and-thanks_section  -->
            <div class="swiper swiperHonor">
                <div class="swiper-wrapper">
                    <?php
                    $images = get_field('honour_galery');
                    if ($images): ?>

                        <?php foreach ($images as $image): ?>
                            <div class="swiper-slide">
                                <a href="<?php
                                echo esc_url($image['url']);
                                ?>" data-lightbox="
    <?php
            the_ID();
            ?>" tabindex="1">
                                    <img src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                </a>
                            </div> <!-- /swiper_slide of honors-and-thanks__section -->
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div> <!-- /swiper-wraper of honors-and-thanks__section -->

                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div> <!-- /swiperHonor  -->
        </div> <!-- / thanks-container   -->
    </section>



    <!-- partners_section  -->
    <section class="partners" id="partners">

        <div class="container partners-container">
            <h2 class="title-gradient-h1">
                <?php
                the_field('partners_title');
                ?>
            </h2>

            <?php if (have_rows('partners')): ?>

                <div class="partners_list">
                    <?php while (have_rows('partners')):
                        the_row(); ?>
                        <?php
                        $logo = get_sub_field('partners_logo');
                        $name = get_sub_field('partners_name');
                        $link = get_sub_field('partners_link');
                        ?>

                        <div class="partners-card ">
                            <?php
                            if ($link && $logo) {
                                ?>
                                <div class="  partners-card-img-wrapper">
                                    <a href="<?php echo $link; ?>" target="_blanc" tabindex="1">
                                        <img src="<?php echo $logo['url']; ?>" alt="<?php echo $name; ?>" loading="lazy" />
                                        <span class='hint'>
                                            Зовнішнє посиланя
                                        </span>
                                    </a>
                                </div> <!-- /partners-card-img-wrapper  -->

                                <?php
                            } elseif (!$link && $logo) {
                                ?>
                                <div class="  partners-card-img-wrapper">
                                    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $name; ?>" loading="lazy" />
                                </div> <!-- /partners-card-img-wrapper  -->
                                <?php
                            } elseif ($link && !$logo && $name) {
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
                        </div> <!--/ partners-card  -->
                        <?php
                    endwhile; ?>
                </div> <!--/ partners_list -->
            <?php endif; ?>
        </div> <!-- /partners-container  -->
    </section>

    <!-- button-up  -->
    <div class="container button-up-wrapp">
        <button class="button-up">
            <a href="#about">
                <svg width="24px" height="24px">
                    <use class="arrow-swipe" href="<?php
                    bloginfo('template_url');
                    ?>/assets/images/sprite.svg#icon-arrow-24">
                    </use>
                </svg>
            </a>
        </button>
    </div>

</main>

<?php
get_footer();
