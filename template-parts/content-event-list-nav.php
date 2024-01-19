<?php
	$args          = ( [
		'hide_empty' => true,
	] );
	$allCategories = get_categories( $args );
?>


<!-- Navbar tabs for events-->
<!-- This part uses styles from content-event-list.scss-->
<nav class="content-event-list-nav container">
    <ul>
        <li class="navbar-tab">
            <a href="<?php echo get_permalink( get_page_by_path( 'podiyi' ) ); ?>"
               class="event-link event-link--colorful <?php echo ( ! is_category() && ! is_single() ) ? '_active' : '' ?>">
                <svg width="16" height="16">
                    <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-check"></use>
                </svg>
                <span>Всі</span>
            </a>
        </li>
		<?php foreach ( $allCategories as $category ) :
			$categoryColor = get_field( 'color', $category )['0'] ?? '';
			$currentCategory = single_cat_title( '', false );
			$categoryName = $category->name; ?>
            <li>
                <a href="<?php echo get_category_link( $category->term_id ) ?>"
                   class="event-link event-link--<?php echo $categoryColor ?>
                   <?php echo ( $currentCategory === $categoryName ) ? ' _active' : '' ?>">
                    <svg width="16" height="16">
                        <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-check"></use>
                    </svg>
                    <span> <?php echo $categoryName ?></span>
                </a>
            </li>
		<?php endforeach; ?>
    </ul>
</nav>