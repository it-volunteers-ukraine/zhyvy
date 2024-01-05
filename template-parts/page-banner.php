<?php
	if ( ! isset( $args['title'] ) ) {
		$args['title'] = get_the_title();
	}
?>


<section class="page-banner <?php echo( is_single() ? 'page-banner--single' : null ); ?>"
         style="background-image: url('<?php bloginfo( 'template_url' ); ?>/assets/images/bg/page_banner_desk.jpg')">
    <div class="container">
        <h1 class="<?php echo( ! is_single() ? 'title-page' : 'title-event' ); ?>"><?php echo $args['title'] ?></h1>
    </div>
</section>

