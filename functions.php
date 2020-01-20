<?php
add_action('wp_enqueue_scripts',function(){
  wp_enqueue_style('hfm-style', get_stylesheet_directory_uri().'/assets/css/hfm.css', array('sp-core-style'), time() ); //'1.0.8'
});

// Include Custom Post Type
include( get_stylesheet_directory().'/cpt/cpt.php' );

/* ADD SOW FROM THE THEME */
add_action('siteorigin_widgets_widget_folders', function( $folders ){
  $folders[] = get_stylesheet_directory() . '/so-widgets/';
  return $folders;
});

//Add google Comfortaa text font
add_filter( 'sp_list_google_fonts', function( $fonts ){

  // Josefin Sans similar to Brandon Grotesque
  $fonts[] = array(
      'slug'	=> 'josefin',
      'name'	=> 'Josefin Sans',
      'url'	  => 'Josefin+Sans'
    );
  //Lusitana similar to Big Caslon
  $fonts[] =array(
      'slug'	=> 'lusitana',
      'name'	=> 'Lusitana',
      'url'	  => 'Lusitana'
  );
  return $fonts;
} );

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

//Excerpt
function excerpt( $limit ) {

	global $post;

	$excerpt = $post->post_excerpt;

	if( !$excerpt && !strlen( $excerpt ) ){

    $excerpt = $post->post_content;
		$excerpt = strip_shortcodes( $excerpt );
		$excerpt = excerpt_remove_blocks( $excerpt );
		$excerpt = str_replace( ']]>', ']]&gt;', $excerpt );

	}

	$excerpt = wp_trim_words( $excerpt, $limit, '...' );

	return $excerpt;
}
//Excerpt

//Title
function title(){
  global $post;
  $title = $post->post_title;
  if( strlen( $title ) > 89  ){
    $title = substr( $post->post_title, 0, 89 );
    return $title."...";
  }
  return $title;
}

/**
* Add a custom link to the end of a specific menu that uses the wp_nav_menu() function
*/
add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);
function add_admin_link($items, $args){

  $social_icon .='<a title="Linkedin" target="_blank" href="https://www.linkedin.com/company/13007724/admin/"><i class="fa fa-linkedin"></i></a>';
  $social_icon .='<a title="Youtube" target="_blank" href="https://www.youtube.com/channel/UCzpEIH1XeCBhlw54TDjiOOQ?view_as=subscriber"><i class="fa fa-youtube-play"></i></a>';
  $social_icon .='<a title="Instagram" target="_blank" href="https://www.instagram.com/humanfactormedia/"><i class="fa fa-instagram"></i></a>';
  $social_icon .='<a title="Facebook" target="_blank" href=" https://www.facebook.com/TheHumanFactorMEDIA/?modal=admin_todo_tour"><i class="fa fa-facebook"></i></a>';

  if( $args->theme_location == 'primary' ){
      $items .= '<li class="menu-item"><div class="social-icons" style="padding-right: 15px;">'.$social_icon.'</div></li>';
  }
  return $items;
}



add_shortcode('hfm_contact', function(){
  ob_start();
  require(get_stylesheet_directory().'/contact.php');
  return ob_get_clean();
});

add_shortcode('hfm_video', function( $atts ){
  $atts = shortcode_atts(array(
    'video_id' => '',
  ), $atts, 'hfm_video');
  ob_start();
  require(get_stylesheet_directory().'/video.php');
  return ob_get_clean();
});

function get_youtube_embed_link( $youtube_link ){
  $url_components = parse_url( $youtube_link );
  parse_str( $url_components['query'], $params );
  return "https://www.youtube.com/embed/" . $params['v'];
}

function get_unique_id( $atts ){
  return substr( md5( json_encode( $atts ) ), 0, 8 );
}

function the_youtube_modal( $id, $youtube_link ){
  ?>
  <div id="<?php _e( $id );?>" class="ytube-video modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body text-center">
          <iframe width="420" height="315" src="<?php echo $youtube_link;?>"></iframe>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  <?php
}

add_shortcode('hfm_video_popup', function( $atts ){
  $atts = shortcode_atts(array(
    'youtube_link'  => '',
    'thumbnail'     => '',
    'title'         => '',
    'desc'          => ''
  ), $atts, 'hfm_video_popup');


  $youtube_link = get_youtube_embed_link( $atts[ 'youtube_link' ] );

  $id = get_unique_id( $atts );

  ob_start();
  require( get_stylesheet_directory().'/partials/video-popup.php' );
  return ob_get_clean();

} );

add_shortcode('hfm_video_popup_btn', function( $atts ){
  $atts = shortcode_atts(array(
    'youtube_link'  => '',
    'btn_text'      => '',
  ), $atts, 'hfm_video');


  $youtube_link = get_youtube_embed_link( $atts[ 'youtube_link' ] );

  $id = get_unique_id( $atts );

  ob_start();
  require( get_stylesheet_directory().'/partials/video-popup-btn.php' );
  return ob_get_clean();

} );
