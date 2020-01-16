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

<div id="<?php _e( $id );?>" class="ytube-video modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body text-center">
        <iframe width="420" height="315" src="<?php echo $youtube_link;?>"></iframe>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /-->
