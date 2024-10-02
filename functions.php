<?php
function agregar_css_js(){
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap_solar', get_template_directory_uri() . '/css/bootstrap.min.css', false, '1.1', 'all');
    wp_enqueue_script('boostrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array( 'jquery' ),'5.3.3',true);
}
add_action( 'wp_enqueue_scripts', 'agregar_css_js' );

//soporte imagenes destacadas
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    
}
?>