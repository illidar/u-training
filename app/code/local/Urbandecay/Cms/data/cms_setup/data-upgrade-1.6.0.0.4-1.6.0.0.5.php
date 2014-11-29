<?php

/* About Us Footer */

$content = '
   <h3 id="about_us">About Us</h3>
<p>Urban Decay is beauty with an edge. Feminine, dangerous and fun, it appeals to women who relish their individuality and dare to express it. From our insane range of velvety Eyeshadows&mdash;including the bestselling (and often-copied) Naked Palettes&mdash;to our award-winning eye liners, budge-proof mascaras and legendary Makeup Setting Sprays, we\'ve been shaking up the industry for over 15 years. <a title="Read more" href="{{store direct_url="about-urbandecay"}}">More</a></p>
    ';

$cmsBlock = array(
    'title'         => 'About Us Footer',
    'identifier'    => 'about_us_footer',
    'content'       => $content,
    'is_active'     => 1,
    'stores'        => 0
);

Mage::getModel('cms/block')->setData($cmsBlock)->save();

/* Customer Service (left) */

$content = '
    <h3 class="b-widget-title">Customer Service</h3>
    <p class="b-widget-info">&nbsp; &nbsp; &nbsp; <a href="tel:+18007848722">1.800.784.8722</a></p>
    <p class="b-widget-info">Mon - Fri: 7am - 5pm, PST (Excluding holidays)</p>
    ';

$cmsBlock = array(
    'title'         => 'Customer Service',
    'identifier'    => 'customer_service',
    'content'       => $content,
    'is_active'     => 1,
    'stores'        => 0
);

Mage::getModel('cms/block')->setData($cmsBlock)->save();

/* Left Links (for CMS Pages) */

$content = '
    <div class="secondary">
<div class="help_info_block" data-content-asset-id="help-info-block">
<div class=" content_asset udpro-left-navigation ">
<div class="l-menu_static">
<ul class="b-menu_static">
<li class="b-menu_static-item"><a class="b-menu_static-link" href="{{store url=\'about-urbandecay\'}}">About Us</a></li>
<li class="b-menu_static-item"><a class="b-menu_static-link" href="{{store url=\'our_commitments\'}}">Our Commitments</a></li>
<li class="b-menu_static-item"><a class="b-menu_static-link" href="{{store direct_url="contacts"}}">CONTACT US</a></li>
<li class="b-menu_static-item"><a class="b-menu_static-link" href="{{store direct_url="faqs"}}">FAQS</a></li>
</ul>
<ul class="b-menu_static">
<li class="b-menu_static-item"><a class="b-menu_static-link" href="#">CHECK ORDER STATUS</a></li>
<li class="b-menu_static-item"><a class="b-menu_static-link" href="{{store url=\'returns\'}}">RETURNS</a></li>
<li class="b-menu_static-item"><a class="b-menu_static-link" href="#">SHIPPING INFO</a></li>
<li class="b-menu_static-item"><a class="b-menu_static-link" href="{{store url=\'e_gift_cards\'}}">E-GIFT CARDS</a></li>
</ul>
<ul class="b-menu_static">
<li class="b-menu_static-item"><a class="b-menu_static-link" href="#">UD PRO</a></li>
<li class="b-menu_static-item"><a class="b-menu_static-link" href="#">UD PRO APPROVED SCHOOLS</a></li>
</ul>
<ul class="b-menu_static">
<li class="b-menu_static-item"><a class="b-menu_static-link" href="#">OFFERS</a></li>
<li class="b-menu_static-item"><a class="b-menu_static-link" href="#">JOBS</a></li>
<li class="b-menu_static-item"><a class="b-menu_static-link" href="#">PRIVACY</a></li>
<li class="b-menu_static-item"><a class="b-menu_static-link" href="#">TERMS OF USE</a></li>
<li class="b-menu_static-item"><a class="b-menu_static-link" href="#">SITEMAP</a></li>
</ul>
</div>
</div>
</div>
</div>
    ';

$cmsBlock = array(
    'title'         => 'Left Links',
    'identifier'    => 'cms_left_nav',
    'content'       => $content,
    'is_active'     => 1,
    'stores'        => 0
);

Mage::getModel('cms/block')->setData($cmsBlock)->save();

/* Customer Service Bottom Banner */

$content = '
    <div class="b-customer_service-item">
