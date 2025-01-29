if(location.pathname == '/about') {

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
    const titles = document.querySelectorAll(".title");
    
    buttons[0].setAttribute("style", "background-color: #f97316");
    
    images.forEach((img, index) => {
        img.src = data[0][index].image;
        titles[index].innerHTML = data[0][index].title;
    });
    
    buttons.forEach((button, btnIndex, buttonArray) => {
        button.addEventListener("click", (e) => {
            images.forEach((img, index) => {
                img.src = data[btnIndex][index].image;
            });
    
            titles.forEach((title, index) => {
                title.innerHTML = data[btnIndex][index].title;
            });
        
            buttonArray.forEach((btn) => {
                btn === e.target
                    ? btn.setAttribute("style", "background-color: #f97316")
                    : btn.setAttribute("style", "background-color: #fff");
            });
        });
    });
    
}