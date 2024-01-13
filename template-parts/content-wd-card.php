<?php
$type = get_query_var('type');

?>


<li class=" <?php print $type; ?>__item">
    <div class="<?php print $type; ?>__img">
        <img src="<?php the_field('img'); ?>" alt="<?php the_field('alt'); ?>">
    </div>
    <div class="<?php print $type; ?>__info">
        <h3 class="title-gradient-h2 title"><?php the_field('title'); ?></h3>
        <p class="text"><?php the_field('short_description_of_wd'); ?></p>
        <a class="button--medium button" href="<?php the_permalink(); ?>">
            докладніше
            <svg width="8" height="16">
                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right"></use>
            </svg>
        </a>
    </div>

</li>