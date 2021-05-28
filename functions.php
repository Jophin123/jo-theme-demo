<?php

// Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post_format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
//add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );


//register styles
function jo_enqueue_styles(){
    wp_enqueue_style('main-css',get_stylesheet_directory_uri().'style.css',[],time(),'all');
    wp_enqueue_style('jo-bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css',[],time(),'all');
}
add_action('wp_enqueue_scripts','jo_enqueue_styles');

//register menu
function jo_menus(){
    $locations=array(
        'primary' => "Desktop Primary top Sidebar",
        'footer' => "Footer Menu Items"
    );
    register_nav_menus($locations);
}

add_action('init','jo_menus');

function wphierarchy_widgets_init(){
    register_sidebar([
        'name'               => esc_html__('main sidebar','wphierarchy'),
        'id'                 => 'main-sidebar',
        'description'        =>esc_html__('add widget for main sidebar','wphierarchy'),
        'before_widget'      => '<section class="widget">',
        'after_widget'       => '</section>',
        'before_title'       =>'<h2 class="widget-title">',
        'after-title'        => '</h2>'
    ]);
}
add_action('widgets_init','wphierarchy_widgets_init');
