<?php get_header();?>
<?php
global $post;
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' )[0];
$video_link = get_post_meta( $post->ID, 'youtube', true ); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 stretched">
      <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <div class='video-popup overlay-text-parent'>
          <div class='video' style="background-image: url(<?php _e($thumbnail); ?>);">
            <div class="video-info">
              <h3><?php the_title(); ?></h3>
              <?php the_content();?>
            </div>
          </div>
          <!-- <div class='overlay-text'> -->
            <!-- <a href="<?php //_e( $video_link ); ?>" rel="wp-video-lightbox"> -->
              <!-- <h3><?php //the_title(); ?></h3>
              <p><?php //the_content();?></p> -->
            <!-- </a>
          </div> -->
        </div>
      <?php endwhile; endif;?>
    </div>
  </div>
  <div class="related-videos">
    <h1 style="margin-bottom: 20px;">More Episodes</h1>
    <?php echo do_shortcode('[orbit_related_query taxonomy="video_category" style="horizontallist" posts_per_page="-1"]');?>
  </div>
</div>
<?php get_footer();?>
