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
    

        gsap.from('#circle', {
            scrollTrigger: {
                trigger: '#circle',
                
            },
            
            y: 50,
            opacity: 0
        })
    
        gsap.from('.box', {
            scrollTrigger: {
                trigger: '.box',
            },
    
            xPercent: 100,
            opacity: 0,
            stagger: 0.5,
            duration: 1.8
    
        })
    
    

    gsap.from('.card', {
        scrollTrigger: {
            trigger: '.card',
        },
        opacity: 0,
        rotationY: 30,
        duration: 0.7,
        stagger: 0.2
    })

    gsap.from('.image', {
        scrollTrigger: {
            trigger: '.image',
            start: '-70% top',
        },
        rotationY: 360,
        duration: 0.8,
        stagger: 0.2
    })

    gsap.from('.picture', {
        scrollTrigger: {
            trigger: '.picture',
        },
        scale: 0,
        duration: 0.8,
        stagger: 0.2
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
