<?php

/* Social footer */

$content = '
<div class="b-footer-column g-fright">
<div class="footer_asset footer_social_networking_asset" data-content-asset-id="footer-social-networking-asset">
<div class=" content_asset footer-social-networking-asset ">
<a class="l-cta-socialBtn-large" href="javascript:if(confirm(%27https://www.facebook.com/urbandecaycosmetics  \n\nThis file was not retrieved by Teleport Pro, because it is addressed using an unsupported protocol (e.g., gopher).  \n\nDo you want to open it from the server?%27))window.location=%27https://www.facebook.com/urbandecaycosmetics%27" tppabs="https://www.facebook.com/urbandecaycosmetics" data-trackingtext="Facebook" target="_blank">
	<span class="icon-social-facebook"></span>
</a>
<a class="l-cta-socialBtn-large" href="javascript:if(confirm(%27http://www.youtube.com/user/UrbanDecayYT  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.youtube.com/user/UrbanDecayYT%27" tppabs="http://www.youtube.com/user/UrbanDecayYT" data-trackingtext="Youtube" target="_blank">
	<span class="icon-social-youtube"></span>
</a>
<a class="l-cta-socialBtn-large" href="javascript:if(confirm(%27https://twitter.com/urbandecay  \n\nThis file was not retrieved by Teleport Pro, because it is addressed using an unsupported protocol (e.g., gopher).  \n\nDo you want to open it from the server?%27))window.location=%27https://twitter.com/urbandecay%27" tppabs="https://twitter.com/urbandecay" data-trackingtext="Twitter" target="_blank">
	<span class="icon-social-twitter"></span>
</a>
<a class="l-cta-socialBtn-large" href="javascript:if(confirm(%27http://instagram.com/urbandecaycosmetics  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://instagram.com/urbandecaycosmetics#%27" tppabs="http://instagram.com/urbandecaycosmetics#" data-trackingtext="Instagram" target="_blank">
	<span class="icon-social-instagram"></span>
</a>
<a class="l-cta-socialBtn-large" href="javascript:if(confirm(%27http://www.pinterest.com/urbandecay/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.pinterest.com/urbandecay/%27" tppabs="http://www.pinterest.com/urbandecay/" data-trackingtext="Pinterest" target="_blank">
	<span class="icon-social-pinterest"></span>
</a>
<a class="l-cta-socialBtn-large" href="javascript:if(confirm(%27https://plus.google.com/+urbandecay/posts  \n\nThis file was not retrieved by Teleport Pro, because it is addressed using an unsupported protocol (e.g., gopher).  \n\nDo you want to open it from the server?%27))window.location=%27https://plus.google.com/+urbandecay/posts%27" tppabs="https://plus.google.com/+urbandecay/posts" data-trackingtext="GooglePlus" target="_blank">
	<span class="icon-social-googleplus"></span>
</a>
</div>
</div>
</div>
';

$cmsBlock = array(
    'title'         => 'Footer Social',
    'identifier'    => 'footer_social',
    'content'       => $content,
    'is_active'     => 1,
    'stores'        => 0
);

Mage::getModel('cms/block')->setData($cmsBlock)->save();