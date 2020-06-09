<?php

/**
 * Bootstrap Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bootstrap_Starter
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('bootstrap_starter_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bootstrap_starter_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on bootstrap_starter, use a find and replace
		 * to change 'bootstrap_starter' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('bootstrap_starter', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'bootstrap_starter'),
			),
		);

		// Secondary menu
		register_nav_menus(
			array(
				'menu-2' => esc_html__('Secondary', 'bootstrap_starter'),
			),
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
				'bootstrap_starter_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'bootstrap_starter_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bootstrap_starter_content_width()
{
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('bootstrap_starter_content_width', 640);
}
add_action('after_setup_theme', 'bootstrap_starter_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bootstrap_starter_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'bootstrap_starter'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'bootstrap_starter'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'bootstrap_starter_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function bootstrap_starter_scripts()
{
	wp_enqueue_style('bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap_starter-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('bootstrap_starter-style', 'rtl', 'replace');

	wp_enqueue_style('global', get_template_directory_uri() . '/css/global.css');
	wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css');
	wp_enqueue_style('materialicons', 'https://fonts.googleapis.com/icon?family=Material+Icons');
	wp_enqueue_style('footer', get_template_directory_uri() . '/css/footer.css');

	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array(), '3.5.1', true);
	wp_enqueue_script('popper_js', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
	wp_enqueue_script('bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array(), '4.5.0', true);
	wp_enqueue_script('bootstrap_starter-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	wp_enqueue_script('bootstrap_starter-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true);
	wp_enqueue_script('scroll-to-top', get_template_directory_uri() . '/js/scroll-to-top.js', array('jquery'), '', true);
	wp_enqueue_script('carousel', get_template_directory_uri() . '/js/carousel.js', array('jquery'), '', true);


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'bootstrap_starter_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/woocommerce.php';
}


/* CUSTOME CODE STARTS HERE */
require_once('bs4navwalker.php');

// Add custom image size (with hard crop) 960*600
add_image_size('boritokep', 960, 600, true);


/* WOOCOMMERCE CUSTOM FUNCTIONS */

/**
 * Change several of the breadcrumb defaults
 */
add_filter('woocommerce_breadcrumb_defaults', 'bootstrap_starter_woocommerce_breadcrumbs');
function bootstrap_starter_woocommerce_breadcrumbs()
{
	global $wp;
	if (home_url($wp->request) ==  (get_bloginfo('url') . '/shop') ) {
		return array(
			'delimiter'   => '',
			'wrap_before' => '<nav aria-label="woocommerce-breadcrumb breadcrumb mt2 m-mt1 mb1" itemprop="breadcrumb"><ol class="breadcrumb small-size"><li class="breadcrumb-item"><i class="ri-home-4-line ri-lg icon-position-3"></i><a href="/">Kezdőlap</a></li>',
			'wrap_after'  => '</ol></nav>',
			'before'      => '<li class="breadcrumb-item">',
			'after'       => '</li>',
			// 'home'        => _x('Webshop', 'breadcrumb', 'woocommerce'),
		);
	} else {
		return array(
			'delimiter'   => '',
			'wrap_before' => '<nav aria-label="woocommerce-breadcrumb breadcrumb mt2 m-mt1 mb1" itemprop="breadcrumb"><ol class="breadcrumb small-size"><li class="breadcrumb-item"><i class="ri-home-4-line ri-lg icon-position-3"></i><a href="/">Kezdőlap</a></li>',
			'wrap_after'  => '</ol></nav>',
			'before'      => '<li class="breadcrumb-item">',
			'after'       => '</li>',
			'home'        => _x('Webshop', 'breadcrumb', 'woocommerce'),
		);
	}
}

/**
 * Replace the home link URL
 */
add_filter('woocommerce_breadcrumb_home_url', 'bootstrap_starter_custom_breadrumb_home_url', 20);
function bootstrap_starter_custom_breadrumb_home_url()
{
	return get_bloginfo('url') . '/shop';
}


// Change the default text for empty bag
remove_action('woocommerce_cart_is_empty', 'wc_empty_cart_message', 10);
add_action('woocommerce_cart_is_empty', 'bootstrap_starter_wc_empty_cart_message', 10);

function bootstrap_starter_wc_empty_cart_message()
{
	$html = '<div class="col-12 p0"><p class="cart-empty">';
	$html .= wp_kses_post(apply_filters('wc_empty_cart_message', __('Jelenleg üres a kosarad.', 'woocommerce')));
	echo $html . '</p></div>';
}

