<ul id="<?php _e( $atts['id'] );?>" data-target="<?php _e('li.orbit-article');?>" data-url="<?php _e( $atts['url'] );?>" class="list-unstyled list-videos">
  <?php while( $this->query->have_posts() ) : $this->query->the_post();?>
	<li class="orbit-article">
    <?php if( has_post_thumbnail() ):?>
    <div class='orbit-post-image'>
      <?php the_post_thumbnail();?>
    </div>
    <?php else:?>
    <div class='orbit-post-image'>
      <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/default-image.png';?>" alt="<?php the_title(); ?>" />
    </div>
    <?php endif;?>
    <div class='orbit-post-desc'>
      <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
      <div class="orbit-post-excerpt"><?php echo excerpt(30);?></div>
      <?php echo get_template_part( "partials/content", "fields" );?>
    </div>
  </li>
  <?php endwhile;?>
</ul>
