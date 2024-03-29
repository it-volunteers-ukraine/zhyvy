<?php
if ( ! function_exists('wp_it_volunteers_setup')) {
  function wp_it_volunteers_setup() {
    add_theme_support( 'custom-logo',
      array(
        'height'      => 74,
        'width'       => 158,
        'flex-width'  => true,
        'flex-height' => true,
      )
    );
    add_theme_support( 'title-tag' );
  }
  add_action( 'after_setup_theme', 'wp_it_volunteers_setup' );
}

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'wp_it_volunteers_scripts' );

function wp_it_volunteers_scripts() {
  wp_enqueue_style( 'main', get_stylesheet_uri() );
  wp_enqueue_style( 'wp-it-volunteers-style', get_template_directory_uri() . '/assets/styles/main.css', array('main') );
  wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/2.0.0/modern-normalize.min.css');
  wp_enqueue_style( 'swiper-style','https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array('main') );
  wp_enqueue_style( 'lightbox2-style', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css', array('main') );
  wp_enqueue_style( 'content-event-list-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/content-event-list.css', array('main') );
  wp_enqueue_style( 'content-event-mini-card-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/content-event-mini-card.css', array('main') );
  wp_enqueue_style( '404-style', get_template_directory_uri() . '/assets/styles/template-styles/404.css', array('main') );

  wp_enqueue_script( 'wp-it-volunteers-scripts', get_template_directory_uri() . '/assets/scripts/main.js', array(), false, true );
  wp_enqueue_script( 'swiper-scripts', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), false, true );
  wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), false, true );
  wp_enqueue_script( 'jquery-validate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js', array('jquery'), false, true );
  wp_enqueue_script( 'lightbox2-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js', array('jquery'), false, true );
  wp_enqueue_script( 'clipboard-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.11/clipboard.min.js', array(), false, true );

  if ( is_page_template('templates/home.php') ) {
    wp_enqueue_style( 'home-style', get_template_directory_uri() . '/assets/styles/template-styles/home.css', array('main') );
    wp_enqueue_script( 'home-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/home.js', array(), false, true );
  }

  if ( is_page_template('templates/about.php') ) {
    wp_enqueue_style( 'about-style', get_template_directory_uri() . '/assets/styles/template-styles/about.css', array('main') );
    wp_enqueue_script( 'about-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/about.js', array(), false, true );
  }

  if ( is_page_template('templates/contacts.php') ) {
    wp_enqueue_style( 'contacts-style', get_template_directory_uri() . '/assets/styles/template-styles/contacts.css', array('main') );
    wp_enqueue_script( 'contacts-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/contacts.js', array(), false, true );
  }

  if ( is_page_template('templates/work.php') ) {
    wp_enqueue_style( 'work-style', get_template_directory_uri() . '/assets/styles/template-styles/work.css', array('main') );
    wp_enqueue_script( 'work-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/work.js', array(), false, true );
  }

  if ( is_page_template('templates/events.php') ) {
    wp_enqueue_style( 'events-style', get_template_directory_uri() . '/assets/styles/template-styles/events.css', array('main') );
    wp_enqueue_script( 'events-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/events.js', array(), false, true );
  }

  if ( is_page_template('templates/gallery.php') ) {
    wp_enqueue_style( 'gallery-style', get_template_directory_uri() . '/assets/styles/template-styles/gallery.css', array('main') );
    wp_enqueue_script( 'gallery-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/gallery.js', array(), false, true );
  }

  if ( is_page_template('templates/info.php') ) {
    wp_enqueue_style( 'info-style', get_template_directory_uri() . '/assets/styles/template-styles/info.css', array('main') );
    wp_enqueue_script( 'info-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/info.js', array(), false, true );
  }

  if ( is_page_template('templates/donate.php') ) {
    wp_enqueue_style( 'donate-style', get_template_directory_uri() . '/assets/styles/template-styles/donate.css', array('main') );
    wp_enqueue_script( 'donate-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/donate.js', array(), false, true );
  }

  if (get_post_type() === 'work' ) {
    wp_enqueue_style('single-work-style', get_template_directory_uri() . '/assets/styles/single-pages-styles/single-work.css', array('main') );
    wp_enqueue_script('single-work-scripts', get_template_directory_uri() . '/assets/scripts/single-pages-scripts/single-work.js', array(), false, true);
    }

  if (get_post_type() === 'events' ) {
    wp_enqueue_style('single-events-style', get_template_directory_uri() . '/assets/styles/single-pages-styles/single-events.css', array('main') );
    wp_enqueue_script('single-events-scripts', get_template_directory_uri() . '/assets/scripts/single-pages-scripts/single-events.js', array(), false, true);
    }

}
/** add fonts */
function add_google_fonts() {
  wp_enqueue_style( 'google_web_fonts', 'https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;500&display=block' );
}

