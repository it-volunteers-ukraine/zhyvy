<!-- Small card for events used in sidebars-->
<article class="content-event-mini-card">
    <a class="card-wrapper" href="<?php the_permalink(); ?>">

        <div class="image">
            <img src="<?php echo esc_url( get_field( 'img' )['url'] ); ?>"
                 alt="<?php echo esc_attr( get_field( 'img' )['alt'] ); ?>">
        </div>

        <div class="description">
            <div class="tags">
				<?php $postCategories = get_the_terms( get_the_ID(), 'events_categories' );
					if ( ! empty( $postCategories ) ) :
						foreach ( $postCategories as $category ) :
							$categoryColor = get_field( 'color', $category )['0'] ?? '';
							?>
                            <span class="tag--small tag--<?php echo $categoryColor ?>"><?php echo esc_html( $category->name ) ?></span>
						<?php endforeach; ?>
					<?php endif; ?>
            </div>

            <p class="datetime">
                <span class="date">
                    <svg width="16" height="16">
                    <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-calendar"></use>
                    </svg>
                    <?php the_field( 'date' ); ?>
                </span>
                <span class="time">
                    <svg width="16" height="16">
                    <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-clock"></use>
                    </svg>
                    <?php the_field( 'time' ); ?>
                </span>
            </p>
            <h4><?php echo get_the_title() ? get_the_title() : 'Подія від ГО "ЖИВИ"'; ?></h4>
        </div>
    </a>
</article>