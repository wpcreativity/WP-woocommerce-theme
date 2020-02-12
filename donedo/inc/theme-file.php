<?php
function donedo_script(){

	//THEME'S CSS 
	wp_enqueue_style( 'style', THEME_URI . '/assets/css/style.css');
	wp_enqueue_style( 'owl-carousel', THEME_URI . '/assets/css/owl.carousel.min.css'); 
	wp_enqueue_style( 'theme-styles', get_stylesheet_uri() );
	wp_enqueue_style( 'responsive', THEME_URI . '/assets/css/responsive.css');
/*	wp_enqueue_style( 'Mywoocommerce', THEME_URI . '/assets/css/Mywoocommerce.css
');*/
}

function donedo_setup() {
	 
	load_theme_textdomain( 'donedo' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support('woocommerce'); 
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'donedo-featured-image', 2000, 1200, true );
	add_image_size( 'donedo-thumbnail-avatar', 100, 100, true ); 

	$GLOBALS['content_width'] = 525;

	register_nav_menus( array(
		'primary'    => __( 'Main Menu', 'donedo' ),
		'social' => __( 'Social Links Menu', 'donedo' ),
		'footer' => __( 'Footer Menu', 'donedo' ),
	) ); 

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) ); 

	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) ); 
	
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

}

function donedo_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Blog Sidebar', 'donedo' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'donedo' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 1', 'donedo' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Add widgets here to appear in your footer.', 'donedo' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<span class="title widget-title">',
			'after_title'   => '</span>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 2', 'donedo' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Add widgets here to appear in your footer.', 'donedo' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

function testimonial_posttype() {
 
register_post_type( 'testimonial',
   
        array(
            'labels' => array(
                'name' => __( 'Testimonial' ),
                'singular_name' => __( 'Menu Testimonial' ),
                'all_items' => __( 'All Testimonial'),
                'view_item' => __( 'View Testimonial'), 
	            'add_new_item' => __( 'Add Testimonial '),
	            'add_new' => __( 'Add Testimonial'),
	            'edit_item' => __( 'Edit Testimonial'),
	            'update_item' => __( 'Update Testimonial'),	            
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-testimonial',
            'rewrite' => array('slug' => 'testimonial'),
            'supports' => array( 'title', 'editor', 'excerpt','thumbnail')
        )
    );
}

flush_rewrite_rules();		// for single custom post page.

