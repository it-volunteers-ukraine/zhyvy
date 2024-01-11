<article class="content-event-card">
    <div class="card-wrapper">

        <div class="tags">
			<?php $postCategories = get_the_category();
				if ( ! empty( $postCategories ) ) :
					foreach ( $postCategories as $category ) :?>
                        <span class="tag--large"><?php echo esc_html( $category->name ) ?></span>
					<?php endforeach; ?>
				<?php endif; ?>
        </div>

        <div class="image">
            <img src="<?php echo esc_url( get_field( 'img' )['url'] ); ?>"
                 alt="<?php echo esc_attr( get_field( 'img' )['alt'] ); ?>">
        </div>
        <div class="description">
            <h3><?php the_field( 'title' ); ?></h3>
            <p class="datetime">
                <span class="date">
                    <svg width="20" height="20">
                    <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-calendar"></use>
                    </svg>
                    <?php the_field( 'date' ); ?>
                </span>
                <span class="time">
                    <svg width="20" height="20">
                    <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-clock"></use>
                    </svg>
                    <?php the_field( 'time' ); ?>
                </span>
            </p>
            <p class="address"><?php the_field( 'address' ); ?></p>
        </div>
    </div>
</article>