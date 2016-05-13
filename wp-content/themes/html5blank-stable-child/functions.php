<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

// END ENQUEUE PARENT ACTION

function jk_theme_styles(){
    wp_enqueue_style( 'bootstrap_css', get_stylesheet_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('BootstrapBig_css', get_stylesheet_directory_uri() . '/css/bootstrap-big-grid.css');
    wp_enqueue_style( 'style_css', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('animate_css', get_stylesheet_directory_uri() . '/css/animate.css');
    wp_enqueue_style('ododmeter_css', get_stylesheet_directory_uri() . '/css/odometer-theme-default.css');

}

add_action('wp_enqueue_scripts','jk_theme_styles');


function jk_theme_js(){



  wp_register_script( 'bootstrap_js', get_stylesheet_directory_uri() . '/js/bootstrap.js', array('jquery'), '', true);
  wp_enqueue_script( 'bootstrap_js');
  wp_register_script( 'waypoint_js', get_stylesheet_directory_uri() . '/js/jquery.waypoints.js', array('jquery'), '', true);
  wp_enqueue_script( 'waypoint_js');
  wp_register_script( 'odometer_js', get_stylesheet_directory_uri() . '/js/odometer.js', array('jquery'), '', true);
  wp_enqueue_script( 'odometer_js');
  wp_register_script( 'myJS_js', get_stylesheet_directory_uri() . '/js/MyJSFile.js', array('jquery'), '', true);
  wp_enqueue_script( 'myJS_js');




}

add_action('wp_enqueue_scripts', 'jk_theme_js');

// Nav Menu
register_nav_menus([
    'primary' =>__('Primary Menu')
]);

add_theme_support('post-thumbnails');







function posts_shortcode( $atts ) {
    $output = '';
    $custom_loop_atts = shortcode_atts(
      [
          'type'  =>  'post',
      ], $atts
    );

    $post_type = $custom_loop_atts['type'];
    $args = array(
        'post_type'     => $post_type,
        'post_status'   => 'publish',
        'order' => 'date',
        'posts_per_page' => 6
    );

    $the_query = new WP_Query($args);

    $output .= '<section class="blog_carousel">';
      $output .= '<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="6000">';
        $output .= '<div class="carousel-inner">';





    while ($the_query->have_posts()) : $the_query->the_post();
        $post_id = get_the_ID();

            $output .= '<div class="item">';
              $output .= '<div class="container">';
              $output .= '<a href="'.get_permalink().'">';
                $output .= '<div class="carousel-caption">';
                  $output .= '<h1>';
                  $output .= get_the_title();
                  $output .= '</h1>';
                    $output .= '<p class="lead">';
                    $output .= get_the_excerpt();
                    $output .= '</p>';
                $output .= '</div>';
                $output .= '</a>';
              $output .= '</div>';
            $output .= '</div>';



    endwhile;





      $output .= '</div>';
        $output .= '<a class="right carousel-control" href="#carousel-example-generic" data-slide="prev">';
          $output .= '<i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>';
        $output .= '</a>';
        $output .= '<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">';
          $output .= '<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>';
        $output .= '</a>';
      $output .= '</div>';
$output .= '</section>';
  return $output;
  wp_reset_postdata();

}

add_shortcode( 'posts_items', 'posts_shortcode');