<div class=" content_asset login-customer-service ">
<div class="b-widget">
<h3 class="b-widget-title">Customer Service</h3>
<p class="b-widget-info">Got questions? We\'ve got answers!</p>
<ul class="b-widget-list">
<li class="b-widget-list_item"><a href="tel:+18007848722">1.800.784.8722</a></li>
</ul>
<p class="b-widget-info">Mon - Fri: 7am - 5pm, PST (Excluding holidays)</p>
</div>
</div>
</div>
    ';

$cmsBlock = array(
    'title'         => 'Customer Service Bottom',
    'identifier'    => 'customer_service_bottom',
    'content'       => $content,
    'is_active'     => 1,
    'stores'        => 0
);

Mage::getModel('cms/block')->setData($cmsBlock)->save();

/* Live Chat Bottom Banner */

$content = '
    <div class="b-customer_service-item">
<div class=" content_asset login-live-chat ">
<div class="b-widget">
<h3 class="b-widget-title">Live Chat</h3>
<p class="b-widget-info">Our Beauty Advisors are ready to answer your questions.</p>
<p class="b-widget-info">Mon - Fri: 7am - 4pm, PST (Excluding holidays)</p>
</div>
</div>
</div>
    ';

$cmsBlock = array(
    'title'         => 'Live Chat Bottom',
    'identifier'    => 'live_chat_bottom',
    'content'       => $content,
    'is_active'     => 1,
    'stores'        => 0
);

Mage::getModel('cms/block')->setData($cmsBlock)->save();

/* FAQS Bottom Banner */

$content = '
    <div class="b-customer_service-item">
<div class=" content_asset login-faqs ">
<div class="b-widget">
<h3 class="b-widget-title">FAQs</h3>
<p class="b-widget-info">Check out our <a href="#">FAQ section</a> to see if we&rsquo;ve covered your question.</p>
</div>
</div>
</div>
    ';

$cmsBlock = array(
    'title'         => 'FAQS Bottom',
    'identifier'    => 'faqs_bottom',
    'content'       => $content,
    'is_active'     => 1,
    'stores'        => 0
);

Mage::getModel('cms/block')->setData($cmsBlock)->save();

/* Footer Logos */

$content = '
    <div class="footer_bottom_logos_wrapper">
<div id="footer_bottom_logo1" class="bt_logo"><img src="{{media url="wysiwyg/logo_footer_1.png"}}" alt="" /></div>
<div id="footer_bottom_logo2" class="bt_logo"><img src="{{media url="wysiwyg/logo_footer_2.png"}}" alt="" /></div>
<div id="footer_bottom_logo3" class="bt_logo"><img src="{{media url="wysiwyg/logo_footer_3.png"}}" alt="" /></div>
<div id="footer_bottom_logo4" class="bt_logo"><img src="{{media url="wysiwyg/logo_footer_4.png"}}" alt="" /></div>
</div>
    ';

$cmsBlock = array(
    'title'         => 'Footer Logos',
    'identifier'    => 'footer_logos',
    'content'       => $content,
    'is_active'     => 1,
    'stores'        => 0
);

Mage::getModel('cms/block')->setData($cmsBlock)->save();

/* Social Sign In logos */

$content = '
<div class="footer_bottom_logos_wrapper">
        <a href="#">
            <div class="bt_logo" id="footer_bottom_logo1"><img src="{{media url="wysiwyg/logo_footer_1.png"}}" alt="" /></div>
            <div class="bt_logo" id="footer_bottom_logo2"><img src="{{media url="wysiwyg/logo_footer_2.png"}}" alt="" /></div>
            <div class="bt_logo" id="footer_bottom_logo3"><img src="{{media url="wysiwyg/logo_footer_3.png"}}" alt="" /></div>
            <div class="bt_logo" id="footer_bottom_logo4"><img src="{{media url="wysiwyg/logo_footer_4.png"}}" alt="" /></div>
        </a>
    </div>
    ';

$cmsBlock = array(
    'title'         => 'Social Sign In logos',
    'identifier'    => 'social_sign_in_logos',
    'content'       => $content,
    'is_active'     => 1,
    'stores'        => 0
);

Mage::getModel('cms/block')->setData($cmsBlock)->save();

/* CMS Page About Us */

