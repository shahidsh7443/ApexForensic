<?php if ( ! defined( 'ABSPATH' ) ) :
    exit; // Exit if accessed directly
endif; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
     <link rel="icon" type="image/png" href="wp-content/uploads/2015/12/New-Project.png" />
    <link rel="pingback" href="<?php esc_url( bloginfo( 'pingback_url' ) ); ?>">
    <?php wp_head(); ?>
  <!--  <script type='text/javascript'>(function(s) {var head = document.getElementsByTagName('HEAD').item(0);var s= document.createElement('script');s.type = 'text/javascript';s.src='//s3-us-west-2.amazonaws.com/formget/js/popup.js';head.appendChild(s); var options = {'tabKey': 'wADi-286496/t','tabtext':'Contact Us','height': '526','width': '350','tabPosition':'bottom','textColor': 'ffffff','tabBackground': '17B86F','fontSize': '16','tabbed':''};s.onload = s.onreadystatechange = function() {var rs = this.readyState;if (rs)if (rs != 'complete')if (rs != 'loaded')return;try {sideBar = new buildTabbed();sideBar.initializeOption(options);sideBar.loadContent();sideBar.buildHtml();} catch (e) {}  };var scr = document.getElementsByTagName(s)[0];})(document, 'script');</script>-->
</head>
<body id="home" <?php body_class(); ?> data-spy="scroll" data-target=".navbar" data-offset="100">
    <?php if (nominee_option('page-preloader', false, true)) : ?>
        <div id="preloader" style="background-color: <?php echo esc_attr(nominee_option('loader-bg-color', false, '#ffffff'));?>">
            <div id="status">
                <div class="status-mes" style="background-image: url(<?php echo esc_url(nominee_option('tt-loader', 'url', get_template_directory_uri() . '/images/preloader.gif'));?>);"></div>
            </div>
        </div>
    <?php endif; ?>

    <?php
    $tt_header_style = nominee_option('header-style', false, 'header-default');

    if ($tt_header_style == 'header-transparent') :
        get_header('transparent');
    else :
        get_header('default');
    endif; ?>

<?php get_template_part( 'page', 'header' );
