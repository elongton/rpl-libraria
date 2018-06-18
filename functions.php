<?php
/**
 * RPL Libraria functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RPL_Libraria
 */

if ( ! function_exists( 'rpl_libraria_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function rpl_libraria_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on RPL Libraria, use a find and replace
		 * to change 'rpl-libraria' to the name of your theme in all the template files.
		 */


		load_theme_textdomain( 'rpl-libraria', get_template_directory() . '/languages' );

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
			'primary' => esc_html__( 'Primary' ),
			'tippy_top' => esc_html__( 'Tip Top' ),
			'quick_links' => esc_html__( 'Quick Links' ),
			'form_links' => esc_html__( 'Forms' ),
			'footer_bottom' => esc_html__( 'Footer Bottom' ),
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
		add_theme_support( 'custom-background', apply_filters( 'rpl_libraria_custom_background_args', array(
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
add_action( 'after_setup_theme', 'rpl_libraria_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rpl_libraria_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'rpl_libraria_content_width', 640 );
}
add_action( 'after_setup_theme', 'rpl_libraria_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rpl_libraria_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Blog Sidebar', 'rpl-libraria' ),
		'id'            => 'sidebar-blog',
		'description'   => esc_html__( 'Add widgets here.', 'rpl-libraria' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Author Sidebar', 'rpl-libraria' ),
		'id'            => 'sidebar-author',
		'description'   => esc_html__( 'Add widgets here.', 'rpl-libraria' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Categories Sidebar', 'rpl-libraria' ),
		'id'            => 'sidebar-category',
		'description'   => esc_html__( 'Add widgets here.', 'rpl-libraria' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'rpl_libraria_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rpl_libraria_scripts() {
	wp_enqueue_style( 'sidebars-style', get_template_directory_uri() . '/assets/css/sidebar_styles.css' );
	wp_enqueue_style( 'rpl-libraria-style', get_stylesheet_uri() );
	wp_enqueue_style( 'homepage-style', get_template_directory_uri() . '/assets/css/homepage_styles.css' );
	wp_enqueue_style( 'header-style', get_template_directory_uri() . '/assets/css/header_styles.css' );
	wp_enqueue_style( 'footer-style', get_template_directory_uri() . '/assets/css/footer_styles.css' );
	wp_enqueue_style( 'page-style', get_template_directory_uri() . '/assets/css/page_styles.css' );
	wp_enqueue_style( 'faq-style', get_template_directory_uri() . '/assets/css/faq_styles.css' );
	wp_enqueue_style( 'location-style', get_template_directory_uri() . '/assets/css/location_styles.css' );
	wp_enqueue_style( 'archive-style', get_template_directory_uri() . '/assets/css/archive_styles.css' );
	wp_enqueue_style( 'forms-style', get_template_directory_uri() . '/assets/css/forms.css' );



	wp_enqueue_style( 's1', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 's2', get_template_directory_uri() . '/assets/css/animate.css' );
	wp_enqueue_style( 's5', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i');





	// wp_enqueue_script( 'rpl-libraria-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	// wp_enqueue_script( 'rpl-libraria-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	// wp_enqueue_script('1', get_template_directory_uri() . "/assets/js/jquery-1.4.1.min.js", array(), '20151215', true );
	// wp_deregister_script('jquery');
	// wp_enqueue_script('1', get_template_directory_uri() . "/assets/js/jquery-3.3.1.min.js", array(), '20151215', true );
	wp_enqueue_script('2', get_template_directory_uri() . "/assets/js/jquery-ui.min.js", array(), '20151215', true );
	wp_enqueue_script('3', get_template_directory_uri() . "/assets/js/jquery.easing.1.3.js", array(), '20151215', true );
	wp_enqueue_script('4', get_template_directory_uri() . "/assets/js/bootstrap.min.js", array(), '20151215', true );
	wp_enqueue_script('5', get_template_directory_uri() . "/assets/js/mmenu.min.js", array(), '20151215', true );
	wp_enqueue_script('6', get_template_directory_uri() . "/assets/js/harvey.min.js", array(), '20151215', true );
	wp_enqueue_script('7', get_template_directory_uri() . "/assets/js/waypoints.min.js", array(), '20151215', true );
	wp_enqueue_script('8', get_template_directory_uri() . "/assets/js/facts.counter.min.js", array(), '20151215', true );
	wp_enqueue_script('9', get_template_directory_uri() . "/assets/js/mixitup.min.js", array(), '20151215', true );
	wp_enqueue_script('10', get_template_directory_uri() . "/assets/js/owl.carousel.min.js", array(), '20151215', true );
	wp_enqueue_script('11', get_template_directory_uri() . "/assets/js/accordion.min.js", array(), '20151215', true );
	wp_enqueue_script('12', get_template_directory_uri() . "/assets/js/responsive.tabs.min.js", array(), '20151215', true );
	wp_enqueue_script('13', get_template_directory_uri() . "/assets/js/responsive.table.min.js", array(), '20151215', true );
	wp_enqueue_script('14', get_template_directory_uri() . "/assets/js/masonry.min.js", array(), '20151215', true );
	wp_enqueue_script('15', get_template_directory_uri() . "/assets/js/carousel.swipe.min.js", array(), '20151215', true );
	wp_enqueue_script('16', get_template_directory_uri() . "/assets/js/bxslider.min.js", array(), '20151215', true );
	wp_enqueue_script('17', get_template_directory_uri() . "/assets/js/main.js", array(), '20151215', true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rpl_libraria_scripts' );

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


//Max's custom functions

function timerowsAPI($day, $branch_index, $body_string){
    echo "<tr>";
    echo "<td>$day</td>";
    echo "<td>";
    echo $body_string['locations'][$branch_index]['weeks'][0][$day]['rendered'];
    echo "</td>";
    echo "</tr>";
}


function custom_echo($x, $length){
  if(strlen($x)<=$length){
    echo $x;
  }else{
    $y=substr($x,0,$length) . '...';
    echo $y;
}}



//walker class

class comment_walker extends Walker_Comment {
	var $tree_type = 'comment';
	var $db_fields = array( 'parent' => 'comment_parent', 'id' => 'comment_ID' );




	// constructor – wrapper for the comments list
	function __construct() { ?>


	<?php }

	// start_lvl – wrapper for child comments list
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$GLOBALS['comment_depth'] = $depth + 2; ?>

		<ol class="children">

	<?php }
	// end_lvl – closing wrapper for child comments list
	function end_lvl( &$output, $depth = 0, $args = array() ) {
		$GLOBALS['comment_depth'] = $depth + 2; ?>
		</ol>
	<?php }

	// start_el – HTML for comment template
	function start_el( &$output, $comment, $depth = 0, $args = array(), $id = 0 ) {
		$depth++;
		$GLOBALS['comment_depth'] = $depth;
		$GLOBALS['comment'] = $comment;
		$parent_class = ( empty( $args['has_children'] ) ? '' : 'parent' );

		if ( 'article' == $args['style'] ) {
			$tag = 'article';
			$add_below = 'comment';
		} else {
			$tag = 'article';
			$add_below = 'comment';
		} ?>

		<li <?php comment_class(empty( $args['has_children'] ) ? '' :'parent') ?> id="comment-<?php comment_ID() ?>" itemprop="comment" itemscope itemtype="http://schema.org/Comment">
			<!-- <figure class="gravatar"><?php //echo get_avatar( $comment, 65, '[default gravatar URL]', 'Author’s gravatar' ); ?></figure> -->
			<div class="comment-body" itemprop="text">
				<div class="comment-author vcard">
						<img class="avatar avatar-32 photo avatar-default" src="<?php echo get_avatar_url($comment, get_comment_ID());?>" alt="Comment Author">
						<b class="fn">
								<a class="comment-author-link" href="<?php comment_author_url(); ?>" itemprop="author"><?php comment_author(); ?></a>
						</b>
				</div>
				<footer class="comment-meta">
						<div class="left-arrow"></div>
						<div class="reply">
							<?php comment_reply_link(array(
									    'add_below'  => 'comment',
									    'respond_id' => 'respond',
									    'reply_text' => __('<i class="fa fa-reply"></i> Reply'),
									    'login_text' => __('Log in to Reply'),
									    'depth'      => 1,
									    'before'     => '',
									    'after'      => '',
									    'max_depth'  => 3
						    ));?>

						</div>


						<div class="comment-metadata">
								<a href="#">
										<time datetime="2016-01-17">
												<b><?php comment_date('M j, Y') ?> / </b>  <?php echo esc_html( human_time_diff( get_comment_date('U'), current_time('U') ) ) . ' ago'; ?>
										</time>
								</a>
						</div>
						<div class="comment-content">
								<p><?php comment_text() ?></p>
						</div>
				</footer>
			</div>

	<?php }

	// end_el – closing HTML for comment template
	function end_el(&$output, $comment, $depth = 0, $args = array() ) { ?>
	</li>
	<?php }

	// destructor – closing wrapper for the comments list
	function __destruct() { ?>


	<?php }

}






//comments_open
function rpl_comment_form_layout ($fields) {
	$commenter = wp_get_current_commenter();
	$req       = get_option('require_name_email');
	$aria_req  = ($req ? " aria-required='true'" : '');
	$html_req  = ($req ? " required='required'" : '');
	$html5     = 'html5';

	$fields = array(
			'author' => '<p class="comment-form-author input-required">
											<input name="author" id="author" type="text" placeholder="Name *">
									</p>',




			'email' => '<p class="comment-form-email input-required">
														<input name="email" id="email" type="email" placeholder="Email *">
												</p>',
			'url' => '<p class="comment-form-subject input-required">
														<input name="url" id="subject" type="text" placeholder="Website">
												</p>',
	);
		 return $fields;
}
add_filter( 'comment_form_default_fields', 'rpl_comment_form_layout' );



//change output of getting an archive title to remove the tag, category, etc extra text
add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
        } elseif ( is_author() ) {
            $title = '<span class="vcard">' . get_the_author() . '</span>' ;
        }

    return $title;

});



//change excerpt length
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );



//add infinite scroll via jetpack

// function infinite_scroll_render() {
// 	get_template_part( 'template-parts/blog/list/content', 'loop' );
// }
//
//
// function rpl_libraria_infinite_scroll_init() {
// 	add_theme_support( 'infinite-scroll', array(
// 			'type' => 'scroll',
// 	    'container' => 'blog-page-grid',
// 			'render' => 'infinite_scroll_render',
// 			'wrapper' => true,
// 			'footer' => true,
// 	) );
// }
// add_action( 'after_setup_theme', 'rpl_libraria_infinite_scroll_init' );
