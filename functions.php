<?php
add_action('wp_enqueue_scripts',function(){
  wp_enqueue_style('hfm-style', get_stylesheet_directory_uri().'/assets/css/hfm.css', array('sp-core-style'), time() ); //'1.0.8'
});



/* CHANGE THE ATTRIBUTES PASSED TO THE NAVIGATION MENU */
add_filter('sp_nav_menu_options', function( $sp_nav_menu_options ){

  global $sp_customize;

  $header_type = $sp_customize->get_header_type();

  if( $header_type == 'header5' ){

    $sp_nav_menu_options['container_class'] = 'collapse navbar-collapse';
    $sp_nav_menu_options['container_id']    = 'bs-example-navbar-collapse-1';
    $sp_nav_menu_options['menu_class']      = 'nav navbar-nav navbar-right';

  }

  return $sp_nav_menu_options;
});

//HEADER OPTIONS
add_filter( 'sp_headers_options', function( $headers_arr ){
  $headers_arr['header5'] = 'HFM Menu';
  return $headers_arr;
} );

add_filter( 'sp_header5_template', function( $template ){
  $template = get_stylesheet_directory().'/partials/header5.php';
  return $template;
} );


add_filter( 'body_class', function( $classes ){


  global $sp_customize;
  $header_type = $sp_customize->get_header_type();

  if( $header_type ){

    if( 'header5' == $header_type && !sp_is_sticky_nav_transparent() ){
      $classes[] = 'with-solid-menu';

    }

  }

  return $classes;
});


/**
* Add a custom link to the end of a specific menu that uses the wp_nav_menu() function
*/
// add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);
// function add_admin_link($items, $args){
//     if( $args->theme_location == 'primary' ){
//         $items .= '<li><a title="Linkedin" target="_blank" href="https://www.linkedin.com/">' . __( 'Admin' ) . '</a></li>';
//         $items .= '<li><a title="Youtube" target="_blank" href="https://www.youtube.com/">' . __( 'Admin' ) . '</a></li>';
//         $items .= '<li><a title="Instagram" target="_blank" href="https://www.instagram.com/">' . __( 'Admin' ) . '</a></li>';
//         $items .= '<li><a title="Facebook" target="_blank" href="https://www.facebook.com/">' . __( 'Admin' ) . '</a></li>';
//     }
//     return $items;
// }
