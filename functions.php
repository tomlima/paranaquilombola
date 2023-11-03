<?php
/*----------------
 Theme setup
----------------*/
add_action('after_setup_theme', 'cn_setup');
function cn_setup()
{

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 90,
			'width'       => 12,
			'flex-height' => true,
			'flex-width'  => true,
			'uploads'     => true,
			'header-text'            => true,
			'default-text-color'     => true,
			'wp-head-callback'       => '',
			'admin-head-callback'    => '',
			'admin-preview-callback' => '',
		)
	);

	add_post_type_support('posts', 'custom-fields');
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	register_nav_menus(
		array(
			'primary' => 'Principal'
		)
	);
}


/*------------------------
 Carregamento de scripts
------------------------*/
add_action('wp_enqueue_scripts', 'cn_scripts');
function cn_scripts()
{
	$theme_version = wp_get_theme()->get('Version');
	//Scripts
	wp_enqueue_script('scripts', get_template_directory_uri() . '/dist/functions.min.js', array(), $theme_version, true);
	//Normalize
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/dist/normalize.css',false,$theme_version,'all');
	//Styles
	wp_enqueue_style( 'styles', get_template_directory_uri() . '/dist/styles.css',false,$theme_version,'all');
}



/*------------------------
 Tempo de leitura
------------------------*/
function tempo_leitura()
{
	$content = get_post_field('post_content');
	$word_count = str_word_count(strip_tags($content));
	$min = floor($word_count / 200); // tempo médio de leitura: 200 palavras
	echo $min;
}

