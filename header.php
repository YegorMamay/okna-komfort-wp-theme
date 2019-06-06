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
        <p>(044) 360-43-46 &mdash;  &diams; &mdash; (050) 086-10-03 &mdash;  &diams; &mdash; (093) 709-35-57 &mdash;  &diams; &mdash; (097) 395-75-76</p>
  </div>
</div>
<header id="page-header">
   <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
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
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
<?php get_template_part('navbar-search'); ?>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="page-wrapper">
