var $j = jQuery.noConflict();

$j(document).ready(function(){
    $j('.discount-block .f_legend').click(function() {
        $j('.discount-block .f_legend').toggleClass("active");
        $j('#opc-discount-coupon-form').slideToggle("fast","linear");
    });

    $j('.label_for_checkbox').click(function() {
        if ($j('.opc-col-center form').hasClass('hidden')) {
            $j('.opc-wrapper-opc .payment-block').css("margin-top", "0");
        } else {
            $j('.payment-block').css("margin-top", "30px");
        }
    });
});
