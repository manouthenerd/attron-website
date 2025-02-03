import "./map";
import "./about";
import "./gsap";

let burgerMenuButton = document.querySelector(".burger-menu");
let mobileNavbar = document.querySelector(".mobile-navbar");
let defaultNavbar = document.querySelector("#default-navbar");
let closeMenuButton = document.querySelector(".close-btn-div button");

let loaderBox = document.querySelector("div#loader-box");

window.addEventListener("load", () => {
    loaderBox.style.display = "none";
});

burgerMenuButton.addEventListener('click', () => {
    gsap.to(mobileNavbar, {
        height: 250,
        duration: 0.2
    })
    gsap.to(defaultNavbar, {
        display: 'none',
        duration: 0.5
    })
})

closeMenuButton.addEventListener('click', () => {
    gsap.to(defaultNavbar, {
        display: 'flex',
        duration: 0.2
    })

    gsap.to(mobileNavbar, {
        height: 0,
        duration: 0.2
    })
})