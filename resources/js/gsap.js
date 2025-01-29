window.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    let buttons = document.querySelectorAll('.small-button')

    gsap.from('#circle', {
        scrollTrigger: {
            trigger: '#circle',
            // markers: true,
            start: '-80% top',
            end: 'top top'
        },
        
        y: 50,
        opacity: 0
    })

    gsap.from('.box', {
        scrollTrigger: {
            trigger: '.box',
            start: '-40% top',
        },

        xPercent: 100,
        opacity: 0,
        stagger: 0.5,
        duration: 1.8

    })

    gsap.from('.card', {
        scrollTrigger: {
            trigger: '.card',
            start: '-70% top',
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
            start: '-70% top',
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