// Change button styles in cart
remove_action('woocommerce_widget_shopping_cart_buttons', 'woocommerce_widget_shopping_cart_button_view_cart', 10);
remove_action('woocommerce_widget_shopping_cart_buttons', 'woocommerce_widget_shopping_cart_proceed_to_checkout', 20);
do_action('woocommerce_widget_shopping_cart_buttons', 'bootstrap_starter_widget_shopping_cart_button_view_cart', 10);
do_action('woocommerce_widget_shopping_cart_buttons', 'bootstrap_starter_widget_shopping_cart_proceed_to_checkout', 20);

function bootstrap_starter_widget_shopping_cart_button_view_cart()
{
	echo '<a href="' . esc_url(wc_get_cart_url()) . '" class="btn button wc-forward mrhalf">' . esc_html__('View cart', 'woocommerce') . '</a>';
}

function bootstrap_starter_widget_shopping_cart_proceed_to_checkout()
{
	echo '<a href="' . esc_url(wc_get_checkout_url()) . '" class="btn button checkout wc-forward">' . esc_html__('Checkout', 'woocommerce') . '</a>';
}


// hooks to the product data tab
add_action('woocommerce_product_options_general_product_data', 'product_video_field');
// Adds a video field at the product data tab
function product_video_field()
{
	$args = array(
		'id'    => 'product_video_field',
		'label'    => sanitize_text_field('Termékvideó'),
		'placeholder'   => 'Illeszd ide a beágyazási kódot a youtube-ról',
		'desc_tip'    => true,
		'style'    => 'height:120px'

	);
	echo woocommerce_wp_textarea_input($args);
}


add_action('woocommerce_process_product_meta', 'product_video_field_save');

function product_video_field_save($post_id)
{
	$product_video_field = $_POST['product_video_field'];
	update_post_meta($post_id, 'product_video_field', $product_video_field);
}


remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
add_action('woocommerce_single_product_summary', 'woocommerce_show_product_sale_flash', 10);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50);


add_action('woocommerce_product_thumbnails', 'woocommerce_template_single_sharing', 30);

remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
remove_action('woocommerce_review_comment_text', 'woocommerce_review_display_comment_text', 10);


/**
 * Change the default country on the checkout for non-existing users only
 */
add_filter('default_checkout_billing_state', 'change_default_checkout_state');

function change_default_checkout_state($state)
{
	// If the user already exists, don't override country
	if (WC()->customer->get_is_paying_customer()) {
		return $state;
	}

	return 'CS'; // State code i18n/states
}

/**
 * @snippet       Add privacy policy tick box at checkout
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 3.6.3
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */

add_action('woocommerce_review_order_before_submit', 'bbloomer_add_checkout_privacy_policy', 9);

function bbloomer_add_checkout_privacy_policy()
{

	woocommerce_form_field('privacy_policy', array(
		'type'          => 'checkbox',
		'class'         => array('form-row privacy medium-size'),
		'label_class'   => array('woocommerce-form__label woocommerce-form__label-for-checkbox checkbox'),
		'input_class'   => array('woocommerce-form__input woocommerce-form__input-checkbox input-checkbox'),
		'required'      => true,
		'label'         => 'Elolvastam és elfogadom az <a href="/privacy-policy" target="_blank">Adatkezelési Tájékoztató</a>-ban foglaltakat.',
	));
}

// Show notice if customer does not tick

add_action('woocommerce_checkout_process', 'bbloomer_not_approved_privacy');

function bbloomer_not_approved_privacy()
{
	if (!(int) isset($_POST['privacy_policy'])) {
		wc_add_notice(__('Kérjük az Adatkezelési Tájékoztató elolvasását és elfogadását a rendelés folytatásához.'), 'error');
	}
}



/*
Plugin Name: Woocommerce Custom Profile Picture
Plugin URI: https://webfor99.com/woocommerce-custom-profile-picture/
Description: Allows any user to upload their own profile picture to the WooCommerce store
Version: 1.0
Author: webfor99.com
Author URI: https://webfor99.com/
*/
// =========================================================================
/**
 * Function wc_cus_cpp_form
 *
 */
add_action('woocommerce_before_edit_account_form', 'wc_cus_cpp_form');
function wc_cus_cpp_form($atts, $content = NULL)
{

	$user_id = get_current_user_id();

	if ($_GET['action'] == 'delete') {
		$picture_id = get_user_meta($user_id, 'profile_pic', true);
		delete_user_meta($user_id, 'profile_pic');
		//wp_delete_attachment( $picture_id, true ); // either one will work
		wp_delete_post($picture_id, true);
	}
	if ($_FILES['profile_pic'] and trim($_FILES['profile_pic']['name']) != '') {
		$picture_id = wc_cus_upload_picture($_FILES['profile_pic']);
		wc_cus_save_profile_pic($picture_id, $user_id);
	}

	echo '<h2 class="h4 mb2">Profilkép</h2>';

	$picture_id = get_user_meta($user_id, 'profile_pic', true);

	if (trim($picture_id) == '') :
		$delete_link = '';
	else :
		$delete_link = '<a href="' . get_permalink(get_option('woocommerce_myaccount_page_id')) . '/edit-account/?action=delete">Az avatar törlése</a>';
	endif;
	echo '<div class="mbhalf">';
	echo get_avatar($user_id) . '<br>';
	echo $delete_link;
	echo '</div>';

	echo '<div class="mb1">';
	echo '
        <form enctype="multipart/form-data" action="" method="POST">
            <input name="profile_pic" type="file" size="25"><br><br>
            <input class="btn-small type="submit" value="Feltöltés">
        </form>
    ';
	echo '</div>';

	echo 	'</div><!-- .col-12 -->';
	echo '<div class="col-12 col-sm-12 offset-md-1 col-md-6 col-lg-7 p0">';

	echo '<h2 class="h4 mb2">Személyes adatok</h2>';
}
// =========================================================================
/**
 * Function wc_cus_save_profile_pic
 *
 */
