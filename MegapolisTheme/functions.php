<?php 

	add_action( 'wp_enqueue_scripts', function() {

		// Шаблон для стилей
		wp_enqueue_style( 'normalize-css', get_template_directory_uri() . '/assets/css/normalize.css' );
		wp_enqueue_style( 'variables-css', get_template_directory_uri() . '/assets/css/variables.css' );
		wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/css/slick.css' );
		wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css' );
		wp_enqueue_style( 'media-css', get_template_directory_uri() . '/assets/css/media.css' );

		// код ниже отключает и подключает jquery
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
		wp_enqueue_script( 'jquery' );
	
		// код ниже подключает js файлы
		wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 'null', true );
		wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true );
	});


	add_action('after_setup_theme', 'EditMenu' );
	function EditMenu() {
		register_nav_menu('top', 'Основное меню');
	}






	// add_theme_support( 'menus' ); // добавление настроек меню в админке

	add_theme_support('post-thumbnails'); // добавление возможности управлять и менять посты,
	add_theme_support('title-tag '); // для заголовков постов


	add_theme_support('custom-logo'); // Функция для вывода логотипа








	// добавляем редукс в админ панель
	// require get_template_directory() . '/redux/redux-panel.php'

?>
