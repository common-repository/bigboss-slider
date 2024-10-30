<?php
/**
* Plugin Name: Bigboss Slider
* Plugin URI: http://wordpress.org/plugins/bigboss-slider
* Description: Bigboss slider for creating Modern slider in any area of your wordpress site . responsive  Custom post type slider , easy to used , install and  customizing .
* Version: 2.2.1
* Author: Bulbul bigboss
* Author URI: https://www.facebook.com/bulbulbigbossbd
* Tags: custom post slider, jquery slider, shortcode slider, cpt slider, cpt slide show, post types, responsive slider, cpt responsive slider 
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


// Register Custom Post type 


function create_post_type_bigboss_slider(){
	register_post_type( 'bigboss_slider',
		array(
			'labels' => array(
					'name'           			=>  'bigboss Slider',
					'singular_name'  			=>  'bigboss Slider',
					'add_new'        			=>  'Add new Bigboss slides',
					'add_new_item'   			=>   'Add new bigboss slides',
					'edit_item'           		=>   'Edit bigboss slides',
					'featured_image' 			=>   'Slider image',
					'set_featured_image'        =>   'Upload slider image',
					'remove_featured_image'     =>   'Romeve Slider image',
					'search_items'              =>   'Search Slider',
					'view_item'                 =>   'View Slides',
					'not_found'               	=>   'No slides Found ',
					'all_items'               	=>   'All bigboss slides',
				 
            ),

			'public' => true,
			'has_archive' => true,
			'menu_icon'   => 'dashicons-images-alt',
			'rewrite' => array('slug' => 'bigboss_slider'),
			'supports' => array('title', 'editor', 'thumbnail')
		)
	);
}

add_action( 'init', 'create_post_type_bigboss_slider' );



function bigboss_slider(){

			include('display.php') ;
}

// script link 


function bigbossslider_register_script(){
		 
	
    wp_enqueue_script( 'jquery' );
	 
    wp_register_script( 'bigboss-slider-mod-js',  plugin_dir_url( __FILE__ ) . 'js/bigboss-slider-mod.js' , array(), '1.0.0', true );
    wp_enqueue_script( 'bigboss-slider-mod-js' );

     wp_register_script( 'bigboss-slider-look',  plugin_dir_url( __FILE__ ) . 'js/bigboss-slider-look.js' ,array(), '1.0.0', true );
    wp_enqueue_script( 'bigboss-slider-look' );

     wp_register_script( 'bigboss-slider-js',  plugin_dir_url( __FILE__ ) . 'js/bigboss-slider.js',array(), '1.0.0', true );
     wp_enqueue_script( 'bigboss-slider-js' );
}
add_action('wp_enqueue_scripts','bigbossslider_register_script'); //end


//admin menu 
add_action('admin_menu','bigboss_slider_menu');

function bigboss_slider_menu() {
	add_menu_page( 'bigboss slider', 'bigboss slider Setting', 'manage_options', 'bigboss_slider_setting', 'bigboss_slider_options' );
}

function bigboss_slider_options() { ?>
	
	<?php include'bigboss_slider_setting.php';
	
}
//sortcode 
function bigboss_slider_short($atts){
	
	$atts = bigboss_slider();
	
	return $atts ;
	
	}
	
add_shortcode('bigboss_slider','bigboss_slider_short');

// WPDB TABLE CREATION


?>