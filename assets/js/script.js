function changeIconOfRegistration() {
    if (document.getElementById("userStatus").classList.item(0)
    === "user__status__link__off")
        document.getElementById("userStatus").classList.replace
        ("user__status__link__off", "user__status__link__on")
    else
        document.getElementById("userStatus").classList.replace
        ("user__status__link__on", "user__status__link__off")
}
