import "./bootstrap";
import "./about"
import "./map"

let burgerMenuButton = document.querySelector(".burger-menu");
let mobileNavbar = document.querySelector(".mobile-navbar");
let defaultNavbar = document.querySelector("#default-navbar");
let closeMenuButton = document.querySelector(".close-btn-div button");

let loaderBox = document.querySelector("div#loader-box");

burgerMenuButton.addEventListener("click", () => {
    mobileNavbar.style.display = "grid";
    defaultNavbar.style.display = "none";
});

closeMenuButton.addEventListener("click", () => {
    mobileNavbar.style.display = "none";
    defaultNavbar.style.display = "flex";
});

window.addEventListener("load", () => {
    loaderBox.style.display = "none";
});
