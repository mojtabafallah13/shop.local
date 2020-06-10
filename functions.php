<?php

function load_stylesheets()
{
    wp_register_style('custom',get_template_directory_uri() . '/assets/css/style.css', array(),1,'all');
    wp_enqueue_style('custom');


}


add_action('wp_enqueue_scripts', 'load_stylesheets');

function add_js()
{
    wp_register_script('script' , get_template_directory_uri() . '/assets/js/script.js' , array() , 1,1,1);
    wp_enqueue_script('script');


}

add_action('wp_enqueue_scripts', 'add_js');

add_theme_support('menus');

register_nav_menus(

    array(
        'top-menu'=> 'Top Menu',
		'top-m'=> 'Product',
    )
);
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);


function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

