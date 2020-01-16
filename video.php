<div class="vimeo-wrapper-container">
  <div class="vimeo-wrapper">
    <iframe src="https://player.vimeo.com/video/<?php _e( $atts['video_id'] );?>?background=1&autoplay=1&loop=1&byline=0&title=0"
           frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  </div>
</div>

<style>
.vimeo-wrapper-container{
  position: relative;
  width: 100%;
  height: 90vh;
  overflow: hidden;
}
.vimeo-wrapper {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;

  pointer-events: none;

}
.vimeo-wrapper iframe {

  width: 100vw;
  height: 56.25vw; /* Given a 16:9 aspect ratio, 9/16*100 = 56.25 */
  min-height: 100vh;
  min-width: 177.77vh; /* Given a 16:9 aspect ratio, 16/9*100 = 177.77 */
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

/*Home Page Vimeo Video*/
@media(max-width:768px){
  .vimeo-wrapper-container{ height: 529px; }
}
</style>
