<?php
  $contact_image = get_stylesheet_directory_uri().'/assets/images/contact.png';
  $data = array(
    'info-1'    => array(
      'h2'    =>  'Discuss your brand:',
      'h4'    =>  'CHAT@HUMANFACTORMEDIA.CO',
      'icon'  =>  'fa fa-envelope'
    ),
    'info-2'  => array(
      'h2'  =>  'Apply for Podcast',
      'h4'  =>  'WAYF@HUMANFACTORMEDIA.CO',
      'icon'=>  'fa fa-podcast'
    ),
    'info-3'  => array(
      'h2'  =>  'Call Us',
      'h4'  =>  '(971) 727 - 4294',
      'icon'=>  'fa fa-phone'
    ),
    'info-4'  => array(
      'h2'  =>  'Find Us',
      'h4'  =>  '79 MADISON AVE. 3RD FL NEW YORK, NY 10016',
      'icon'  =>  'fa fa-map-marker'
    ),
  );
?>
<div class="container-fluid contact-widget">
  <div class="bg-contact" style="background-image: url(<?php _e( $contact_image );?>);"></div>
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-6 pull-left col-xs-12">
        <h1>Get in Touch</h1>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <?php foreach( $data as $key => $value):?>
        <div class="contact-info">
          <div class="contact-icon">
            <i class="<?php echo $value['icon']?>"></i>
          </div>
          <div>
            <h2><?php echo $value['h2']?></h2>
            <p><?php echo $value['h4']?></p>
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
