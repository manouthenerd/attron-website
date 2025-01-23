const data = [


    [
        {
            title: "Finance et fiscalité",
            image: "/assets/icons/finance-fisc.svg",
        },
        {
            title: "Formation financière",
            image: "/assets/icons/formation-fin.svg",
        },
        { title: "Marketing", image: "/assets/icons/Mobile Marketing-bro.svg" },
    ],
    
    [
        {
            title: "Création d'entreprise",
            image: "/assets/icons/Company-bro.svg",
        },
        {
            title: "Représentation de marque",
            image: "/assets/icons/branding.svg",
        },
        {
            title: "Conseils en management",
            image: "/assets/icons/management.svg",
        },
    ],
    [
        { title: "Informatique", image: "/assets/icons/Hand coding-bro.svg" },
        {
            title: "Formation continue",
            image: "/assets/icons/Online learning-bro.svg",
        },
        {
            title: "Recherche de partenaire",
            image: "/assets/icons/Partnership-bro.svg",
        },
    ],

];

const images = document.querySelectorAll(".image");
const buttons = document.querySelectorAll(".button");
const titles = document.querySelectorAll('.title')

images.forEach( (img, index) => {
    img.src = data[0][index].image
    titles[index].innerHTML = data[0][index].title
})

buttons.forEach((button, btnIndex) => {
    
    button.addEventListener("click", (e) => {
        // e.target.style.background = "#053A4A"

        images.forEach((img, index) => {
            img.src = data[btnIndex][index].image;
        });

        titles.forEach((title, index) => {
            title.innerHTML = data[btnIndex][index].title;
        });
    });

    // button.style.background = "#fff"
});
