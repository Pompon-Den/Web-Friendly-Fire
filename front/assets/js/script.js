function changeIconOfRegistration() {
    if (document.getElementById("userStatus").classList.item(0)
    == "user__status__link__off")
        document.getElementById("userStatus").classList.replace
        ("user__status__link__off", "user__status__link__on")
    else
        document.getElementById("userStatus").classList.replace
        ("user__status__link__on", "user__status__link__off")
}

function headerOnOff() {
    if(document.querySelector('.header').style.display === 'block') {
        document.querySelector('.header').style.display = 'none';
        document.querySelector('.button_open_close').style.backgroundImage = "url('assets/images/menu.png')";
    }
    else {
        document.querySelector('.button_open_close').style.backgroundImage = "url('assets/images/x.png')";
        document.querySelector('.header').style.display = 'block';
    }
}

function addMerch() {
<<<<<<< HEAD
    console.log(1)
=======
>>>>>>> c720b3c88dd26e4042a69a61a30a1b91b50f0766
    if(document.querySelector('.admin_merch').style.display === 'block') {
        document.querySelector('.admin_merch').style.display = 'none';
    }
    else {
        document.querySelector('.admin_merch').style.display = 'block';
    }
}