add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

/** Register menus */
function wp_it_volunteers_menus() {
  $locations = array(
    'header' => __( 'Header Menu', 'wp-it-volunteers' ),
    'footer' => __( 'Footer Menu', 'wp-it-volunteers' ),
  );

  register_nav_menus( $locations );
}

add_action( 'init', 'wp_it_volunteers_menus');

function register_my_menus() {
  register_nav_menus(
    array(
      'footer-menu-1' => __( 'Footer Menu 1' ),
      'footer-menu-2' => __( 'Footer Menu 2' ),
      'footer-menu-3' => __( 'Footer Menu 3' ),
      'footer-menu-4' => __( 'Footer Menu 4' ),
      'footer-menu-5' => __( 'Footer Menu 5' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


/** ACF add options page */
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
      'page_title'    => 'Theme General Settings',
      'menu_title'    => 'Theme Settings',
      'menu_slug'     => 'theme-general-settings',
      'capability'    => 'edit_posts',
      'redirect'      => false
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'Theme Header Settings',
      'menu_title'    => 'Header',
      'parent_slug'   => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'Theme Footer Settings',
      'menu_title'    => 'Footer',
      'parent_slug'   => 'theme-general-settings',
  ));
}

add_action('pre_get_comments', function($query) { // reverse all comments to get newest on first page
	if ( !is_admin()) {
		$query->query_vars['order'] = 'DESC';
	}
});

add_filter ('comments_array',  function ($comments) { // reverse comments on current page
	return array_reverse($comments);
});

function redirect_after_comment($location, $comment) { // redirect to first page after comment submit
	$commentPostId = $comment->comment_post_ID;
	$commentPostLink = get_permalink($commentPostId) . '#postComments';
	$changedLocation = add_query_arg(
		array(
			'unapproved'      => $comment->comment_ID,
			'moderation-hash' => wp_hash( $comment->comment_date_gmt ),
		),
		$commentPostLink
	);
	return $changedLocation;
}
add_filter('comment_post_redirect', 'redirect_after_comment', 10, 2);

function wp_it_volunteers_comment_markup(): void {
	$author_name = get_comment_author();
	$comment_date = get_comment_date('d.m.Y');
	$comment_text = get_comment_text();
	echo '<li class="comment-item">';
	echo '<div class="comment-info">';
	echo '<span class="comment-author">' . esc_html($author_name) . '</span>';
	echo '<span class="comment-date">' . esc_html($comment_date) . '</span>';
	echo '</div>';
	echo '<span class="comment-text">' . esc_html($comment_text). '</span>';
	echo '</li>';
}

function  wp_it_volunteers_comment_fields_order( $comment_fields ): array {
	$order = array( 'author', 'email', 'comment' );
	$new_fields = array();
	foreach( $order as $index ) {
		$new_fields[ $index ] = $comment_fields[ $index ];
	}
	return $new_fields;
}
add_action( 'comment_form_fields', 'wp_it_volunteers_comment_fields_order' );

add_filter('allowed_block_types', function($block_types, $post) {
	if ($post->post_type == 'events') {
		return [
			'core/paragraph',
			'core/image'
		];
	}
	return $block_types;
}, 10, 2);

function limit_string_length($inputString, $maxLength) {
	return (mb_strlen($inputString) > $maxLength) ? mb_substr($inputString, 0, $maxLength - 3) . '...' : $inputString;
}