$pageContent = <<<EOD
<div class="cms-page-left-nav">{{block type="cms/block" block_id="cms_left_nav"}}</div>
<div class="cms-page-content">
<div class="cms-page-title">ABOUT US</div>
<p class="t-text-14">Our story opens nearly 20 years ago, when pink, red and beige enslaved the prestige beauty market. Heaven forbid you wanted purple or green nails, because you'd either have to whip out a marker, or risk life and limb with that back alley drugstore junk. Flying in the face of this monopoly, Sandy Lerner (cofounder of Cisco Systems) made a bold decision: if the cosmetic industry&rsquo;s &ldquo;big boys&rdquo; couldn't satisfy her alternative makeup tastes, she'd satisfy them herself.</p>
<p class="t-text-14">Fatefully, Sandy's business manager, David Soward, introduced her to fellow visionary Wende Zomnir. A creative businesswoman (and makeup addict almost since birth), Wende also recognized the color void and determined a shake-up was in order. Over high tea, the two forged a pact that led to renegade nail polish mixing sessions in Wende's Laguna Beach bungalow. Sandy, David and Wende unleashed Urban Decay in January of 1996 with a line of 10 lipsticks and 12 nail enamels. Inspired by seedier facets of the urban landscape, they bore groundbreaking names like Roach, Smog, Rust, Oil Slick and Acid Rain. The first magazine ad queried &ldquo;Does Pink Make You Puke?,&rdquo; fueling the revolution as cosmetics industry executives scrambled to keep up.</p>
<p class="t-text-14">Today, Wende steers Urban Decay's ongoing growth as Chief Creative Officer along with Tim Warner, Chief Executive Officer. Tim (aka &ldquo;The Zen Master&rdquo;) perfectly counterpoints the frenzy of activity in the office with his quiet, penetrating approach to running a beauty business. And although they push the teams at headquarters and on the sales floor to new heights, they do occasionally still leave time for old school UD pranks and hijinks.</p>
<p class="t-text-14">Our ever-expanding global presence proves what Wende and Sandy always knew&mdash;makeup wearers everywhere crave alternatives, hence our longevity well past the death of '90s grunge. In the U.S., hundreds of UD products now fill purple shelves at Sephora, Ulta and Macy's, as well as the virtual pages of beauty.com. Growing numbers of retailers in Canada, the UK, France, Italy, Spain, Singapore and the Middle East stock our line too. And although UD fans around the world might approach our products in wildly different ways, we've noticed they share an independent spirit that unites them.</p>
<p class="t-text-14">Maybe this hunger for something unique explains the passionate support we've received over the years. Urban Decay products appear in dozens of magazines every month. We've even stolen prestigious packaging awards out from under brands like Avon and Revlon. And we would surely have failed by now were it not for the support of makeup artists who share our love of innovative performance products AND experimental color. We love to field their daily requests&mdash;usually because a celebrity client has stolen their favorite product. Our online reviews are off the charts; if we don't get five stars, we just about cry. Thankfully, makeup junkies review our products more often and with more fervor than many of our competitors&mdash;you should see the comments for Eyeshadow Primer Potion! UD's Facebook and Twitter communities are some of the biggest in the industry&mdash;we're large in numbers and heavy on conversation. And we love our blogger friends! They're like beauty editors, rabid cosmetics fans and makeup artists all in one. We do movies, TV shows and hot parties. Our lives are pretty great, and we're fully aware that a million girls (and guys) would die for our jobs.</p>
<p class="t-text-14">Our moms are proud. &ldquo;Urban Decay&rdquo; is no longer such a crazy name for a makeup company. And young women today have never known a world where they couldn't get purple nail polish over the counter. Mission accomplished.</p>
</div>
<div class="bottom-banners">{{block type="cms/block" block_id="customer_service_bottom"}} {{block type="cms/block" block_id="live_chat_bottom"}} {{block type="cms/block" block_id="faqs_bottom"}}</div>
EOD;

$PageData = array(
    'title'           => 'About Us | Urban Decay',
    'content_heading' => 'About Us | Urban Decay',
    'root_template'   => 'one_column',
    'identifier'      => 'about-urbandecay',
    'content'         => $pageContent,
    'is_active'       => 1,
    'stores'          => array(0),
    'sort_order'      => 0
);

Mage::getModel('cms/page')->setData($PageData)->save();

/* CMS Page Our Commitments */

