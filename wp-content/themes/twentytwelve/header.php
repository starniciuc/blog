<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site">
            <header id="masthead" class="site-header" role="banner">
                <h1 id="logo"> <a href="<?php echo esc_url(home_url('/')); ?>">kolb.ru</a></h1>
                    <!--<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                    <h2 class="site-description"><?php bloginfo('description'); ?></h2>-->
                <ul class="social-links">
                    <li class="twitter"><a href="http://twitter.com/alex_kolb">twitter</a></li>
                    <li class="facebook"><a href="http://www.facebook.com/kolb.aleksandr">facebook</a></li>
                    <li class="rss"><a href="/feed/rss/">rss</a></li>
                </ul>
                <div class="site-menu">
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu')); ?>
                </div>
                <div style="margin-left: 15px;" class="history_link">
                    <a href="#" onclick="window.history.back(-1)">← Назад</a>
                </div>            

            </header><!-- #masthead -->

            <div id="main" class="wrapper">