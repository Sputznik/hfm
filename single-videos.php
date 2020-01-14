<?php get_header();?>
<?php
global $post;
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' )[0];
$video_link = get_post_meta( $post->ID, 'youtube', true ); ?>
<div class="container-fluid ">
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  <div class="row">
    <div class="col-md-12 stretched">
      <!-- Play Video -->
        <div class='video-popup'>
          <div class='video' style="background-image: url(<?php _e($thumbnail); ?>);">
            <div class="video-info">
              <h3><?php the_title(); ?></h3>
              <?php the_content();?>
              <a class="play-btn btn btn-primary" href="#ytube-video" data-toggle="modal">Play Video</a>
            </div>
          </div>
        </div>
      <!-- Play Video -->
    </div>
  </div>
  <?php endwhile; endif;?>

  <?php $html = do_shortcode( '[orbit_related_query taxonomy="video_category" style="scrolling" posts_per_page="-1"]' );?>
  <?php if( strlen( $html ) ):?>
  <div class="container">
    <div class="related-videos">
      <h1>More Episodes</h1>
      <?php echo $html;?>
    </div>
  </div>
  <?php endif;?>
</div>

<?php
  $youtube_link = get_post_meta( $post->ID, 'youtube', true );
  $url_components = parse_url( $youtube_link );
  parse_str($url_components['query'], $params);

  $youtube_link = "https://www.youtube.com/embed/" . $params['v'];
?>

<div id="ytube-video" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body text-center">
        <iframe width="420" height="315" src="<?php echo $youtube_link;?>"></iframe>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /-->
<?php get_footer();?>
