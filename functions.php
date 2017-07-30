<?php
/**
 * Created by PhpStorm.
 * User: WebShumer
 * Date: 30.07.2017
 * Time: 1:00
 */
/**
 * Подключаем стили и скрипты
 */
function vincequity_script_enqueue() {
	wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/vincequity.css', array(), '1.0.0', 'all' );
	wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/vincequity.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'vincequity_script_enqueue' );
/**
 * Добавляем поддержку меню в теме
 */
function vincequity_theme_setup() {
	add_theme_support('menus');

	register_nav_menu('top_menu', 'Главное меню');
	register_nav_menu('footer_menu', 'Меню в футере');
}
add_action('init', 'vincequity_theme_setup');