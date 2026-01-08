import "./map";
import "./about";
import "./gsap";
import "./form-submit";

import TypeIt from "typeit";
import AOS from "aos";
import "aos/dist/aos.css";

let burgerMenuButton = document.querySelector(".burger-menu");
let mobileNavbar = document.querySelector(".mobile-navbar");
let defaultNavbar = document.querySelector("#default-navbar");
let closeMenuButton = document.querySelector(".close-btn-div button");

let loaderBox = document.querySelector("div#loader-box");

window.addEventListener("load", () => {
    loaderBox.style.display = "none";
});

burgerMenuButton.addEventListener("click", () => {
    gsap.to(mobileNavbar, {
        height: 250,
        duration: 0.2,
    });
    gsap.to(defaultNavbar, {
        display: "none",
        duration: 0.5,
    });
});

closeMenuButton.addEventListener("click", () => {
    gsap.to(defaultNavbar, {
        display: "flex",
        duration: 0.2,
    });

    gsap.to(mobileNavbar, {
        height: 0,
        duration: 0.2,
    });
});

const text0 = "en <span class='text-[#9D8C47]'>comptabilité</span>";
const text1 =
    "en <span class='text-[#9D8C47]'>fiscalité</span>, <span class='text-[#9D8C47]'>audit</span> et <span class='text-[#9D8C47]'>conseil</span>";
const text2 =
    "en <span class='text-[#9D8C47]'>conseil</span> et <span class='text-[#9D8C47]'>assistance</span>";
const text3 = "dans la <span class='text-[#9D8C47]'>gestion de la paie</span>";
const text4 =
    "dans la <span class='text-[#9D8C47]'>création d'entreprises</span>";

document.addEventListener("DOMContentLoaded", function () {
    new TypeIt("#element", {
        waitUntilVisible: true,
    })
        .type(text0, {delay: 75})
        .delete(text0.length)
        .type(text1)
        .delete(text1.length)
        .type(text2)
        .delete(text2.length)
        .type(text3)
        .delete(text3.length)
        .type(text4)
        .go();
});

AOS.init({
    // Global settings:
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: "DOMContentLoaded", // name of the event dispatched on the document, that AOS should initialize on
    initClassName: "aos-init", // class applied after initialization
    animatedClassName: "aos-animate", // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)

    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 120, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 400, // values from 0 to 3000, with step 50ms
    easing: "ease", // default easing for AOS animations
    once: true, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: "top-bottom", // defines which position of the element regarding to window should trigger the animation
});
