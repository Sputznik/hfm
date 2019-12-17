<?php $bg_image='';?>
<div class="image-grid-container">
  <?php foreach ( $instance['img_grid_items'] as $value) :  ?>
  <?php
  $bg_image = wp_get_attachment_url( $value['image'] );
  if( !( $value['image'] ) ){
    $bg_image = $value['image_fallback'];
  }
  ?>
  <div class="grid-img col-xs-6">
    <img src="<?php _e( $bg_image );?>"/>
  </div>
  <?php endforeach;?>
</div>
