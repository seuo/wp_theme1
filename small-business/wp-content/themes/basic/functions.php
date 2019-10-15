<?php

function register_resources() {

    // register main menu
    register_nav_menu('main-menu','Main Menu' );

    //register custom post types
    $args = array(
      'public' => true,
      'label'  => 'Slides'
    );
    register_post_type( 'slide', $args );

    $args = array(
        'public' => true,
        'label' => 'Features'
    );
    register_post_type( 'feature', $args );

    $args = array(
        'public' => true,
        'label' => 'Team Members'
    );
    register_post_type( 'members', $args );
}

    add_action( 'init', 'register_resources' );

    //menu filter (used to modify html output to wp)
    function add_class_to_li ( $classes, $item, $args, $depth ) { 
        $classes[] = 'nav-item';
        return $classes;
     }
 
    add_filter( 'nav_menu_css_class', 'add_class_to_li', 10, 4 ); 


    function add_class_to_anchors( $atts ) {
        $atts['class'] = 'nav-link';
     
        return $atts;
    }
    add_filter( 'nav_menu_link_attributes', 'add_class_to_anchors', 10 );

?>

