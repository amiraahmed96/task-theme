<?php
/*
* function to call all css files
* call_stylesheet()
*/
function call_stylesheet()
{
    wp_enqueue_style('my-bootstrap-css',get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('my-fonts-css',get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('my-style',get_template_directory_uri() . '/css/style.css');
}

/*
* function to call all javascript files
* call_javascript()
*/
function call_javascript()
{
     wp_enqueue_script('my-jquery-js',get_template_directory_uri() . '/js/jquery.min.js');
    wp_enqueue_script('my-bootstrap-js',get_template_directory_uri() . '/js/bootstrap.min.js',array('jquery'));
    wp_enqueue_script('my-main-js',get_template_directory_uri() . '/js/main.js');
}



/*
* add action to call all 
* js and css files
*/
add_action('wp_enqueue_scripts','call_stylesheet');
add_action('wp_enqueue_scripts','call_javascript');


/*
* register menus
*/
function register_menus()
{
    register_nav_menus(array(
        'bootstrap-menu' => 'top menu'
    ));
}

/*
* to add menus in page
*/
function add_menus()
{
    wp_nav_menu(array(
        'container'      => false ,
        'theme_location' => 'bootstrap-menu',
        'menu_class'     => 'nav navbar-nav'
    ));
}

/*
* add action to put menus in theme
*/
add_action('init','register_menus');

/*
* to add feature image to post
*/
add_theme_support('post-thumbnails');


/*
* excerpt function
*/
function wpdocs_excerpt_more( $more ) {
    return '<a href="'.get_the_permalink() . '" rel="nofollow">Read More...</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );




/*
* register sidebar 
*/
function my_sidebar()
{
    register_sidebar(array(
        'name' => 'main-sidbar',
        'id'   => 'main-sidebar',
        'description' => 'the main sidebar',
        'class'   => 'main_sidebar',
        'before_widget' => '<div class="widget-comment">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
    ));
}

add_action('widgets_init','my_sidebar');


?>