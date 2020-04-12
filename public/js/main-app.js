document.addEventListener('DOMContentLoaded', function(event) {
    var matchmedia = window.matchMedia("(max-width: 991px)");
    var element = document.getElementById("app-container");
    if(matchmedia.matches) {
        element.classList.add("closed-sidebar-mobile");
        element.classList.add("closed-sidebar");
    }
})

