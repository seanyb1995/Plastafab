<?php
/**
 * Plastafab functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Plastafab
 */

if ( ! function_exists( 'plastafab_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function plastafab_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Plastafab, use a find and replace
		 * to change 'plastafab' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'plastafab', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'plastafab' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'plastafab_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'plastafab_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function plastafab_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'plastafab_content_width', 640 );
}
add_action( 'after_setup_theme', 'plastafab_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function plastafab_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'plastafab' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'plastafab' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'plastafab_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function plastafab_scripts() {
	// wp_enqueue_style( 'plastafab-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.min.css' );
	
	wp_enqueue_script( 'tilt.js', get_template_directory_uri() . '/js/tilt.js/src/tilt.jquery.js', array('jquery'), '20190302', true );
	
	wp_enqueue_script( 'top-navigation', get_template_directory_uri() . '/js/top-navigation.js', array('jquery'), '20190220', true );
	
	wp_enqueue_script( 'home', get_template_directory_uri() . '/js/home.js', array('jquery'), '20190220', true );
	
	wp_enqueue_script( 'products', get_template_directory_uri() . '/js/products.js', array('jquery'), '20190222', true );
	
	wp_enqueue_script( 'ajax', get_template_directory_uri() . '/js/ajax.js', array('jquery'), '20190301', true );
	
	wp_enqueue_script( 'specifications', get_template_directory_uri() . '/js/specifications.js', array('jquery'), '20190225', true );
	
	wp_enqueue_script( 'services', get_template_directory_uri() . '/js/services.js', array('jquery'), '20190225', true );
	
	wp_enqueue_script( 'services-individual', get_template_directory_uri() . '/js/services-individual.js', array('jquery'), '20190228', true );
	
	wp_enqueue_script( 'about', get_template_directory_uri() . '/js/about.js', array('jquery'), '20190227', true );
	
	wp_enqueue_script( 'faq', get_template_directory_uri() . '/js/faq.js', array('jquery'), '20190227', true );
	
	wp_enqueue_script( 'contact', get_template_directory_uri() . '/js/contact.js', array('jquery'), '20190227', true );
	
	wp_enqueue_script( 'scroll', get_template_directory_uri() . '/js/scroll.js', array('jquery'), '20190304', true );
	
	wp_enqueue_script( 'modal', get_template_directory_uri() . '/js/modal.js', array('jquery'), '20190304', true );

	wp_enqueue_script( 'plastafab-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'plastafab-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'plastafab_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Cleaner wp_nav_menu
 */

// class MV_Cleaner_Walker_Nav_Menu extends Walker {
//     var $tree_type = array( 'post_type', 'taxonomy', 'custom' );
//     var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );
//     function start_lvl(&$output, $depth) {
//         $indent = str_repeat("\t", $depth);
//         $output .= "\n$indent<ul class=\"sub-menu\">\n";
//     }
//     function end_lvl(&$output, $depth) {
//         $indent = str_repeat("\t", $depth);
//         $output .= "$indent</ul>\n";
//     }
//     function start_el(&$output, $item, $depth, $args) {
//         global $wp_query;
//         $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
//         $class_names = $value = '';
//         $classes = empty( $item->classes ) ? array() : (array) $item->classes;
//         $classes = in_array( 'current-menu-item', $classes ) ? array( 'current-menu-item' ) : array();
//         $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
//         $class_names = strlen( trim( $class_names ) ) > 0 ? ' class="' . esc_attr( $class_names ) . '"' : '';
//         $id = apply_filters( 'nav_menu_item_id', '', $item, $args );
//         $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
//         $output .= $indent . '<li' . $id . $value . $class_names .'>';
//         $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
//         $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
//         $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
//         $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
//         $item_output = $args->before;
//         $item_output .= '<a'. $attributes .'>';
//         $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
//         $item_output .= '</a>';
//         $item_output .= $args->after;
//         $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
//     }
//     function end_el(&$output, $item, $depth) {
//         $output .= "</li>\n";
//     }
// }

	function post_content($my_postid) {
		$content_post = get_post($my_postid);
		$content = $content_post->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]&gt;', $content);
		echo $content;
	}
	
	function post_table_specifications($id) {
	
	$table = get_field('product_specifications',$id);
				if ( $table ) {
				echo '<table border="0">';
				if ( $table['header'] ) {
				echo '<thead>';
				echo '<tr>';
				foreach ( $table['header'] as $th ) {
				echo '<th>';
				echo $th['c'];
				echo '</th>';
				}
				echo '</tr>';
				echo '</thead>';
				}
				echo '<tbody>';
				foreach ( $table['body'] as $tr ) {
				echo '<tr>';
				foreach ( $tr as $td ) {
				echo '<td>';
				echo $td['c'];
				echo '</td>';
				}
				echo '</tr>';
				}
				echo '</tbody>';
				echo '</table>';
				}
	}
	
	function post_table_mechanisms($id) {
	
	$table = get_field('product_mechanisms',$id);
				if ( $table ) {
				echo '<table border="0">';
				if ( $table['header'] ) {
				echo '<thead>';
				echo '<tr>';
				foreach ( $table['header'] as $th ) {
				echo '<th>';
				echo $th['c'];
				echo '</th>';
				}
				echo '</tr>';
				echo '</thead>';
				}
				echo '<tbody>';
				foreach ( $table['body'] as $tr ) {
				echo '<tr>';
				foreach ( $tr as $td ) {
				echo '<td>';
				echo $td['c'];
				echo '</td>';
				}
				echo '</tr>';
				}
				echo '</tbody>';
				echo '</table>';
				}
	}
	
	function post_table_hours($id) {
	
	$table = get_field('office_hours',$id);
				if ( $table ) {
				echo '<table border="0">';
				if ( $table['header'] ) {
				echo '<thead>';
				echo '<tr>';
				foreach ( $table['header'] as $th ) {
				echo '<th>';
				echo $th['c'];
				echo '</th>';
				}
				echo '</tr>';
				echo '</thead>';
				}
				echo '<tbody>';
				foreach ( $table['body'] as $tr ) {
				echo '<tr>';
				foreach ( $tr as $td ) {
				echo '<td>';
				echo $td['c'];
				echo '</td>';
				}
				echo '</tr>';
				}
				echo '</tbody>';
				echo '</table>';
				}
	}
	
	