$pageContent = <<<EOD
<div class="cms-page-left-nav">{{block type="cms/block" block_id="cms_left_nav"}}</div>
<div class="cms-page-content">
<div class="cms-page-title">COMMITMENTS</div>
<div class="staticpage-contentblock">
<h2 class="t-subtitle-24">GLOBAL WOMEN'S RIGHTS AWARDS</h2>
<p class="t-text-14">Urban Decay is committed to celebrating the accomplishments of women around the world through The Global Women's Rights Awards. The awards are given annually to a select few individuals who have contributed significantly&mdash;often against great odds and at great personal risk&mdash;to advance the rights of women and girls and to increase awareness of the injustices women face on account of their gender.</p>
</div>
<div class="staticpage-contentblock">
<h2 class="t-subtitle-24">ANIMAL TESTING POLICY</h2>
<p class="t-text-14">Urban Decay is a cruelty-free brand and is committed to ending animal testing. We do not test our products on animals, nor do we allow others to test on our behalf. Additionally, we require our suppliers to certify that the raw materials used in the manufacture of our products are not tested on animals. Our Brand is certified by both PETA and The Leaping Bunny Program (CCIC) as cruelty-free.</p>
</div>
<div class="staticpage-contentblock">
<h2 class="t-subtitle-24">VEGAN PRODUCTS</h2>
<p class="t-text-14">Urban Decay certifies that our products marked vegan do not contain any animal-derived ingredients. Please note that within a product category, such as Eyeshadows, some shades will be marked as vegan, and others will not. We have an ongoing initiative with our laboratories to not only create shades (and entire product lines) that are vegan from the start, but also to identify which of our non-vegan products can be converted. In many situations, plant-derived or synthetic alternatives to animal-derived ingredients become available. As long as we can deliver the same high-quality products with rich color and texture, we will convert that product to 100% vegan ingredients, so be on the lookout for new offerings.</p>
</div>
</div>
<div class="bottom-banners">{{block type="cms/block" block_id="customer_service_bottom"}} {{block type="cms/block" block_id="live_chat_bottom"}} {{block type="cms/block" block_id="faqs_bottom"}}</div>
EOD;

$PageData = array(
    'title'           => 'Our Commitments',
    'content_heading' => 'Our Commitments',
    'root_template'   => 'one_column',
    'identifier'      => 'our_commitments',
    'content'         => $pageContent,
    'is_active'       => 1,
    'stores'          => array(0),
    'sort_order'      => 0
);

Mage::getModel('cms/page')->setData($PageData)->save();

/* CMS Page Returns */

