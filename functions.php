<?php
/**
 * hoangvvo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hoangvvo
 */

if ( ! function_exists( 'hoangvvo_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hoangvvo_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on hoangvvo, use a find and replace
		 * to change 'hoangvvo' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'hoangvvo', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'hoangvvo' ),
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
		add_theme_support( 'custom-background', apply_filters( 'hoangvvo_custom_background_args', array(
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
add_action( 'after_setup_theme', 'hoangvvo_setup' );

function my_login_page() { ?>
	<style type="text/css">
	#login,#login:before{background:inherit!important}#login,form{position:absolute!important;left:50%!important;top:50%!important}body{height:100vh!important;background:url(https://9to5mac.com/wp-content/uploads/sites/6/2018/07/Desert-6.jpg?quality=82&strip=all) no-repeat fixed!important;background-size:cover!important}h1{z-index:100!important;position:absolute!important;left:50%!important;transform:translate(-50%,50%)!important}h1 a{background-image:url(https://www.hoangvvo.com/wp-content/uploads/2018/12/logo.png)!important;pointer-events:none}#login{padding:0!important;width:350px!important;height:500px!important;overflow:hidden!important;margin-left:-175px!important;margin-top:-250px!important;border-radius:8px!important}#login:before{width:400px!important;height:550px!important;content:""!important;position:absolute!important;top:-25px!important;left:-25px!important;bottom:0!important;right:0!important;box-shadow:inset 0 0 0 200px rgba(255,255,255,.2)!important;filter:blur(10px)!important}form{background:0 0!important;box-shadow:none!important;text-align:center!important;transform:translate(-50%,-50%)!important}label,span a{color:rgba(255,255,255,.8)!important}input[type=checkbox]{box-shadow:none!important;background:0!important;outline:0!important;border:0!important;color:rgba(255,255,255,.8)!important}input[type=password],input[type=text]{box-shadow:none!important;background:0!important;width:200px!important;outline:0!important;border:0!important;border-bottom:2px solid rgba(255,255,255,.3)!important;margin:20px 0!important;padding-bottom:10px!important;font-size:18px!important;font-weight:700!important;color:rgba(255,255,255,.8)!important}input[type=submit]{width:200px!important;border:0!important;border-radius:8px!important;padding-bottom:0!important;height:60px!important;background:#df2359!important;color:#fff!important;cursor:pointer!important;transition:all .6s ease-in-out!important;box-shadow:none!important;text-shadow:none!important;opacity:.6}input[type=submit]:hover{opacity:1}.privacy-policy-page-link{position:absolute;bottom:0}#nav a{position:absolute;color:#eee80!important;bottom:4rem;left:50%;transform:translate(-50%,0)!important}.forgetmenot{margin-bottom:.8rem!important}#backtoblog{position:absolute;top:0}     
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_page' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hoangvvo_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'hoangvvo_content_width', 640 );
}
add_action( 'after_setup_theme', 'hoangvvo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hoangvvo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hoangvvo' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'hoangvvo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'hoangvvo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hoangvvo_scripts() {
	wp_deregister_script('jquery');//remove default jquery
	wp_deregister_script( 'wp-embed' ); //remove embed
	wp_enqueue_style('bootstrap-style', get_template_directory_uri().'/css/bootstrap.min.css', array(), '4.2.1');
	wp_enqueue_style( 'hoangvvo-style', get_stylesheet_uri(), array(), '1.0.2');
	wp_enqueue_script( 'hoangvvo-jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '3.3.1', true);
	wp_enqueue_script( 'hoangvvo-smoothscroll', get_template_directory_uri() . '/js/smooth-scroll.js', array(), '', true);
	wp_enqueue_script( 'hoangvvo-bootstrapJs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.2.1', true);
	//wp_enqueue_script( 'hoangvvo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	//wp_enqueue_script( 'hoangvvo-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hoangvvo_scripts' );

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

/* View count */
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

//change menu classnames
function change_menu_class($menu) {  
	$patterns = array();
	$patterns[0] = '/class="/';
	$patterns[1] = '/<a /';
	$replacements = array();
	$replacements[1] = 'class="nav-item ';
	$replacements[0] = '<a class="nav-link"';
return preg_replace($patterns, $replacements, $menu);
}  
add_filter('wp_nav_menu','change_menu_class'); 