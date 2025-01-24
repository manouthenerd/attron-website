import gsap from "gsap";

window.addEventListener('DOMContentLoaded', () => {
  
    const circleAnimation = gsap.timeline({
        scrollTrigger: {
            trigger: '#circle',
            scrub: 1
        }
    })

    circleAnimation.to('#circle', {
        duration: 1.2,
        opacity: 1,
        y: 0
    })

    const firstSectionAnimation = gsap.timeline({
        scrollTrigger: {
            trigger: '#about-link',
            start: 'top top',
            scrub: 1
        }
    })

    firstSectionAnimation.to('#section-2 .box', {
        duration: 1,
        y: 0,
        opacity: 1,
        // delay: 1
    })

})