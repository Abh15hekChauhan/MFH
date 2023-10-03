<?php
function wgl_child_scripts()
{
	wp_enqueue_style('wgl-parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'wgl_child_scripts');

wp_enqueue_script('Custom-js', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), false, true);
wp_enqueue_style('Custom-style', get_stylesheet_directory_uri() . '/style.css');
?>

