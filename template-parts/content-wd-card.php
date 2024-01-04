<!-- Work direction post card -->

<?php
$type = get_query_var('type');
// $classButton = get_query_var('classButton');
// $text = get_query_var('text');
?>


<li class=" <?php print $type; ?>__item">
    <div class="<?php print $type; ?>__img">
        <img src="<?php the_field('img'); ?>" alt="<?php the_field('alt'); ?>">
    </div>
    <div class="<?php print $type; ?>__info">
        <h3 class="title-gradient-h2 title"><?php the_title(); ?></h3>
        <p class="text"><?php the_field('short_description_of_wd'); ?></p>
        <a class="button--medium button" href="">
            докладніше
            <svg width="8" height="16">
                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right"></use>
            </svg>
        </a>
    </div>

</li>