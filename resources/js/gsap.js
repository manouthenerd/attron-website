window.addEventListener("load", (e) => {
    gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

    let buttons = document.querySelectorAll('.small-button')
    const bounceArrow = document.querySelector('#bounce-arrow')
    const bounceContainer = document.querySelector('#bounce-container')

    window.addEventListener('scroll', () => {
        window.pageYOffset > 0 ? bounceContainer.classList.remove('opacity-0') : bounceContainer.classList.add('opacity-0')
    })

    bounceArrow.addEventListener('click', () => {
        window.scrollTo({top: 0, behavior: 'smooth'})
        gsap.to(window, { duration: 0.5, scrollTo: { y: 0 }});
    })
    
    

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            gsap.from('.image', {
                scrollTrigger: {
                    trigger: '.image',
                    start: '-70% top',
                },
                rotationY: 360,
                duration: 0.8,
                stagger: 0.2
            })
        })
    })
});
