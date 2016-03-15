<?php
if ( ! function_exists( 'ref_enqueue_main_stylesheet' ) ) {
	function ref_enqueue_main_stylesheet() {
		if ( ! is_admin() ) {
			wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css', array(), null );
			wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array(), null );
		}
	}
	add_action( 'wp_enqueue_scripts', 'ref_enqueue_main_stylesheet', 100 );
}


/**************************************************
 * Load custom cells types for Layouts plugin from the /dd-layouts-cells/ directory
 **************************************************/
if ( class_exists( 'WPDD_Layouts' ) && !function_exists( 'include_ddl_layouts' ) ) {

	function include_ddl_layouts( $tpls_dir = '' ) {
		$dir_str = dirname( __FILE__ ) . $tpls_dir;
		$dir     = opendir( $dir_str );

		while ( ( $currentFile = readdir( $dir ) ) !== false ) {
			if ( is_file( $dir_str . $currentFile ) ) {
				include $dir_str . $currentFile;
			}
		}
		closedir( $dir );
	}

	include_ddl_layouts( '/dd-layouts-cells/' );
}

// load custom font
add_action('wp_print_styles', 'load_fonts',10);
function load_fonts() {
    //echo get_template_directory_uri();https://fonts.googleapis.com/css?family=Scada:400,700,400italic,700italic
    //wp_register_style('Scada', 'https://fonts.googleapis.com/css?family=Scada:400,700,400italic,700italic');
    //wp_enqueue_style( 'Scada');

    wp_register_style('Roboto', 'https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic');
    wp_enqueue_style( 'Roboto');
	wp_register_style('Montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700');
	wp_enqueue_style( 'Montserrat');

}
add_filter('wp_enqueue_scripts', 'enqueue_my_scripts', 20);
function enqueue_my_scripts() {
    //magnific popup
    wp_enqueue_script( 'magnific-popup-js', get_stylesheet_directory_uri() . '/libs/magnific_popup/magnific.js', array('jquery'), '1.0.0', true );
    wp_enqueue_style( 'magnific-popup-css',get_stylesheet_directory_uri() . '/libs/magnific_popup/magnific.css');

    //flexslider
    wp_enqueue_script( 'flexslider-js', get_stylesheet_directory_uri() . '/libs/FlexSlider/jquery.flexslider.js', array('jquery'), '1.0.0', true );
    wp_enqueue_style( 'flexslider-css',get_stylesheet_directory_uri() . '/libs/FlexSlider/flexslider.css');

    //plusanchor
    wp_enqueue_script( 'plusanchor-js', get_stylesheet_directory_uri() . '/libs/jquery.plusanchor.min.js', array('jquery'), '1.0.0', true );

    //picker_date
    wp_enqueue_style( 'picker-css',get_stylesheet_directory_uri() . '/libs/picker_date/themes/default.css');
    wp_enqueue_style( 'picker-date-css',get_stylesheet_directory_uri() . '/libs/picker_date/themes/default.date.css');
    wp_enqueue_style( 'picker-time-css',get_stylesheet_directory_uri() . '/libs/picker_date/themes/default.time.css');

    wp_enqueue_script( 'picker-js', get_stylesheet_directory_uri() . '/libs/picker_date/picker.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'picker-date-js', get_stylesheet_directory_uri() . '/libs/picker_date/picker.date.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'picker-time-js', get_stylesheet_directory_uri() . '/libs/picker_date/picker.time.js', array('jquery'), '1.0.0', true );

    //qtip
    wp_enqueue_style( 'qtip-css','http://cdn.jsdelivr.net/qtip2/2.2.1/jquery.qtip.min.css');
    wp_enqueue_script( 'qtip-js', 'http://cdn.jsdelivr.net/qtip2/2.2.1/jquery.qtip.min.js', array('jquery'), '1.0.0', true );

    //main init
    wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/main.js', array('jquery'), '1.0.0', true );
}
// remove Design with Toolset from admin bar
add_action( 'admin_bar_menu', 'remove_tooleset_item', 999 );
function remove_tooleset_item( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'toolset_admin_bar_menu' );
}
// remove a menu from admin panel
function custom_menu_page_removing() {
    remove_menu_page( '' ); //wplivechat-menu = chat // wpcf = type
}
add_action( 'admin_menu', 'custom_menu_page_removing' );
?>