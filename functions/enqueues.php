<?php 
function yegor_enqueues() {

	/* Styles */
    wp_register_style('style-css', get_template_directory_uri() . '/style.css', false, null);
    wp_enqueue_style('style-css');

	/* Scripts */
	wp_enqueue_script( 'jquery' );
    
    wp_register_script('modernizr',  'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, null, true);
	wp_enqueue_script('modernizr');

	wp_register_script('yegor-js', get_template_directory_uri() . '/scripts/yegor.js', false, null, true);
	wp_enqueue_script('yegor-js');
    

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'yegor_enqueues', 100);