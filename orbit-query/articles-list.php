<ul id="<?php _e( $atts['id'] );?>" data-target="<?php _e('li.orbit-article');?>" data-url="<?php _e( $atts['url'] );?>" class="list-unstyled list-videos">
  <?php while( $this->query->have_posts() ) : $this->query->the_post();?>
	<li class="orbit-article">
    <?php if( has_post_thumbnail() ):?>
    <div class='orbit-post-image'>
      <a href="<?php the_permalink();?>">
        <?php the_post_thumbnail();?>
      </a>
    </div>
    <?php else:?>
    <div class='orbit-post-image'>
      <a href="<?php the_permalink();?>">
        <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/default-image.png';?>" alt="<?php the_title(); ?>" />
      </a>
    </div>
    <?php endif;?>
    <div class='orbit-post-desc'>
      <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
      <?php $post_type = get_post_type(); if( $post_type == 'post' ):?>
        <div class='post-author-info'>
          <?php global $post;?>
          <div class="post-author-avatar">
            <img src="<?php _e( get_avatar_url( $post->post_author,array("size"=>60 ) ) );?>" alt="author-avatar">
          </div>
          <div class="post-author-meta">
            <div class="post-author-name"><?php the_author();?></div>
            <div class="post-author-date"><?php echo get_the_date('M j, Y');?></div>
          </div>
        </div>
      <?php endif;?>
      <div class="orbit-post-excerpt"><?php echo excerpt(30);?></div>
      <?php echo get_template_part( "partials/content", "fields" );?>
    </div>
  </li>
  <?php endwhile;?>
</ul>
