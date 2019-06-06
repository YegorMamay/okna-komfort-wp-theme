<?php
/**
*Template Name: Landing
**/
?>

<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title(' | ', true, 'right'); bloginfo('name'); ?></title>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php get_template_part('loops/content', 'page'); ?>

<?php wp_footer(); ?>
</body>
</html>