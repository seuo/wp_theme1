<?php

function register_resources() {

    // register main menu
    register_nav_menu('main-menu','Main Menu' );
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

