

function div_show() {
    document.getElementById('popup').style.display = "block";
    document.getElementById('popupContent').style.display = "block";
}

function div_hide(){
    document.getElementById('popup').style.display = "none";
    document.getElementById('popupContent').style.display = "none";
}

function div_change_pass_show(){
    document.getElementById('change-pass').style.display = "block";
    document.getElementById('account-button-pass-div-show').style.display = "none";
    document.getElementById('change_password').checked = true;
}

function div_add_address_show(){
    document.getElementById('modal-window-address-bg').style.display = "block";
    document.getElementById('modal-window-address').style.display = "block";
}

function div_edit_address_hide(){
    document.getElementById('modal-window-address-bg').style.display = "none";
    document.getElementById('modal-window-address').style.display = "none";
}

window.onscroll = function(){
    var $j = jQuery.noConflict();
    var nav = window.scrollY;
    if (nav > 200) {
        $j('#up-div').fadeIn(200);
    } else {
        $j('#up-div').fadeOut(200);
    }
}

function to_Top(){
    var $j = jQuery.noConflict();
    $j('body,html').animate({
        scrollTop: 0
    }, 500);
    return false;
}

