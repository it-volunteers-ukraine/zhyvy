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
  wp_enqueue_style( 'content-event-mini-card', get_template_directory_uri() . '/assets/styles/template-parts-styles/content-event-mini-card.css', array('main') );

  wp_enqueue_script( 'wp-it-volunteers-scripts', get_template_directory_uri() . '/assets/scripts/main.js', array(), false, true );
  wp_enqueue_script( 'swiper-scripts', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), false, true );
  wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), false, true );
  wp_enqueue_script( 'lightbox2-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js', array(), false, true );

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