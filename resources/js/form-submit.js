const estimationForm = document.querySelector('#estimation-form')
const contactForm = document.querySelector('#contact-form')

const estimationFormMessage = document.querySelector('#estimation-message')
const contactFormMessage = document.querySelector('#contact-message')

if(document.location.href == 'http://localhost:8000/#estimation-form') {
    estimationFormMessage.classList.remove('hidden')
    estimationForm.scrollIntoView()
}

if(document.location.href == 'http://localhost:8000/contact#contact-form') {
    contactFormMessage.classList.remove('hidden')
    contactForm.scrollIntoView()
}