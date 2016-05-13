<?php
/*
*Plugin Name: Portfolio
*Plugin URI:
*Description: Displays Portfolio Photos And Discriptions In A Custom Post
*Version: 1.0
*Author: James Kinler
*/


add_action('init', 'jk_portfolio');

function jk_portfolio(){
  register_post_type('portfolio_items',
  [
    'labels' => [
      'name' => 'Portfolio Items',
      'singular_name' => 'Portfolio Item',
      'add_new' => 'Add A Portfolio Item'

    ],

    'public' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-portfolio',
    'supports' => [
      'title', 'editor', 'thumbnail',
    ],
    'taxonomies' => ['portfolio'],
    ]

);
}

add_action('init', 'portfolio_taxonomy', 0);

function portfolio_taxonomy(){
  $labels = [
    'name' => 'Portfolios',
    'singular_name' => 'Portfolio',
    'search_items' => 'Search  Portfolio',
    'all_items' => 'All Portfolio',
    'parent_item' => 'Parent Portfolio',
    'parent_item_colon' => 'Parent Portfolio:',
    'edit_item' => 'Edit Portfolio',
    'update_item' => 'Update Portfolio',
    'add_new_item' => 'Add New Portfolio',
    'new_item_name' => 'New Portfolio Name',
    'menu_name' => 'Portfolios',

  ];


  $args = [
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
  ];
  register_taxonomy('portfolio', 'portfolio_items', $args);
}


function jk_excerpt_length( $length) {
        return 25;
    }
    add_filter( 'excerpt_length', 'jk_excerpt_length', 999 );



    function jk_excerpt_more( $more ) {
      return ' .....';
  }
  add_filter( 'excerpt_more', 'jk_excerpt_more' );





function portfolio_shortcode( $atts ) {
    $output   = '';
    $custom_loop_atts = shortcode_atts(
      [
          'type'  =>  'portfolio_items',
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

$output .=  '<section class="no-padding" id="portfolio">';
  $output .=  '<div class="container-fluid">';
    $output .=   '<div class="row no-gutter">';


    while ($the_query->have_posts()) : $the_query->the_post();
        $post_id = get_the_ID();

                $output .= '<div class="col-rt-2 col-lg-4 col-sm-6">';
                    $output .= '<a href="'.get_permalink().'" class="portfolio__box">';
                        $output .= get_the_post_thumbnail($post_id, 'full', ['class' => 'img-responsive']);
                        $output .= '<div class="portfolio__box__caption">';
                            $output .= '<div class="portfolio__box__caption__content">';
                              $output .=  '<div class="project__category">';
                                    $output .= get_the_title($post_id);
                                $output .= '</div>';
                                $output .= '<div class="project__name">';
                                  $output .= get_the_excerpt();
                                $output .= '</div>';
                                $output .= '<p>';
                              $output .= 'Click To Read More';
                              $output .= '</p>';
                            $output .= '</div>';
                        $output .= '</div>';
                    $output .= '</a>';
                  $output .= '</div>';


    endwhile;





      $output .= '</div>';
    $output .= '</div>';
  $output .= '</section>';

  return $output;
  wp_reset_postdata();

}

add_shortcode( 'portfolio_items', 'portfolio_shortcode');

function myplugin_scripts(){

   wp_register_style( 'stylesheet',  plugin_dir_url( __FILE__ ) . 'css/styles.css', array(), '1.0', 'all');
    wp_enqueue_style( 'stylesheet' );
}

add_action( 'wp_enqueue_scripts', 'myplugin_scripts' );


add_filter('template_include', 'include_template_function', 1);

function include_template_function($template_path){ // Checks to see if is game review post
	if(get_post_type() == 'portfolio_items'){ // If is single page
			// First Check to see if theme file 'singe-game_reviews.php exists'
			//If it doesnt then use the default from the plugin
		if (is_single()){
			if ($theme_file = locate_template(['portfolio_page.php'])){
				$template_path = $theme_file;
			}else {
				// Default location from the plugin
				$template_path = plugin_dir_path(__FILE__) . '/portfolio_page.php';
			}
		}
	}
	return $template_path; // Return template path
}


add_theme_support('post-thumbnails', array('portfolio_items'));
add_image_size('portfolio_single', 700,400, true); // Hard Crop
