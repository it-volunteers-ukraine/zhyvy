<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
    <title>It-volunteers</title>
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header-content">

                <div class="header-logo">
					<?php
						if ( has_custom_logo() ) {
							echo get_custom_logo();
						}
					?>
                </div>

                <div class="header-menu">
                    <div class="burger-menu__overlay"></div>

                    <nav class="menu-nav">
							<?php wp_nav_menu( [
								'theme_location' => 'header',
								'container'      => false,
								'menu_id'        => false,
								'echo'           => true,
								'items_wrap'     => '<ul id="%1$s" class="menu-list %2$s">%3$s</ul>',
							] );
							?>
                    </nav>

                    <a class="button--header"
                       href="<?php echo get_permalink( get_page_by_path('pidtrymaty') ); ?>">підтримати
                    </a>
                </div>
            </div>
        </div>
    </header>
	