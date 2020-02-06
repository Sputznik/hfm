<?php get_header();
  $term = $wp_query->get_queried_object();
  $header_url = get_stylesheet_directory_uri().'/assets/images/blog.png';
  $shortcode = "[orbit_query post_type='post' style='list' posts_per_page='-1' tax_query='post_tag:$term->slug']";
?>
<div class="container-fluid header">
  <div class="header-image">
    <img src="<?php _e( $header_url );?>" alt="">
  </div>
  <div class="container related-tags" >
    <div class="related-tags-content">
      <?php echo do_shortcode( $shortcode );?>
    </div>
  </div>
</div>
<?php get_footer();?>
