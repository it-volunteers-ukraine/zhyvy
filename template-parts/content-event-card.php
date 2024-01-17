<?php
	$isEventPost = $args['isEventPost'] ?? false; // checks if card is used as heading on single-events
?>

<div class="content-event-card">
    <div class="card-wrapper <?php echo( $isEventPost ? 'card-wrapper--single' : '' ); ?>">
        <div class="tags">
			<?php $postCategories = get_the_category( get_the_ID() );
				if ( ! empty( $postCategories ) ) :
					foreach ( $postCategories as $category ) :
						$categoryColor = get_field( 'color', $category )['0'] ?? '';
						?>
                        <span class="tag--large tag--<?php echo $categoryColor ?>"><?php echo esc_html( $category->name ) ?></span>
					<?php endforeach; ?>
				<?php endif; ?>
        </div>

        <div class="image">
            <img src="<?php echo esc_url( get_field( 'img' )['url'] ); ?>"
                 alt="<?php echo esc_attr( get_field( 'img' )['alt'] ); ?>">
        </div>

        <div class="description">

            <h3><?php the_field( 'title' ); ?></h3>

            <div class="details">
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
    </div>
</div>