<!-- HFM CONTACT PAGE WIDGET -->
<?php
  $bg_image = '';
  $bg_image = wp_get_attachment_url( $instance['background_image'] );
  if( !( $instance['background_image'] ) ){
    $bg_image = $instance['image_fallback'];
  }
?>
<div class="container-fluid contact-widget">
  <div class="bg-contact" style="background-image: url(<?php _e( $bg_image );?>);"></div>
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-6 pull-left col-xs-12">
        <h1><?php _e( $instance['contact_headline'] );?></h1>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
		  <?php foreach ( $instance['contact_items'] as $value) :?>
        <div class="contact-info">
          <div class="contact-icon">
            <i class="<?php _e( $value['info_icon_class'] )?>"></i>
          </div>
          <div>
            <h2><?php _e( $value['info_title'] );?></h2>
            <p><?php _e( $value['info_desc'] );?></p>
          </div>
        </div>
		  <?php endforeach;?>
    </div>
    </div>
  </div>
</div>

<style>
.contact-widget{
  position: relative;
  height: 100vh;
}
.contact-widget .bg-contact{
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  width: 100%;
  height: 100%;
  color: #fff;
  top: 0;
  left: 0;
  position: absolute;
  display: block;
}
.contact-widget .overlay{
  background: transparent linear-gradient(90deg, #FFFFFF00 0%, #FFFFFFD6 45%, #FFFFFF 100%) 0% 0% no-repeat;
  opacity: 0.99;
  position: absolute;
  top: 0;
  right: 0;
  width: 80%;
  height: 100%;
}
.contact-widget h1{
  font-size: 64px;
  color: #fff;
}

.contact-widget .container{ padding-top: 150px; }

.contact-widget .contact-info{
  color: #2E4857;
  margin-bottom: 40px;
  display: grid;
  grid-template-columns: 60px 1fr;
  grid-gap: 30px;
}

.contact-widget .contact-info h2{ margin-top: 0; font-size: 35px; }

.contact-widget .contact-info p{
  color: #707070;
}

.contact-widget .contact-details{
  position: absolute;
  top: 30%;
}
.contact-widget .contact-icon{display: inline-block; margin-bottom: 10px;}
.contact-widget .contact-icon i{
  font-size: 60px;
}


@media(max-width: 768px){
  .contact-widget{
    height: auto;
  }
  .contact-widget .bg-contact{
    margin-left: -15px;
    width: calc(100% + 30px);
    height: 450px;
    position: relative;
  }
  .contact-widget .overlay{ display: none; }
  .contact-widget .container{ padding-top: 0px; }
  .contact-widget h1{
    color: #707070;
    text-align: center;
    margin-top: 40px;
    margin-bottom: 40px;
    font-size: 51px;
  }
  .contact-widget .contact-info{
    display: block;
  }
  .contact-widget .contact-info h2{
    font-size: 28px;
  }
}
</style>
