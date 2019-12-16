<?php
$fa_arrow = get_stylesheet_directory_uri()."/assets/images/right_arrow.png";

//Get the data from the custom fields
$cf_fields = array(
      'spotify'       => 'SPOTIFY',
      'apple_music'   => 'APPLEMUSIC',
      'sound_cloud'   =>  'SOUNDCLOUD'
);
echo '<div class="custom-field-info">';
foreach ( $cf_fields as $key => $field ) {
  $data = get_post_meta( $post->ID , $key , true );
    if( !empty( $data ) ){
      $icon_path = get_stylesheet_directory_uri()."/assets/images/$key.png";
      $html = '<p>';
      $html .= '<a class="music-link" href="'.$data.'">';
      $html .= '<img class="music-icon" src="'.$icon_path.'"/>';
      $html .= $field;
      $html .= '<img class="arrow"src="'.$fa_arrow.'"/>';
      $html .=  '</a></p>';
      _e( $html );
    }
}
echo "</div>";
