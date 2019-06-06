<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<title><?php wp_title(); ?></title>
	
	<link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico">
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="yandex-verification" content="8c6a4fbc3b6cbfe1" />


	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="pre-header">
   <div class="wrapper">
        <ul class="head-phones">
            <li><a href="tel:+380443604346">(044) 360-43-46</a></li>
            <li class="hide-on-mobile"> &mdash;  &diams; &mdash; </li>
            <li><a href="tel:+380500861003">(050) 086-10-03</a></li>
            <li class="hide-on-mobile"> &mdash;  &diams; &mdash; </li>
            <li><a href="tel:+380937093557">(093) 709-35-57</a></li>
            <li class="hide-on-mobile"> &mdash;  &diams; &mdash; </li>
            <li><a href="tel:+380973957576">(097) 395-75-76</a></li>
        </ul>
  </div>
</div>
<header id="page-header">
   <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="logo"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
    <nav class="main-nav">
    <?php
        wp_nav_menu( array(
            'theme_location'  => 'main-nav',
	        'menu'            => '',
	        'container'       => false,
	        'menu_class'      => 'menu-container',
	        'echo'            => true,
	        'fallback_cb'     => 'wp_page_menu',
	        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	        'depth'           => 2
        ) );
    ?>
    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="page-wrapper">
