<?php

function wpdevs_load_scripts()
{
    wp_enqueue_style('wpdevs-style', get_stylesheet_uri(), array(), '1.0', 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null);
    wp_enqueue_script('dropdpwn', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true);

}
add_action('wp_enqueue_scripts', 'wpdevs_load_scripts');



//recursos de configuracao do tema
function wpdevs_config()
{
    register_nav_menus(
        array(
            'wp_devs_main_menu' => 'Main Menu',
            'wp_devs_footer_menu' => 'Footer Menu',
        )
    );
    $args = array(
        'height'=> '225',
        'width'=> '1920',
    );
    add_theme_support('custom-header', args: $args);
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'width'=> 200,
        'height' => 110,
        'flex-height' => true,
        'flex-width'=> true
    ));
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));

    add_theme_support(('title-tag'));
}
add_action('after_setup_theme','wpdevs_config', 0); // a funcao wpdevs_config sera chamada quando o gancho áfter_setup_theme'ficar disponivel e com a maior prioridade possivel ,0, antes de qualquer outra funcao.

add_action('widgets_init','wpdevs_sidebars',0); //barra lateral
function wpdevs_sidebars(){
    register_sidebar(
        array(
            'name'=> 'Blog Sidebar',
            'id'=> 'sidebar-blog',
            'description'=> 'This is the Blog Sidebar. You can add your widgets here.',
            'before_widgets'=> '<div class="widget-wrapper>"',
            'after_widgets'=> '</div>',
            'before-title'=> '<h4 class="widget-title">',
            'after-title'=> '</h4>',
        )
    );

    register_sidebar(
        array(
            'name'=> 'Service 1',
            'id'=> 'service-1',
            'description'=> 'First',
            'before_widgets'=> '<div class="widget-wrapper>"',
            'after_widgets'=> '</div>',
            'before-title'=> '<h4 class="widget-title">',
            'after-title'=> '</h4>',
        )
    );

    register_sidebar(
        array(
            'name'=> 'Service 2',
            'id'=> 'service-2',
            'description'=> 'Second',
            'before_widgets'=> '<div class="widget-wrapper>"',
            'after_widgets'=> '</div>',
            'before-title'=> '<h4 class="widget-title">',
            'after-title'=> '</h4>',
        )
    );

    register_sidebar(
        array(
            'name'=> 'Service 3',
            'id'=> 'service-3',
            'description'=> 'Second',
            'before_widgets'=> '<div class="widget-wrapper>"',
            'after_widgets'=> '</div>',
            'before-title'=> '<h4 class="widget-title">',
            'after-title'=> '</h4>',
        )
    );
}

if (!function_exists('wp_body_open')){
    function wp_body_open() {
        do_action('wp_body_open');
    }
}