function wc_cus_save_profile_pic($picture_id, $user_id)
{
	update_user_meta($user_id, 'profile_pic', $picture_id);
}
// =========================================================================
/**
 * Function wc_cus_upload_picture
 *
 */
function wc_cus_upload_picture($foto)
{
	$wordpress_upload_dir = wp_upload_dir();
	// $wordpress_upload_dir['path'] is the full server path to wp-content/uploads/2017/05, for multisite works good as well
	// $wordpress_upload_dir['url'] the absolute URL to the same folder, actually we do not need it, just to show the link to file
	$i = 1; // number of tries when the file with the same name is already exists
	$profilepicture = $foto;
	$new_file_path = $wordpress_upload_dir['path'] . '/' . $profilepicture['name'];

	/* we fixed this, mime_content_type() was not working */
	//$new_file_mime = mime_content_type( $profilepicture['tmp_name'] );
	$check = getimagesize($profilepicture['tmp_name']);
	$new_file_mime = $check["mime"];

	$log = new WC_Logger();

	if (empty($profilepicture))
		$log->add('custom_profile_picture', 'File is not selected.');
	if ($profilepicture['error'])
		$log->add('custom_profile_picture', $profilepicture['error']);

	if ($profilepicture['size'] > wp_max_upload_size())
		$log->add('custom_profile_picture', 'It is too large than expected.');

	if (!in_array($new_file_mime, get_allowed_mime_types()))
		$log->add('custom_profile_picture', 'WordPress doesn\'t allow this type of uploads.');
	while (file_exists($new_file_path)) {
		$i++;
		$new_file_path = $wordpress_upload_dir['path'] . '/' . $i . '_' . $profilepicture['name'];
	}
	// looks like everything is OK
	if (move_uploaded_file($profilepicture['tmp_name'], $new_file_path)) {

		$upload_id = wp_insert_attachment(array(
			'guid'           => $new_file_path,
			'post_mime_type' => $new_file_mime,
			'post_title'     => preg_replace('/\.[^.]+$/', '', $profilepicture['name']),
			'post_content'   => '',
			'post_status'    => 'inherit'
		), $new_file_path);
		/* we fixed this, get_admin_url() was not working by itself */
		// wp_generate_attachment_metadata() won't work if you do not include this file
		require_once(str_replace(get_bloginfo('url') . '/', ABSPATH, get_admin_url()) . 'includes/image.php');
		// Generate and save the attachment metas into the database
		wp_update_attachment_metadata($upload_id, wp_generate_attachment_metadata($upload_id, $new_file_path));
		return $upload_id;
	}
}
// =========================================================================
/**
 * Function wc_cus_change_avatar
 *
 */
add_filter('get_avatar', 'wc_cus_change_avatar', 1, 5);
function wc_cus_change_avatar($avatar, $id_or_email, $size, $default, $alt)
{
	$user = false;
	if (is_numeric($id_or_email)) {
		$id = (int) $id_or_email;
		$user = get_user_by('id', $id);
	} elseif (is_object($id_or_email)) {
		if (!empty($id_or_email->user_id)) {
			$id = (int) $id_or_email->user_id;
			$user = get_user_by('id', $id);
		}
	} else {
		$user = get_user_by('email', $id_or_email);
	}
	if ($user && is_object($user)) {
		$picture_id = get_user_meta($user->data->ID, 'profile_pic');
		if (!empty($picture_id)) {
			$avatar = wp_get_attachment_url($picture_id[0]);
			$avatar = "<img alt='{$alt}' src='{$avatar}' class='avatar avatar-{$size} photo' height='{$size}' width='{$size}' />";
		}
	}
	return $avatar;
}

add_action('wp_footer', 'add_google_analytics');
function add_google_analytics()
{ ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=INSERT_YOUR_ID_HERE"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'INSERT_YOUR_ID_HERE');
	</script>
<?php
}
?>