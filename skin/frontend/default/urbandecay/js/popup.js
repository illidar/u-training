

//Function To Display Popup
function div_show() {
    document.getElementById('popup').style.display = "block";
    document.getElementById('popupContent').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
    document.getElementById('popup').style.display = "none";
    document.getElementById('popupContent').style.display = "none";
}

function div_change_pass_show(){
    document.getElementById('change-pass').style.display = "block";
    document.getElementById('account-button-pass-div-show').style.display = "none";
    document.getElementById('change_password').checked = true;
}