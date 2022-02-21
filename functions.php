<?php
/**
 * Sydney functions and definitions
 *
 * @package Sydney
 */

if ( ! function_exists( 'sydney_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sydney_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Sydney, use a find and replace
	 * to change 'sydney' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'sydney', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Content width
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 1170; /* pixels */
	}

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size('sydney-large-thumb', 830);
	add_image_size('sydney-medium-thumb', 550, 400, true);
	add_image_size('sydney-small-thumb', 230);
	add_image_size('sydney-service-thumb', 350);
	add_image_size('sydney-mas-thumb', 480);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'sydney' ),
		'mobile' => __( 'Mobile Menu', 'sydney' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'sydney_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	//Gutenberg align-wide support
	add_theme_support( 'align-wide' );
}
endif; // sydney_setup
add_action( 'after_setup_theme', 'sydney_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function sydney_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'sydney' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	//Footer widget areas
	$widget_areas = get_theme_mod('footer_widget_areas', '3');
	for ($i=1; $i<=$widget_areas; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer ', 'sydney' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}

	//Register the front page widgets
	if ( defined( 'SITEORIGIN_PANELS_VERSION' ) ) {
		register_widget( 'Sydney_List' );
		register_widget( 'Sydney_Services_Type_A' );
		register_widget( 'Sydney_Services_Type_B' );
		register_widget( 'Sydney_Facts' );
		register_widget( 'Sydney_Clients' );
		register_widget( 'Sydney_Testimonials' );
		register_widget( 'Sydney_Skills' );
		register_widget( 'Sydney_Action' );
		register_widget( 'Sydney_Video_Widget' );
		register_widget( 'Sydney_Social_Profile' );
		register_widget( 'Sydney_Employees' );
		register_widget( 'Sydney_Latest_News' );
		register_widget( 'Sydney_Portfolio' );
	}
	register_widget( 'Sydney_Contact_Info' );

}
add_action( 'widgets_init', 'sydney_widgets_init' );

/**
 * Load the front page widgets.
 */
if ( defined( 'SITEORIGIN_PANELS_VERSION' ) ) {
	require get_template_directory() . "/widgets/fp-list.php";
	require get_template_directory() . "/widgets/fp-services-type-a.php";
	require get_template_directory() . "/widgets/fp-services-type-b.php";
	require get_template_directory() . "/widgets/fp-facts.php";
	require get_template_directory() . "/widgets/fp-clients.php";
	require get_template_directory() . "/widgets/fp-testimonials.php";
	require get_template_directory() . "/widgets/fp-skills.php";
	require get_template_directory() . "/widgets/fp-call-to-action.php";
	require get_template_directory() . "/widgets/video-widget.php";
	require get_template_directory() . "/widgets/fp-social.php";
	require get_template_directory() . "/widgets/fp-employees.php";
	require get_template_directory() . "/widgets/fp-latest-news.php";
	require get_template_directory() . "/widgets/fp-portfolio.php";

	/**
	 * Page builder support
	 */
	require get_template_directory() . '/inc/page-builder.php';	
}
require get_template_directory() . "/widgets/contact-info.php";

/**
 * Elementor ID
 */
if ( ! defined( 'ELEMENTOR_PARTNER_ID' ) ) {
    define( 'ELEMENTOR_PARTNER_ID', 2128 );
}

/**
 * Enqueue scripts and styles.
 */
function sydney_scripts() {

	// wp_enqueue_style( 'sydney-google-fonts', esc_url( sydney_enqueue_google_fonts() ), array(), null );

	// if ( is_customize_preview() ) {
	// 	wp_enqueue_style( 'sydney-preview-google-fonts-body', 'https://fonts.googleapis.com/', array(), null );
	// 	wp_enqueue_style( 'sydney-preview-google-fonts-headings', 'https://fonts.googleapis.com/', array(), null );
	// }

	wp_enqueue_style( 'sydney-style', get_stylesheet_uri(), '', '20200129' );

	// wp_enqueue_style( 'sydney-ie9', get_template_directory_uri() . '/css/ie9.css', array( 'sydney-style' ) );
	// wp_style_add_data( 'sydney-ie9', 'conditional', 'lte IE 9' );

	wp_enqueue_script( 'sydney-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'),'', true );

	wp_enqueue_script( 'sydney-main', get_template_directory_uri() . '/js/main.min.js', array('jquery'),'20180716', true );

	if ( defined( 'SITEORIGIN_PANELS_VERSION' )	) {
		wp_enqueue_script( 'sydney-so-legacy-scripts', get_template_directory_uri() . '/js/so-legacy.js', array('jquery'),'', true );
		wp_enqueue_script( 'sydney-so-legacy-main', get_template_directory_uri() . '/js/so-legacy-main.js', array('jquery'),'', true );
		// wp_enqueue_style( 'sydney-font-awesome', get_template_directory_uri() . '/fonts/font-awesome.min.css' );
	}

	if ( get_theme_mod('blog_layout') == 'masonry-layout' && (is_home() || is_archive()) ) {

		wp_enqueue_script( 'sydney-masonry-init', get_template_directory_uri() . '/js/masonry-init.js', array('masonry'),'', true );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sydney_scripts' );

/**
 * Disable Elementor globals on theme activation
 */
function sydney_disable_elementor_globals () {
	update_option( 'elementor_disable_color_schemes', 'yes' );
	update_option( 'elementor_disable_typography_schemes', 'yes' );
}
add_action('after_switch_theme', 'sydney_disable_elementor_globals');

/**
 * Enqueue Bootstrap
 */
function sydney_enqueue_bootstrap() {
	wp_enqueue_style( 'sydney-bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css', array(), true );
}
add_action( 'wp_enqueue_scripts', 'sydney_enqueue_bootstrap', 9 );

/**
 * Elementor editor scripts
 */

/**
 * Change the excerpt length
 */
function sydney_excerpt_length( $length ) {

  $excerpt = get_theme_mod('exc_lenght', '55');
  return $excerpt;

}
add_filter( 'excerpt_length', 'sydney_excerpt_length', 999 );

/**
 * Blog layout
 */
function sydney_blog_layout() {
	$layout = get_theme_mod('blog_layout','classic-alt');
	return $layout;
}

/**
 * Menu fallback
 */
function sydney_menu_fallback() {
	if ( current_user_can('edit_theme_options') ) {
		echo '<a class="menu-fallback" href="' . admin_url('nav-menus.php') . '">' . __( 'Create your menu here', 'sydney' ) . '</a>';
	}
}

/**
 * Header image overlay
 */
function sydney_header_overlay() {
	$overlay = get_theme_mod( 'hide_overlay', 0);
	if ( !$overlay ) {
		echo '<div class="overlay"></div>';
	}
}

/**
 * Header video
 */
function sydney_header_video() {

	if ( !function_exists('the_custom_header_markup') ) {
		return;
	}

	$front_header_type 	= get_theme_mod( 'front_header_type' );
	$site_header_type 	= get_theme_mod( 'site_header_type' );

	if ( ( get_theme_mod('front_header_type') == 'core-video' && is_front_page() || get_theme_mod('site_header_type') == 'core-video' && !is_front_page() ) ) {
		the_custom_header_markup();
	}
}

/**
 * Polylang compatibility
 */
if ( function_exists('pll_register_string') ) :
function sydney_polylang() {
	for ( $i=1; $i<=5; $i++) {
		pll_register_string('Slide title ' . $i, get_theme_mod('slider_title_' . $i), 'Sydney');
		pll_register_string('Slide subtitle ' . $i, get_theme_mod('slider_subtitle_' . $i), 'Sydney');
	}
	pll_register_string('Slider button text', get_theme_mod('slider_button_text'), 'Sydney');
	pll_register_string('Slider button URL', get_theme_mod('slider_button_url'), 'Sydney');
}
add_action( 'admin_init', 'sydney_polylang' );
endif;

/**
 * Preloader
 */
function sydney_preloader() {
	?>
	<div class="preloader">
	    <img src="/wp-content/themes/psibufet/images/loader_new.gif" class="no-lazyload"/>
	</div>
	<?php
}
add_action('sydney_before_site', 'sydney_preloader');

/**
 * Header clone
 */
function sydney_header_clone() {

	$front_header_type 	= get_theme_mod('front_header_type','nothing');
	$site_header_type 	= get_theme_mod('site_header_type');

	if ( ( $front_header_type == 'nothing' && is_front_page() ) || ( $site_header_type == 'nothing' && !is_front_page() ) ) { ?>
	
	<div class="header-clone"></div>

	<?php }
}
add_action('sydney_before_header', 'sydney_header_clone');

/**
 * Get image alt
 */
function sydney_get_image_alt( $image ) {
    global $wpdb;

    if( empty( $image ) ) {
        return false;
    }

    $attachment  = $wpdb->get_col( $wpdb->prepare( "SELECT ID FROM {$wpdb->posts} WHERE guid='%s';", strtolower( $image ) ) );
    $id   = ( ! empty( $attachment ) ) ? $attachment[0] : 0;

    $alt = get_post_meta( $id, '_wp_attachment_image_alt', true );

    return $alt;
}

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * from TwentyTwenty
 * 
 * @link https://git.io/vWdr2
 */
function sydney_skip_link_focus_fix() {
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'sydney_skip_link_focus_fix' );

/**
 * Get SVG code for specific theme icon
 */
function sydney_get_svg_icon( $icon, $echo = false ) {
	$svg_code = wp_kses( //From TwentTwenty. Keeps only allowed tags and attributes
		Sydney_SVG_Icons::get_svg_icon( $icon ),
		array(
			'svg'     => array(
				'class'       => true,
				'xmlns'       => true,
				'width'       => true,
				'height'      => true,
				'viewbox'     => true,
				'aria-hidden' => true,
				'role'        => true,
				'focusable'   => true,
			),
			'path'    => array(
				'fill'      => true,
				'fill-rule' => true,
				'd'         => true,
				'transform' => true,
			),
			'polygon' => array(
				'fill'      => true,
				'fill-rule' => true,
				'points'    => true,
				'transform' => true,
				'focusable' => true,
			),
		)
	);	

	if ( $echo != false ) {
		echo $svg_code; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	} else {
		return $svg_code;
	}
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Slider
 */
require get_template_directory() . '/inc/slider.php';

/**
 * Styles
 */
require get_template_directory() . '/inc/styles.php';

/**
 * Theme info
 */
require get_template_directory() . '/inc/onboarding/theme-info.php';

/**
 * Woocommerce basic integration
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Upsell
 */
require get_template_directory() . '/inc/upsell/class-customize.php';

/**
 * Gutenberg
 */
require get_template_directory() . '/inc/editor.php';

/**
 * Fonts
 */
require get_template_directory() . '/inc/fonts.php';

/**
 * SVG codes
 */
require get_template_directory() . '/inc/classes/class-sydney-svg-icons.php';

/**
 *TGM Plugin activation.
 */
require_once dirname( __FILE__ ) . '/plugins/class-tgm-plugin-activation.php';

/*
 *	Versioning styles
 */
function wpmix_get_version() {
	$theme_data = wp_get_theme();
	return $theme_data->Version;
}
$theme_version = wpmix_get_version();
global $theme_version;

function wpmix_get_random() {
	$randomizr = '-' . rand(100,999);
	return $randomizr;
}
$random_number = wpmix_get_random();
global $random_number;


add_action( 'tgmpa_register', 'sydney_recommend_plugin' );
function sydney_recommend_plugin() {

	$plugins = array();

	if ( !defined( 'SITEORIGIN_PANELS_VERSION' ) ) {
	    $plugins[] = array(
	            'name'               => 'Elementor',
	            'slug'               => 'elementor',
	            'required'           => false,
	    );
	}

	if ( !function_exists('wpcf_init') ) {
	    $plugins[] = array(
		        'name'               => 'Sydney Toolbox - custom posts and fields for the Sydney theme',
		        'slug'               => 'sydney-toolbox',
		        'required'           => false,
		);
	}

    tgmpa( $plugins);

}

/**
 * Admin notice
 */
require get_template_directory() . '/inc/notices/persist-admin-notices-dismissal.php';

function sydney_welcome_admin_notice() {
	if ( ! PAnD::is_admin_notice_active( 'sydney-welcome-forever' ) ) {
		return;
	}
	
	?>
	<div data-dismissible="sydney-welcome-forever" class="sydney-admin-notice updated notice notice-success is-dismissible">

		<p><?php echo sprintf( __( 'Welcome to Sydney. To get started please make sure to visit our <a href="%s">welcome page</a>.', 'sydney' ), admin_url( 'themes.php?page=sydney-info.php' ) ); ?></p>
		<a class="button" href="<?php echo admin_url( 'themes.php?page=sydney-info.php' ); ?>"><?php esc_html_e( 'Get started with Sydney', 'sydney' ); ?></a>

	</div>
	<?php
}
add_action( 'admin_init', array( 'PAnD', 'init' ) );
add_action( 'admin_notices', 'sydney_welcome_admin_notice' );


function cptui_register_my_taxes_kategorie_instagram() {

	/**
	 * Taxonomy: Kategorie.
	 */

	$labels = [
		"name" => __( "Kategorie", "custom-post-type-ui" ),
		"singular_name" => __( "Kategorie", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Kategorie", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'kategorie_instagram', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "kategorie_instagram",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		];
	register_taxonomy( "kategorie_instagram", [ "instagram_posts" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_kategorie_instagram' );

function acf_orphans($value, $post_id, $field) {
  if ( class_exists( 'iworks_orphan' ) ) {
    $orphan = new \iworks_orphan();
    $value = $orphan->replace( $value );
  }
  return $value;
}
add_filter('acf/format_value/type=textarea', 'acf_orphans', 10, 3);
add_filter('acf/format_value/type=text', 'acf_orphans', 10, 3);
add_filter('acf/format_value/type=wysiwyg', 'acf_orphans', 10, 3);


/* ACF local JSON */
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point( $paths ) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
}

/**
 * ACF Google Maps
 */
function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyCAihhg2fnZvuAF6biw73IE-A2WX0nosQk');
}
add_action('acf/init', 'my_acf_init');

/**
 * Starts with function
 */
function startsWith( $haystack, $needle ) {
	$length = strlen( $needle );
	return substr( $haystack, 0, $length ) === $needle;
}

/**
 * Scripts and styles queue
 */
function psibufet_scripts(){
	global $theme_version, $random_number;

	// jQuery
	wp_register_script( 'jQuery', get_template_directory_uri() . '/plugins/jQuery/jquery-2.2.4.min.js', null, null, true );
	wp_enqueue_script('jQuery');

	// Slick
	// wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/plugins/slick/slick-theme.css', array());
	wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/plugins/slick/slick.css', false);
	wp_register_script( 'slick-script', get_template_directory_uri() . '/plugins/slick/slick.min.js', null, null, true );
	wp_enqueue_script('slick-script');

	// Main sass style
	wp_register_style('customsass', get_template_directory_uri() . '/css/customsass.css', false, $theme_version . $random_number);
	wp_enqueue_style('customsass');

	// Autocomplete
	if(!is_front_page()){
		wp_enqueue_style( 'theme-autocomplete', get_template_directory_uri() . '/plugins/autocomplete/easy-autocomplete.themes.min.css', array());
		wp_enqueue_style( 'style-autocomplete', get_template_directory_uri() . '/plugins/autocomplete/easy-autocomplete.min.css', array());
		wp_register_script( 'script-autocomplete', get_template_directory_uri() . '/plugins/autocomplete/jquery.easy-autocomplete.min.js', null, null, true );
		wp_enqueue_script('script-autocomplete');
	}

	// jQuery Visible
	wp_register_script( 'jquery-visible', get_template_directory_uri() . '/plugins/visible/jquery.visible.min.js', null, null, true );
	wp_enqueue_script('jquery-visible');

	// Custom scripts / sliders
	wp_register_script( 'psibufet-script', get_template_directory_uri() . '/js/custom.js?ver=' . $theme_version . $random_number, null, null, true );
	wp_enqueue_script('psibufet-script');
	wp_localize_script( 'psibufet-script', 'PBAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
	
	// Restaurants map
	wp_register_script( 'psibufet-restmap', get_template_directory_uri() . '/js/_restMap.js?ver=' . $theme_version . $random_number, null, null, true );
	wp_enqueue_script('psibufet-restmap');

	// Sliders
	wp_register_script( 'psibufet-sliders', get_template_directory_uri() . '/js/_sliders.js?ver=' . $theme_version . $random_number, null, null, true );
	wp_enqueue_script('psibufet-sliders');

	// Animations
	wp_register_script( 'psibufet-animations', get_template_directory_uri() . '/js/animation.js?ver=' . $theme_version . $random_number, null, null, true );
	wp_enqueue_script('psibufet-animations');

	// Data Layers
	wp_register_script( 'psibufet-datalayers', get_template_directory_uri() . '/js/dataLayers.js?ver=' . $theme_version . $random_number, null, null, true );
	wp_enqueue_script('psibufet-datalayers');

	// Partner form
	wp_register_script( 'psibufet-partnerform', get_template_directory_uri() . '/js/partnerForm.js?ver=' . $theme_version . $random_number, null, null, true );
	wp_enqueue_script('psibufet-partnerform');
	wp_localize_script( 'psibufet-partnerform', 'PBAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );

	// PDF Download
	$classes = get_body_class();
	if(in_array('page-template-page_pdf', $classes)){
		wp_register_script('psibufet-downloadpdf', get_template_directory_uri() . '/js/_pdfdownload.js', '', $theme_version . $random_number, true);
		wp_enqueue_script('psibufet-downloadpdf');
	}

        
    if (!startsWith($_SERVER['REQUEST_URI'], '/lp')){
		wp_register_script( 'psibufet-referralCode', get_template_directory_uri() . '/js/referralCode.js?ver=' . $theme_version . $random_number, null, null, true );
		wp_enqueue_script('psibufet-referralCode');
	}else{
		wp_register_script( 'psibufet-referralCode-lp', get_template_directory_uri() . '/js/referralCode_lp.js?ver=' . $theme_version . $random_number, null, null, true );
		wp_enqueue_script('psibufet-referralCode-lp');
	}
}
add_action( 'wp_enqueue_scripts', 'psibufet_scripts' );

/* Partner ajax form send engine */

add_action('wp_ajax_availableForm', 'availableForm');
add_action('wp_ajax_nopriv_availableForm', 'availableForm');

function availableForm(){
	$type = isset( $_POST['type'] ) ? $_POST['type'] : '';
	$company = isset( $_POST['company'] ) ? $_POST['company'] : '';
	$mail = isset( $_POST['mail'] ) ? $_POST['mail'] : '';
	$phone = isset( $_POST['phone'] ) ? $_POST['phone'] : '';
	
	$to = 'michalina@psibufet.pl';
	$subject = '[PsiBufet] Zgłoszenie ambasadora';
	$message = "Typ: " . $type . "\r\nFirma: " . $company . "\r\nMail: " . $mail . "\r\nPhone: " . $phone;

	$user = $mail;
	$subject_user = 'Czas na garść informacji!';
	ob_start();
	include (get_template_directory() . '/email-templates/partner-template.php');
	$message_user = ob_get_contents();
	ob_end_clean();
	$headers = array('Content-Type: text/html; charset=UTF-8');
	
	// $sent = wp_mail( $to, $subject, $message );
	$sentUser = wp_mail($user, $subject_user, $message_user, $headers);

	if($sentUser){
		echo 'done';
	}else{
		echo 'error';
	}
	exit();
}

/* Help ajax form send engine */

add_action('wp_ajax_helpForm', 'helpForm');
add_action('wp_ajax_nopriv_helpForm', 'helpForm');

function helpForm(){
	$topic = isset( $_POST['topic'] ) ? $_POST['topic'] : '';
	$message = isset( $_POST['message'] ) ? $_POST['message'] : '';
	$name = isset( $_POST['name'] ) ? $_POST['name'] : '';
	$dogName = isset( $_POST['dogname'] ) ? $_POST['dogname'] : '';
	$mail = isset( $_POST['mail'] ) ? $_POST['mail'] : '';
	
	$to = 'kontakt@psibufet.pl';
	$subject = '[PsiBufet] Formularz "POMOC"';
	$message = "Temat: " . $topic . "<br/>Wiadomość: " . $message . "<br/>Imię: " . $name . "<br/>Imię psa: " . $dogName . "<br/>Adres e-mail: " . $mail;
	$headers = 'Content-Type: text/html; charset=UTF-8';
	
	$sent = wp_mail($to, $subject, $message, $headers);

	if($sent){
		echo 'done';
	}else{
		print_r($sent);
	}
	exit();
}