<div class='video-popup hfm-video-popup'>
  <div class='video' style="background-image: url(<?php _e( $atts['thumbnail'] ); ?>);">
    <div class="container">
      <div class="video-info">
        <h3><?php _e( $atts['title'] ); ?></h3>
        <div><?php _e( $atts['desc'] ); ?></div><br>
        <a class="play-btn btn btn-primary" href="#<?php _e( $id );?>" data-toggle="modal">Play Video</a>
      </div>
    </div>
  </div>
</div>

<?php the_youtube_modal( $id, $youtube_link );?>
