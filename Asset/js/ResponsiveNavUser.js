checkWidth()
window.onresize = function () {
    checkWidth()
}

function checkWidth() {
    if (window.innerWidth < 576) {
        let toggler = document.getElementById("toggler").classList.remove("dropdown-toggle")
        let usernamField = document.getElementById("usernameField").classList.add("d-none")
    } else if (window.innerWidth > 576) {
        let toggler = document.getElementById("toggler").classList.add("dropdown-toggle")
        let usernamField = document.getElementById("usernameField").classList.remove("d-none")
    }
}
