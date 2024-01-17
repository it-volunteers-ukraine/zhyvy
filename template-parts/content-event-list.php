<?php
	$category_name = $args['category_name'] ?? '';
?>

<?php
	$argsCategory  = ( [
		'post_type'  => 'events', // doesn't work - find alternative
		'hide_empty' => true,
	] );
	$allCategories = get_categories( $argsCategory );
?>

<nav class="content-event-list-nav container">
    <ul>
        <li class="navbar-tab">
            <a href="<?php echo get_permalink( get_page_by_path( 'podiyi' ) ); ?>"
               class="event-link event-link--colorful <?php echo ( ! is_category() ) ? '_active' : '' ?>">
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

<section class="container">
    <div class="content-event-list-grid">
		<?php
			$argsQuery    = ( [
				'posts_per_page' => 6,
				'post_type'      => 'events',
				'paged'          => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
				'category_name'  => $category_name,
			] );
			$query        = new WP_Query( $argsQuery );
			$total_pages  = $query->max_num_pages;
			$current_page = max( 1, get_query_var( 'paged' ) );

			if ( $query->have_posts() ) :
				while ( $query->have_posts() ) :
					$query->the_post();
					?>

                    <article class="card">
                        <a href="<?php the_permalink(); ?>">
							<?php get_template_part( 'template-parts/content', 'event-card' ); ?>
                        </a>
                    </article>

				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
    </div>
</section>

<section class="pagination">
	<?php
		echo paginate_links( [
			'base'      => get_pagenum_link( 1 ) . '%_%',
			'format'    => '/page/%#%',
			'current'   => $current_page,
			'total'     => $total_pages,
			'prev_next' => false,
		] );
	?>
</section>
