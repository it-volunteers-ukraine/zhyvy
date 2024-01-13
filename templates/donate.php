<?php
	/*
	Template Name: donate
	*/
	get_header();
?>

    <main>
        <?php get_template_part( 'template-parts/page-banner', null, array(
                'title' => get_field( "title" )
            ) ); ?>
        <section class="donate">
            <div class="container">
                <h1 class="title-gradient-h1"><?php echo esc_html( get_field('title') ); ?></h1>
                <div class="donate-text-wrapper">
                    <?php echo wp_kses_post ( get_field('text') ); ?>
                </div>
                <div class="donate-payment-details">
                    <div class="qr-code-wrapper">
                        <?php if( get_field('qrcode') ): ?>
                            <img src="<?php the_field('qrcode'); ?>" alt="QR-code для донату" />
                        <?php endif; ?>
                    </div>
                    <div class="payment-details-wrapper">
                        <h2 class="title-gradient-h2"><?php echo esc_html( get_field('header_donate') ); ?></h2>
                        <p>Розрахунковий рахунок ГО ЖИВИ:</p>
                        <p><?php echo esc_html( get_field('account') ); ?></p>
                        <div class="">
                            <svg width="16" height="16">
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-copy"></use>
                            </svg>
                        </div>
                        <p>Картка Приват Банку:</p>
                        <p><?php echo esc_html( get_field('card_holder') ); ?></p>
                        <p><?php echo esc_html( get_field('card_number') ); ?></p>
                        <div class="">
                            <svg width="16" height="16">
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-copy"></use>
                            </svg>
                        </div>
                    </div>
                </div>


               
            </div>
        </section>
    </main>


<?php get_footer(); ?>