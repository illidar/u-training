jQuery(document).ready(function() {
    jQuery.ias({
        container : ".category-products",
        item : "ul.products-grid",
        next : "a.next",
        pagination : '.pages',
        loader : "<img src='http://urbandecay.lxc/urbandecay/skin/frontend/default/urbandecay/images/loading-small.gif' />",
        triggerPageThreshold : 9999
    });
});
