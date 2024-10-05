<?php
function TEMA_1_agregar_css_js(){
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap_solar', get_template_directory_uri() . '/css/bootstrap.min.css', false, '1.1', 'all');
    wp_enqueue_script('boostrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array( 'jquery' ),'5.3.3',true);
}
add_action( 'wp_enqueue_scripts', 'TEMA_1_agregar_css_js' );

//soporte imagenes destacadas
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 600, 9999, true );
}
//SOPORTE PARA WIDGETS
function TEMA_1_widgets () {
    register_sidebar(array(
            'id'            => 'widget_derecha',
			'name'          => __( 'Widget Derecha' ),
			'description'   => __( 'widget derecha de publicidad.' ),
			'before_widget' => '<div class="card-body">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4><hr>',
    ));
}
add_action('widgets_init', 'TEMA_1_widgets');
?>