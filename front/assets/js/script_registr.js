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