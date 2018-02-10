<?php 

function carrega_scripts(){

	wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');

	wp_enqueue_style('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), 
									'4.0.0', 'all');

	wp_enqueue_script('template', get_template_directory_uri() . '/js/template.js', array(), null, true);
	// true carrega apenas o script no final do body

	wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', 
										array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'carrega_scripts');