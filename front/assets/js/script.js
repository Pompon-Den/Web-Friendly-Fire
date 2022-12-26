function changeIconOfRegistration() {
    if (document.getElementById("userStatus").classList.item(0)
    == "user__status__link__off")
        document.getElementById("userStatus").classList.replace
        ("user__status__link__off", "user__status__link__on")
    else
        document.getElementById("userStatus").classList.replace
        ("user__status__link__on", "user__status__link__off")
}

function clickForm(number) {
    if (number === 1) {
        document.getElementById("formReg").style.display="none"
        document.getElementById("formIn").style.display="flex"
        document.getElementById("block").style.height="70vh"
    }
    else if (number === 2) {
        document.getElementById("formIn").style.display="none"
        document.getElementById("formReg").style.display="flex"
        document.getElementById("block").style.height="100vh"
    }
}

slide();

function slide() {
    window.setTimeout(function () {
        scroll()
    }, 50)
}

function scroll() {
    const moveNum = document.querySelector('.img').offsetWidth / 2;
    document.querySelector('.game_list').scrollBy({
        left: 10,
        behavior: 'smooth'
    });
    slide()
}