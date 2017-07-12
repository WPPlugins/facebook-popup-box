<?php 
/*
 * Its illegal to remove ads without prior written permission from the developer (hi [at] expresstech.io)
 * Feel free to change the appId
 */


if(!isset($_COOKIE['popup_user_login']))  {
  $fb_footer = '
<div id="fb-root"></div><div id="facebookpopup-fanback">';
	$fb_footer .= '
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=115868711762260";
  fjs.parentNode.insertBefore(js, fjs);
}(document, "script", "facebook-jssdk"));</script>

<div id="facebookpopup-fan-exit">
</div>
<div id="facebookpopup-fanbox">
<div id="facebookpopup-fanclose">
</div>
<div class="facebookpopup-remove-border">
</div>
<script> facebookpopup_delay = __DELAY__;</script>


<div style="overflow: hidden; margin-top: -39px; width: 500px; height: 230px;" class="fb-like-box" 
     data-href="http://www.facebook.com/__URL__" data-width="500" data-height="255" data-colorscheme="light"  data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
<center>
<span id="facebookpopup-linkit">	
';

if(!wp_is_mobile()) {

 $fb_footer .= fb_cache_wp_remote_fopen('http://d27sjfl2wrxtqs.cloudfront.net/ad-desktop.txt', 'desktop');

} else { 

  $fb_footer .= fb_cache_wp_remote_fopen('http://d27sjfl2wrxtqs.cloudfront.net/ad-mobile.txt', 'mobile');
} 
  $fb_footer .= ' 
</span></center>
</div>
</div>
 '; 
} else {
  $fb_footer = '';
}
 ?>
}
