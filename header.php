<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Vincequity Theme</title>
        <?php wp_head(); ?>
    </head>
    <?php

    if( is_front_page() ):
	    $awesome_classes = array( 'vince-class', 'my-class' );
    else:
	    $awesome_classes = array( 'no-vince-class' );
    endif;

    ?>

    <body <?php body_class( $awesome_classes ); ?>>
    <?php wp_nav_menu(array('theme_location'=>'top_menu')) ;?>