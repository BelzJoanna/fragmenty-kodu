<?php
//Child Theme Functions File
add_action("wp_enqueue_scripts", "enqueue_wp_child_theme");
function enqueue_wp_child_theme()
{
	wp_enqueue_style("parent-css", get_template_directory_uri() . "/style.css");
	wp_enqueue_style("child-css", get_stylesheet_uri());
	//wp_enqueue_script("child-js", get_stylesheet_directory_uri() . "/js/script.js", array( "jquery" ), "1.0", true );
}

function my_custom_post_skills()
{
	$labels = array(
		'name'               => 'Umiejętności',
		'singular_name'      => 'Umiejętność',
		'add_new'            => 'Dodaj nową',
		'add_new_item'       => 'Dodaj nową umiejętność',
		'edit_item'          => 'Edytuj umiejętność',
		'new_item'           => 'Nowa umiejętność',
		'all_items'          => 'Wszystkie umiejętności',
		'view_item'          => 'Wyświetl umiejętność',
		'search_items'       => 'Wyszukaj umiejętność',
		'not_found'          => 'Nie znaleziono umiejętności',
		'not_found_in_trash' => 'Brak umiejętności w koszu',
		'menu_name'          => 'Umiejętności'
	);
	$args = array(
		'labels'        => $labels,
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array('title', 'thumbnail', 'editor'),
		'has_archive'   => true,
	);
	register_post_type('skills', $args);
}
add_action('init', 'my_custom_post_skills');
