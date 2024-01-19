<?php
	$category_name = $args['category_name'] ?? '';
?>

<?php get_template_part( 'template-parts/content', 'event-list-nav' ); ?>


<!-- Card grid for events-->
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
			'show_all'  => $total_pages <= 5,
			'end_size'  => 1,
			'mid_size'  => ( $current_page === 1 ) || ( $current_page == $total_pages ) ? 3 : 1,
		] );
	?>
</section>
