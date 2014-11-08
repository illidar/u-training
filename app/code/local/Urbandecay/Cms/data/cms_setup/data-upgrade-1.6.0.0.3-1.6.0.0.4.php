<?php

/**
 * Insert footer social links block
 */
$content = '
    <p>
    <a href="#"><img src="{{media url="wysiwyg/facebook.png"}}" alt="facebook" width="35" height="35" /></a>&nbsp; &nbsp;
    <a href="#"><img src="{{media url="wysiwyg/youtube.png"}}" alt="youtube" width="36" height="35" /></a>&nbsp; &nbsp;
    <a href="#"><img src="{{media url="wysiwyg/twitter.png"}}" alt="twitter" width="34" height="35" /></a>&nbsp; &nbsp;
    <a href="#"><img src="{{media url="wysiwyg/instagram.png"}}" alt="inst" width="36" height="35" /></a>&nbsp; &nbsp;
    <a href="#"><img src="{{media url="wysiwyg/p.png"}}" alt="p" width="36" height="35" /></a>&nbsp; &nbsp;
    <a href="#"><img src="{{media url="wysiwyg/gplus.png"}}" alt="gplus" width="34" height="35" /></a>
    </p>
    ';

$cmsBlock = array(
    'title'         => 'Social Block Footer',
    'identifier'    => 'social_block_footer',
    'content'       => $content,
    'is_active'     => 1,
    'stores'        => 0
);

Mage::getModel('cms/block')->setData($cmsBlock)->save();

/**
 * Insert footer second links block
 */
$content = '
    <ul>
    <li><a href="#">UD Pro</a></li>
    <li><a href="#">Offers</a></li>
    <li><a href="#">Jobs</a></li>
    <li><a href="{{store direct_url="privacy-policy-cookie-restriction-mode"}}">Privacy</a></li>
    <li><a href="#">Terms of Use</a></li>
    <li><a href="#">Sitemap</a></li>
    </ul>
    ';

$cmsBlock = array(
    'title'         => 'Footer Links Second',
    'identifier'    => 'footer_links_second',
    'content'       => $content,
    'is_active'     => 1,
    'stores'        => 0
);

Mage::getModel('cms/block')->setData($cmsBlock)->save();
