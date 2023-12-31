<?php
	/*
	Template Name: donate
	*/
	get_header();
?>
    <h2>donate page</h2>

    <main>
        <section class="container">
            <div style="background: #2d3136; padding: 20px; margin-top: 40px">
                <h2 class="title-gradient-h1">title gradient h1</h2>

                <h2 class="title-gradient-h2">title gradient h2</h2>

                <h2 class="title-page">title page</h2>

                <h2 class="title-event">title event</h2>
            </div>

            <div style="background: #2d3136; padding: 20px; margin-top: 40px">

                <a href="#" class="button--header">button header</a>

                <a href="#" class="button--email">button email</a>

                <a href="#" class="button--small">button small</a>

                <a href="#" class="button--medium">button medium</a>

                <a href="#" class="button--large">button large
                    <svg width="8" height="16">
                        <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right"></use>
                    </svg>
                </a>

                <br>
                <br>

                <a href="#" class="button--outlined">
                <span>
                    button outlined
                  <i class="icon-chevron-right"></i>
                </span>
                </a>

                <br>
                <br>

                <a href="#" class="button-arrow--small">
                    <svg width="8" height="16">
                        <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right"></use>
                    </svg>
                </a>

                <a href="#" class="button-arrow--medium">
                    <svg width="12" height="24">
                        <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right"></use>
                    </svg>
                </a>

                <a href="#" class="button-arrow--up">
                    <svg width="16" height="32" style="transform: rotate(-90deg);">
                        <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right"></use>
                    </svg>
                </a>

                <br>
                <br>

                <span class="tag--small tag--green">
                    Small tag
                </span>

                <span class="tag--large tag--green">
                    Large tag
                </span>

                <span class="tag--large tag--green">
                    Online
                </span>

                <span class="tag--large tag--orange">
                    Offline
                </span>

                <span class="tag--large tag--violet">
                    Щонеділі
                </span>
            </div>
        </section>
    </main>


<?php get_footer(); ?>