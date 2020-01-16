<?php get_header();?>
<div class="container-fluid ">
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  <div class="row">
    <div class="col-md-12 stretched">
    <?php
      global $post;
      $title = get_the_title();
      $content = get_the_content();
      $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' )[0];
      $youtube_link = get_post_meta( $post->ID, 'youtube', true );

      _e( do_shortcode( "[hfm_video_popup youtube_link='$youtube_link' thumbnail='$thumbnail' title='$title' desc='$content']" ) );
    ?>
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
<?php get_footer();?>
