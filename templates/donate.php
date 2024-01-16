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
        <section class="container donate">
            <div class="donate-content">
                <div class="donate-content-left">
                    <h1 class="title-gradient-h1"><?php echo esc_html( get_field('title') ); ?></h1>
                    <div class="donate-content-text">
                        <?php echo wp_kses_post ( get_field('text') ); ?>
                    </div>
                </div>
                <div class="donate-content-right">
                    <div class="qr-code-wrapper">
                        <?php if( get_field('qrcode') ): ?>
                            <img src="<?php the_field('qrcode'); ?>" alt="QR-code для донату" width='217' heigh="217"/>
                        <?php endif; ?>
                    </div>
                    <div class="payment-details-wrapper">
                        <h2 class="payment-details-title"><?php echo esc_html( get_field('header_donate_details') ); ?></h2>
                        <p class="payment-details-text-bold">Розрахунковий рахунок ГО ЖИВИ:</p>
                        <div class="account-wrapper">
                            <p id="account-number"><?php echo esc_html( get_field('account') ); ?></p>
                            <div class="copy-to-clipboard" data-clipboard-target="#account-number">
                                <svg width="16" height="16">
                                    <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-copy"></use>
                                </svg>
                            </div>
                        </div>
                        <p class="payment-details-text-bold"><?php echo esc_html( get_field('card_name') ); ?></p>
                        <p><?php echo esc_html( get_field('card_holder') ); ?></p>
                        <div class="card-number-wrapper">
                            <p id="card-number"><?php echo esc_html( get_field('card_number') ); ?></p>
                            <div class="copy-to-clipboard" data-clipboard-target="#card-number">
                                <svg width="16" height="16">
                                    <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-copy"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


<?php get_footer(); ?>