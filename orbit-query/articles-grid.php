<ul id="<?php _e( $atts['id'] );?>" data-target="<?php _e('li.orbit-article');?>" data-url="<?php _e( $atts['url'] );?>" class="list-unstyled verticallist-videos">
  <?php while( $this->query->have_posts() ) : $this->query->the_post();?>
	<li class="orbit-article">
    <?php if( has_post_thumbnail() ):?>
    <div class='orbit-post-image'>
      <a href="<?php the_permalink();?>">
        <?php the_post_thumbnail();?>
        <div class="overlay">
          <div style="padding: 0 10px;">
            <h2><?php the_title(); ?><h2>
          </div>
        </div>
      </a>
    </div>
    <?php else:?>
    <div class='orbit-post-image'>
      <a href="<?php the_permalink();?>">
        <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/default-image.png';?>" alt="<?php the_title(); ?>" />
      </a>
    </div>
    <?php endif;?>
  </li>
  <?php endwhile;?>
</ul>
