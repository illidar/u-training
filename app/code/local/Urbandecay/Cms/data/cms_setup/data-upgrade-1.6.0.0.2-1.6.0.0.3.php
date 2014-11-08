<?php

/**
 * Insert footer first links block
 */
$content = '
    <ul>
    <li><a href="{{store direct_url="about-magento-demo-store"}}">Contact Us</a></li>
    <li><a href="#">FAQs</a></li>
    <li><a href="#">Check Order Status</a></li>
    <li><a href="{{store direct_url="returns"}}">Returns</a></li>
    <li><a href="#">Shipping Info</a></li>
    <li><a href="#">E-Gift Cards</a></li>
    </ul>
    ';

$cmsBlock = array(
    'title'         => 'Footer Links First',
    'identifier'    => 'footer_links_first',
    'content'       => $content,
    'is_active'     => 1,
    'stores'        => 0
);

Mage::getModel('cms/block')->setData($cmsBlock)->save();
