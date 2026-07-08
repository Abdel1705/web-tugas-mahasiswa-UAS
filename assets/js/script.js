const heroTitle = document.querySelector(".hero-title");

window.addEventListener("load", function () {
    setTimeout(function () {
        heroTitle.classList.add("show");
    }, 300);
});