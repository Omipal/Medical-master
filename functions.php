<?php

require_once('medic-walker-navmenu.php');


function medic_theme_setup(){
// said title
add_theme_support( 'title-tag' );

// Main Menu
register_nav_menu('main-menu', 'Main Menu');  

// Main Logo
add_theme_support(
  'custom-logo',
  array(
    'height'      => 250,
    'width'       => 250,
    'flex-width'  => true,
    'flex-height' => true,
  )
);


}
add_action('after_setup_theme', 'medic_theme_setup');
// enable post thumbnail option start here
add_theme_support( 'post-thumbnails' );

// enable image cropping sizes start here
function base_theme_image_theme_setup() {
	add_image_size( 'post-image', 320, 260, true );
	add_image_size( 'post-thumb', 520, 460, true );
}
add_action( 'after_setup_theme', 'base_theme_image_theme_setup' );

/**
 * Enqueue scripts and styles.
 */

 function medic_scripts(){
  if ( ! is_admin() ) {
		global $wp_query;
  wp_enqueue_style('medic-slick-css', get_template_directory_uri() . '/plugins/slick/slick.css', array(), '1.0');
  wp_enqueue_style('medic-slick-theme-css', get_template_directory_uri() . '/plugins/slick/slick-theme.css', array(), '1.0');
  wp_enqueue_style('medic-fancybox-css', get_template_directory_uri() . '/plugins/fancybox/jquery.fancybox.min.css', array(), '1.0');
  wp_enqueue_style('medic-style-css', get_template_directory_uri() . '/css/style.css', array(), '1.0');
  wp_enqueue_style('main-style-css', get_stylesheet_uri(), array(), '1.0');

  wp_enqueue_script('medic-jquery', get_template_directory_uri() . '/plugins/jquery.js', array(), '1.0', true);
  wp_enqueue_script('medic-bootstrap-js', get_template_directory_uri() . '/plugins/bootstrap.min.js', array(), '1.0', true);
  wp_enqueue_script('medic-bootstrap-select-js', get_template_directory_uri() . '/plugins/bootstrap-select.min.js', array(), '1.0', true);
  wp_enqueue_script('medic-silk-js', get_template_directory_uri() . '/plugins/slick/slick.min.js', array('jquery'), '1.0', true);
  wp_enqueue_script('medic-fancybox-js', get_template_directory_uri() . '/plugins/fancybox/jquery.fancybox.min.js', array('jquery'), '1.0', true);
  wp_enqueue_script('medic-google-map-js', "https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw", array('jquery'), '1.0', true);
  wp_enqueue_script('medic-gmap-js', get_template_directory_uri() . '/plugins/google-map/gmap.js', array('jquery'), '1.0', true);
  wp_enqueue_script('medic-validate-js', get_template_directory_uri() . '/plugins/validate.js', array('jquery'), '1.0', true);
  wp_enqueue_script('medic-wow-js', get_template_directory_uri() . '/plugins/wow.js', array('jquery'), '1.0', true);
  wp_enqueue_script('medic-jquery-ui-js', get_template_directory_uri() . '/plugins/jquery-ui.js', array('jquery'), '1.0', true);
  wp_enqueue_script('medic-timepicker-js', get_template_directory_uri() . '/plugins/timePicker.js', array('jquery'), '1.0', true);
  wp_enqueue_script('medic-script-js', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
  wp_enqueue_script( 'load-more', get_template_directory_uri() . '/js/load-more.js', [ 'jquery' ], '1.0.0', true );

  wp_localize_script( 'load-more', 'load_more_params', [
    'ajax_url'     => admin_url( 'admin-ajax.php' ),
    'current_page' => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
    'max_page'     => $wp_query->max_num_pages
  ] );
  }
}
 add_action('wp_enqueue_scripts', 'medic_scripts');

 // Custum Post Type




 function load_posts() {

  $paged = $_POST['page'] + 1;

  if ( ! empty( $paged ) ) {

      $args = [
          'post_type' => 'post',
          'posts_per_page' => get_option('posts_per_page'),
          'paged'     => $paged,
      ];

      $my_post = new WP_Query( $args );

      while ( $my_post->have_posts() ):
          $my_post->the_post(); ?>
          <div class="col-md-4"><?php get_template_part( 'template-parts/loop', 'post' ); ?></div>
      <?php endwhile;
      wp_reset_postdata();
  }

  wp_die();
}

add_action( 'wp_ajax_load_posts', 'load_posts' );
add_action( 'wp_ajax_nopriv_load_posts', 'load_posts' );