$pageContent = <<<EOD
<div class="cms-page-left-nav">{{block type="cms/block" block_id="cms_left_nav"}}</div>
<div class="cms-page-content">
<div class="cms-page-title">LOVE-IT-OR-LEAVE-IT-GUARANTEE</div>
<div class="staticpage-contentblock">
<p class="t-text-14">With our Love-It-or-Leave-It Guarantee, you can return an item for FREE if you're not completely satisfied. Please note that this guarantee only applies to products purchased on UrbanDecay.com. Sale items are not eligible for return. At present, UrbanDecay.com only ships within the United States.</p>
<p class="t-text-14">Please note that although we have tried to represent our shades as accurately as possible, the actual colors you see will depend on your monitor.</p>
</div>
<div class="staticpage-contentblock">
<h2 class="t-subtitle-24">FREE RETURNS</h2>
<p class="t-text-14">UrbanDecay.com now offers free returns, making our Love-It-or-Leave-It Guarantee even sweeter for you!</p>
</div>
<div class="staticpage-contentblock">
<h3 class="t-title-16">UNDER 45 DAYS</h3>
<p class="t-text-14">If you&rsquo;re not happy with an item you purchased, you have up to 45 days (from the shipment date) to return it. Sale items are not eligible for return. All returns are credited in the original form of payment.</p>
</div>
<div class="staticpage-contentblock">
<h3 class="t-title-16">OVER 45 DAYS</h3>
<p class="t-text-14">Returns received within 46 to 90 days after the shipment date will be refunded in the form of an Urban Decay E-Gift Card, which can be used anytime at UrbanDecay.com.</p>
</div>
<div class="staticpage-contentblock">
<h3 class="t-title-16">OVER 90 DAYS</h3>
<p class="t-text-14">Returns received more than 90 days after the shipment date will not be processed.</p>
</div>
<div class="staticpage-contentblock">
<h3 class="t-title-16">GIFT WITH PURCHASE RETURNS</h3>
<p class="t-text-14">If you received a FREE product or FREE gift with your purchase, it must be included with your in order to be refunded in the original form of payment. Urban Decay store credit will be issued on a return not accompanied by the FREE product or FREE gift.</p>
</div>
<div class="staticpage-contentblock">
<h3 class="t-title-16">DEFECTIVE/INCORRECT ITEMS</h3>
<p class="t-text-14">Please call Customer Service toll-free at 1-800-784-8722, Monday through Friday, 7:00 AM to 5:00 PM Pacific Time, excluding holidays to schedule a replacement.</p>
</div>
<div class="staticpage-contentblock">
<h2 class="t-subtitle-24">FREE RETURN PROCESS</h2>
<p class="t-text-14">To return merchandise to UrbanDecay.com, please follow these easy steps:</p>
</div>
<div class="staticpage-contentblock">
<h3 class="t-title-16">STEP ONE</h3>
<p class="t-text-14">Please fill out the Return Merchandise section on the back of the invoice (enclosed in your original  order) and place it inside the return package.</p>
</div>
<div class="staticpage-contentblock">
<h3 class="t-title-16">STEP TWO</h3>
<p class="t-text-14">Affix the return label provided on your packing slip to the outside of the return package.</p>
<p class="t-text-14">If the label is not available, please contact Customer Service toll free at 1-800-784-8722, Monday through Friday, 7:00 AM to 5:00 PM Pacific Time, excluding holidays, or click&nbsp;<a href="https://www.urbandecay.com/contact-us"><strong>here</strong></a>&nbsp;to contact us.</p>
</div>
<div class="staticpage-contentblock">
<h3 class="t-title-16">STEP THREE</h3>
<p class="t-text-14">Make a copy of the completed invoice and UPS tracking number for your records.</p>
</div>
<div class="staticpage-contentblock">
<h3 class="t-title-16">STEP FOUR</h3>
<p class="t-text-14">Your return shipping via UPS will take 3 to 5 business days to arrive at our facility. Upon receipt, it will be processed within 1 to 2 business days. Depending on your financial institution, it can take 5 to 7 business days to post to your account.</p>
<p class="t-text-14">Please note: Only products purchased on UrbanDecay.com may be returned for a refund.</p>
</div>
<div class="staticpage-contentblock">
<h2 class="t-subtitle-24">ITEMS PURCHASED AT RETAIL</h2>
<p class="t-text-14">We are sorry, but we cannot accept merchandise purchased at a retail location. At Urban Decay we respect our partnerships with our trusted retailers and aim to create policies that are beneficial to the customer, the retailer and Urban Decay. Due to this, all items purchased through our retail partners must be returned to the retailer from which the product was purchased in accordance with their return policies.</p>
<p class="t-text-14">If you have questions, please contact Customer Service toll-free at 1-800-784-8722, Monday through Friday, 7:00 AM to 5:00 PM Pacific Time, excluding holidays, or click&nbsp;<a href="https://www.urbandecay.com/contact-us"><strong>here</strong></a>&nbsp;to contact us.</p>
</div>
<div class="staticpage-contentblock">
<h2 class="t-subtitle-24">EXCHANGES</h2>
<p class="t-text-14">At this time UrbanDecay.com does not offer exchanges, except in the case of damaged or defective products.</p>
</div>
</div>
<div class="bottom-banners">{{block type="cms/block" block_id="customer_service_bottom"}} {{block type="cms/block" block_id="live_chat_bottom"}} {{block type="cms/block" block_id="faqs_bottom"}}</div>
EOD;

$PageData = array(
    'title'           => 'Returns',
    'content_heading' => 'Returns',
    'root_template'   => 'one_column',
    'identifier'      => 'returns',
    'content'         => $pageContent,
    'is_active'       => 1,
    'stores'          => array(0),
    'sort_order'      => 0
);

Mage::getModel('cms/page')->setData($PageData)->save();

/* CMS Page E-Gift Cards */

