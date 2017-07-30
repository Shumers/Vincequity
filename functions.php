<?php
/**
 * Created by PhpStorm.
 * User: WebShumer
 * Date: 30.07.2017
 * Time: 1:00
 */
function vincequity_script_enqueue () {
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/vincequity.css', array(), '1.0.0', 'all');
}
add_action( 'wp_enqueue_scripts', 'vincequity_script_enqueue');