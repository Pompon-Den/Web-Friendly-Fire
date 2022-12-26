slide();

function slide() {
    window.setTimeout(function () {
        scroll()
    }, 50)
}

function scroll() {
    document.querySelector('.game_list').scrollBy({
        left: 10,
        behavior: 'smooth'
    });
    slide()
}