$pageContent = <<<EOD
<div class="cms-page-left-nav">{{block type="cms/block" block_id="cms_left_nav"}}</div>
<div class="cms-page-content">
<div class="cms-page-title">E-Gift Cards</div>
<div class="staticpage-contentblock">
<h2 class="t-subtitle-24">PURCHASE</h2>
<ol>
<li>Click on the E-Gift Card link located on our homepage or <a href="https://www.urbandecay.com/egiftcertificate"><strong>here</strong></a>.</li>
<li>Enter your name and the recipient's name in the designated field.</li>
<li>Enter the recipient's email address. Be sure to type in the correct email address because once the order is submitted nothing can be changed.</li>
<li>Confirm recipient's email address.</li>
<li>If you would like to include a personalized message, enter it in the specified box</li>
<li>Select the amount you would like to put on the E-Gift Card.</li>
<li>Click "Add to Bag" to complete your purchase.</li>
<li>If you'd like to order another E-Gift Card repeat steps 1-7 until you have entered all the E-Gift Cards you wish to purchase.</li>
<li>When payment is received, a confirmation email will be sent to the purchaser. A separate series of emails will be sent to each recipient that contains a gift card number and instructions on how to use the card.</li>
</ol></div>
<div class="staticpage-contentblock">
<h2 class="t-subtitle-24">REDEEM</h2>
<ol>
<li>Please select the items you wish to purchase on <a href="https://www.urbandecay.com/on/demandware.store/Sites-urbandecay-us-Site/default/Home-Show"><strong>urbandecay.com</strong></a> and add them to your shopping cart.</li>
<li>Once you've finished shopping, proceed to the Checkout.</li>
<li>On the billing page, enter your E-Gift Card number and PIN (received in a separate email) in the corresponding fields and hit the "Apply" button.</li>
</ol>
<p class="t-text-14">Note: Any unused balance will remain on your E-Gift Card until you choose to use it. You cannot add funds to an existing E-Gift Card at this time.</p>
</div>
<div class="staticpage-contentblock">
<h2 class="t-subtitle-24">CHECK BALANCE</h2>
<ol>
<li>Click on the E-Gift Card link located on our homepage or <a href="https://www.urbandecay.com/egiftcertificate"><strong>here</strong></a>.</li>
<li>Enter your E-Gift Card number and PIN in the designated fields and click "Check Balance". Make sure you enter the E-Gift Card number and PIN that was emailed to you upon its activation on our site.</li>
</ol></div>
<div class="staticpage-contentblock">
<h2 class="t-subtitle-24">TERMS &amp; CONDITIONS</h2>
<p class="t-text-14">Urban Decay E-Gift Cards can only be purchased and redeemed at <a href="https://www.urbandecay.com/on/demandware.store/Sites-urbandecay-us-Site/default/Home-Show"><strong>urbandecay.com</strong></a>. We're sorry, but E-Gift Cards can't be purchased or used in an Urban Decay store.</p>
<p class="t-text-14">An Urban Decay E-Gift Card number is only valid after the recipient logs on to our website and activates it.</p>
<p class="t-text-14">Promotional offers cannot be applied toward the purchase of an Urban Decay E-Gift Card.</p>
<p class="t-text-14">The total value of the E-Gift Card will be applied against the total order amount including sales tax and shipping charges.</p>
<p class="t-text-14">If the amount of your E-Gift Card is less than the total order amount, please use a valid credit card to pay for the remainder of the purchase.</p>
<p class="t-text-14">If the amount of your E-Gift Card is more than the total order amount, the remaining balance will be stored for use on your next purchase. Be sure to hold onto your E-Gift Card number for future purchases.</p>
<p class="t-text-14">If a refund is requested on an item purchased with an Urban Decay E-Gift Card, the refunded amount will be applied as store credit to your account.</p>
<p class="t-text-14">E-Gift Cards are non-transferable, non-refundable and are not redeemable for cash.</p>
<p class="t-text-14">Urban Decay cannot replace lost or stolen E-Gift Cards.</p>
<p class="t-text-14">E-Gift Cards cannot be used to purchase other E-Gift Cards.</p>
<p class="t-text-14">E-Gift Cards and their use on our website are subject to our general terms and conditions.</p>
<p class="t-text-14">No sales tax is charged for the purchase of an E-Gift Card; however, purchases paid for with an E-Gift Card will be charged applicable sales tax.</p>
<p class="t-text-14">Urban Decay currently ships only within the United States; therefore, you must have a valid U.S. shipping address in order to redeem an Urban Decay E-Gift Card.</p>
<p class="t-text-14">Urban Decay reserves the right to change these terms and conditions from time to time at its discretion.</p>
<p class="t-text-14">If you have any questions or concerns about your return or exchange, please give us a call toll-free at 800-784-8722, Monday through Friday, 7:00 AM to 5:00 PM Pacific Time, excluding holidays, or <a href="mailto:customerservice@support.urbandecay.com"><strong>click here to contact us</strong></a>, which will be answered within 24 hours, excluding weekends.</p>
</div>
<div class="staticpage-contentblock">
<h2 class="t-subtitle-24">FAQS</h2>
<p class="t-text-14"><strong>Can I use an E-Gift Card in an Urban Decay store?</strong></p>
<p class="t-text-14">We're sorry, but E-Gift Cards can only be used at <a href="https://www.urbandecay.com/on/demandware.store/Sites-urbandecay-us-Site/default/Home-Show"><strong>urbandecay.com</strong></a>.</p>
<p class="t-text-14"><strong>Can I use an Urban Decay store gift card at <a href="https://www.urbandecay.com/on/demandware.store/Sites-urbandecay-us-Site/default/Home-Show"><strong>urbandecay.com</strong></a>?</strong></p>
<p class="t-text-14">At this time, Urban Decay store gift cards can only be used in an Urban Decay store.</p>
<p class="t-text-14"><strong>Can I add to the balance remaining on my E-Gift Card?</strong></p>
<p class="t-text-14">We're sorry, but at this time you cannot add to an existing E-Gift Card.</p>
<p class="t-text-14"><strong>What happens if I accidentally delete the email that contained my E-Gift Card?</strong></p>
<p class="t-text-14">Give us a call at 800-784-8722 or <a href="mailto:customerservice@support.urbandecay.com"><strong>click here to contact us</strong></a>, and we'll resend the email.</p>
<p class="t-text-14"><strong>How can I be sure that the E-Gift Cards I ordered was received?</strong></p>
<p class="t-text-14">To be certain an E-Gift Card was received, please check with the recipient. Most E-Gift Cards will be emailed successfully within 4 hours of your order or on the date of purchase. However, as with all email, any number of factors could prevent an E-Gift Card from being delivered to a recipient's inbox. A full inbox, an invalid email address or a spam filter can all prevent an E-Gift Card from reaching its intended recipient.</p>
<p class="t-text-14"><strong>How can I check the balance on my E-Gift Card?</strong></p>
<p class="t-text-14">You can check your balance online anytime at <a href="https://www.urbandecay.com/on/demandware.store/Sites-urbandecay-us-Site/default/Home-Show"><strong>urbandecay.com</strong></a>. Just look for the Check Balance button on our E-Gift Card page. Enter your E-Gift Card number and PIN and your remaining balance will be displayed.</p>
<p class="t-text-14"><strong>Do E-Gift Cards ever expire?</strong></p>
<p class="t-text-14">As long as there is a remaining value on your E-Gift Card, it will not expire. We do not charge a service fee for holding your E-Gift Card beyond a specified time.</p>
<p class="t-text-14"><strong>How do I return merchandise purchased with an E-Gift Card?</strong></p>
<p class="t-text-14">If an item that was purchased with an E-Gift Card needs to be returned, we will credit your E-Gift Card account once we receive the product(s) you&rsquo;d like to return. Please see our Return section for more detailed information.</p>
<p class="t-text-14"><strong>Can I replace a lost or stolen E-Gift Card?</strong></p>
<p class="t-text-14">Sorry, we are not responsible for lost or stolen E-Gift Cards. These codes are non-refundable and should be treated just like cash.</p>
<p class="t-text-14"><strong>Can more than one method of payment be applied toward a purchase?</strong></p>
<p class="t-text-14">If the balance on your E-Gift Card is less than the total order amount, you will be prompted during checkout to pay for the remaining amount with a valid credit card.</p>
</div>
</div>
<div class="bottom-banners">{{block type="cms/block" block_id="customer_service_bottom"}} {{block type="cms/block" block_id="live_chat_bottom"}} {{block type="cms/block" block_id="faqs_bottom"}}</div>
EOD;

$PageData = array(
    'title'           => 'E-Gift Cards',
    'content_heading' => 'E-Gift Cards',
    'root_template'   => 'one_column',
    'identifier'      => 'e_gift_cards',
    'content'         => $pageContent,
    'is_active'       => 1,
    'stores'          => array(0),
    'sort_order'      => 0
);

Mage::getModel('cms/page')->setData($PageData)->save();