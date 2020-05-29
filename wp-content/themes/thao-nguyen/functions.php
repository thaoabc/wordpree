<?php
/**
 * thaonguyen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package thaonguyen
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'thao_nguyen_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function thao_nguyen_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on thaonguyen, use a find and replace
		 * to change 'thao-nguyen' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'thao-nguyen', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		add_theme_support( 'menu' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'thao-nguyen' ),
				'footer-nav' => esc_html__( 'Footer menu', 'thao-nguyen' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'thao_nguyen_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
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
endif;
add_action( 'after_setup_theme', 'thao_nguyen_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function thao_nguyen_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	//$GLOBALS['content_width'] = apply_filters( 'thao_nguyen_content_width', 640 );
}
//add_action( 'after_setup_theme', 'thao_nguyen_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function thao_nguyen_widgets_init() {
	$widgets=array(
		['name'=>array(
			'sidebar',
			'sb2'
		)],
		['id'=>array(
			'sidebar-1',
			'sd2-2'
		)],
		['description'=>array(
			'Add widgets here.',
			'Add widgets here2.'
		)]
	);
	foreach($widgets['name'] as $widget)
    {
      echo($widget);
      // foreach($widget as $wd)
      // {
        
      // echo($wd);
      // }
	}
	foreach($widgets as $widget)
    {
      pr($widget);
      if(isset($widget['name'])){
        
      foreach($widget['name'] as $wd)
      {
        
      echo($wd);
      }
      }
    }
	foreach($widgets as $widget)
	{
		foreach($widget as $wd)
		{
			register_sidebar(
				array(
					'name'          => esc_html__( $wd['name'], 'thao-nguyen' ),
					'id'            => $wd['id'],
					'description'   => esc_html__( $wd['description'], 'thao-nguyen' ),
					'before_widget' => '<section id="%1$s" class="widget %2$s">',
					'after_widget'  => '</section>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
				)
			);
		}
	}
	
}
//add_action( 'widgets_init', 'thao_nguyen_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function thao_nguyen_scripts() {
	wp_enqueue_style( 'thao-nguyen-style', get_stylesheet_uri(), array(), _S_VERSION );

	// wp_register_style('thao-nguyen-style', plugins_url('style.css', __FILE__));
	// wp_enqueue_style('thao-nguyen-style');
	wp_style_add_data( 'thao-nguyen-style', 'rtl', 'replace' );

	//wp_enqueue_style( 'thao-nguyen-style', get_stylesheet_uri(), array(), _S_VERSION );
	//wp_style_add_data( 'thao-nguyen-style', '', 'replace' );

	wp_enqueue_script( 'thao-nguyen-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery') );
	wp_register_script('thao-nguyen-customizer', get_template_directory_uri() . '/js/customizer.js', array('jquery'));
	wp_enqueue_script('thao-nguyen-customizer');
	//wp_enqueue_script( 'thao-nguyen-customizer', get_template_directory_uri() . '/js/customizer.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'thao_nguyen_scripts' );

function thao_nguyen_styles() {
	/*
	 * Hàm get_stylesheet_uri() sẽ trả về giá trị dẫn đến file style.css của theme
	 * Nếu sử dụng child theme, thì file style.css này vẫn load ra từ theme mẹ
	 */
	wp_register_style( 'main-style', get_template_directory_uri() . '/style.css', 'all' );
	wp_enqueue_style( 'main-style' );

	wp_register_style( 'superfish-css', get_template_directory_uri() . '/css/superfish.css', 'all' );
	wp_enqueue_style( 'superfish-css' );
	
	/*
	* Chèn file JS của SuperFish Menu
	*/
	wp_register_script( 'superfish-js', get_template_directory_uri() . '/js/superfish.js', array('jquery') );
	wp_enqueue_script( 'superfish-js' );
	
	/*
	* Chèn file JS custom.js
	*/
	wp_register_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery') );
	wp_enqueue_script( 'custom-js' );
  }
  add_action( 'wp_enqueue_scripts', 'thao_nguyen_styles' );


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

function create_custom_post_type()
{
	$name_post=array(
		[
			$label=array(
				[
					'name'=>'Các sản phẩm',
					'signular_name' => 'Sản phẩm'
				],
				[
					'name'=>'Các sự kiện',
					'signular_name' => 'Sự kiện'
				]
			)
		],
		[
			$name=array(
				'sanpham',
				'sukien'
			)
		],
		[
			$description=array(
				'Post type đăng sản phẩm',
				'Post type đăng sự kiện'
			)
		]
		
	);

	
	foreach($name_post as $post)
	{
		foreach($post->$label as $label_post)
		{
			$args=array(
				'labels'=>$label_post,
				'description'=>$post->$description,
				'supports'=>array(
					'title',
					'editor',
					'excerpt',
					'author',
					'thumbnail',
					'comments',
					'trackbacks',
					'revisions',
					'custom-fields'
				),
				'taxonomies'=>array('category','post_tag'),
				'hierarchical'=>false,
				'public'=>true,
				'show_ui'=>true,
				'show_in_menu'=>true,
				'show_in_nav_menus'=>true,
				'show_in_admin_bar'=>true,
				'menu_position'=>5,
				'menu_icon'=>'',
				'can_export'=>true,
				'has_archive'=>true,
				'exclude_from_search'=>false,
				'publicly_queryable'=>true,
				'capability_type'=>'post'
			);
			
			register_post_type($post->$name,$args);
		}
	}

}

//add_action('init','create_custom_post_type');

function hello_world() {
	return "Hello World!";
	}
add_shortcode( 'call_hello', 'hello_world' );

function create_shortcode_randompost() {
 
	$random_query = new WP_Query(array(
			'posts_per_page' => 1,
			'orderby' => 'rand'
	));

	ob_start();
	if ( $random_query->have_posts() ) :
			"<ol>";
			while ( $random_query->have_posts() ) :
					$random_query->the_post();?>

							<li><a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a></li>

			<?php endwhile;
			"</ol>";
	endif;
	$list_post = ob_get_contents(); //Lấy toàn bộ nội dung phía trên bỏ vào biến $list_post để return

	ob_end_clean();

	return $list_post;
}
add_shortcode('random_post', 'create_shortcode_randompost');

function create_shortcode_content($args, $content) {
	return strtoupper($content); //In hoa toàn bộ content trong shortcode
}
add_shortcode('shortcode_content', 'create_shortcode_content');
