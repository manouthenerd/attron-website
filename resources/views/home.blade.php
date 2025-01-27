@include('partials.header')

<main class="h-full">
    <section id="hero-section">
        <div id="circle" class="p-4">
            <h4 class="text-white">
                Bienvenue chez <span class="font-bold text-darkBlue">ATTRON CAB</span>
            </h4>
            <p>
                Votre cabinet d'expertise dans le domaine de la finance, la comptabilité et de la communication.
            </p>
            <a id="about-link" href="/about" class="mt-8 rounded-md p-2 border-none">
                En savoir +
            </a>
        </div>
    </section>

    <section id="section-2">
        <div class="box">
            <h3>Rapprochez-vous des experts</h3>

            <p>
                L'expertise d'une entreprise en comptabilité se caractérise par des comptables qualifiés, une
                expérience diversifiée, une formation continue, l'utilisation de logiciels modernes, une
                solide réputation et une offre de services variée, garantissant des solutions adaptées aux besoins de
                ses clients.
            </p>
            <div id="mini-circle1" class="mini-circle"></div>
        </div>

        <div class="box">

            <h3 class="head-2">Des services de qualités et sur mesure.</h3>

            <p>
                Nous vous offrons des services de qualité, conçus sur mesure pour répondre à vos besoins spécifiques.
                Chaque prestation est pensée pour vous apporter une solution optimale, alliant expertise, écoute et
                personnalisation. Parce que chaque projet est unique, nous nous engageons à vous fournir un
                accompagnement sur mesure, afin de garantir votre entière satisfaction.
            </p>

            <div id="mini-circle2" class="mini-circle"></div>
        </div>
    </section>

    <section id="our-services" class="section-2">
        <div class="header">
            <h3>Nos prestations de services</h3>
        </div>

        <div class="card-container">
            <div class="card">
                <p class="title">Formation financière</p>
                <div class="card-content">
                    <img src="/assets/img/formation-fn.jpg" alt="image d'illustration" />
                    <p>
                        Notre service de formation financière est conçu pour vous aider
                        à maîtriser les fondamentaux de la gestion financière, tant
                        personnelle que professionnelle.
                    </p>
                </div>
                <div class="button-box">
                    <button>Voir en détails</button>
                </div>
            </div>
            <div class="card">
                <p class="title">Service de comptabilité</p>
                <div class="card-content">
                    <img src="./assets/img/finance.jpg" alt="image d'illustration" />
                    <p>
                        Notre service de comptabilité offre une gestion complète et
                        rigoureuse de vos finances, en garantissant la conformité avec
                        les normes légales et fiscales.
                    </p>
                </div>
                <div class="button-box">
                    <button>Voir en détails</button>
                </div>
            </div>

            <div class="card">
                <p class="title">Assurance</p>
                <div class="card-content">
                    <img src="./assets/img/formation-fn.jpg" alt="image d'illustration" />
                    <p>
                        Notre service d’assurance vous aide à protéger ce qui est
                        important pour vous, qu’il s’agisse de votre vie, de votre
                        santé, de vos biens ou de votre entreprise
                    </p>
                </div>
                <div class="button-box">
                    <button>Voir en détails</button>
                </div>
            </div>

            <div class="card">
                <p class="title">Planification Fiscale</p>
                <div class="card-content">
                    <img src="./assets/img/formation-fn.jpg" alt="image d'illustration" />
                    <p>
                        Notre service de planification fiscale vous aide à optimiser la
                        gestion de vos obligations fiscales, en minimisant vos impôts
                        tout en respectant la législation en vigueur
                    </p>
                </div>
                <div class="button-box">
                    <button>Voir en détails</button>
                </div>
            </div>

            <div class="card">
                <p class="title">Gestion de Portefeuille</p>
                <div class="card-content">
                    <img src="./assets/img/formation-fn.jpg" alt="image d'illustration" />
                    <p>
                        Notre service de planification fiscale vous aide à optimiser la
                        gestion de vos obligations fiscales, en minimisant vos impôts
                        tout en respectant la législation en vigueur
                    </p>
                </div>
                <div class="button-box">
                    <button>Voir en détails</button>
                </div>
            </div>
        </div>
    </section>

    <section id="section-3">
        <div class="header">
            <h3 id="contact">Nous contacter</h3>
        </div>

        <div class="card-container">

            <div class="card-2">
                <div class="header">
                    <span>
                        <img src="/assets/icons/contact.svg" alt="contact icon" />
                    </span>
                    <span> Contact </span>
                </div>
                <div>
                    <p>+225 07 08 11 68 11</p>
                    <p>+225 07 48 73 52 56</p>
                </div>
            </div>


            <div class="card-2">
                <div class="header">
                    <span>
                        <img src="/assets/icons/email.svg" alt="contact icon" />
                    </span>
                    <span> Email </span>
                </div>
                <div>
                    <p>example@gmail.com</p>
                </div>
            </div>

            <div class="card-2">
                <div class="header">
                    <span>
                        <img src="/assets/icons/location.svg" alt="contact icon" />
                    </span>
                    <span> Localisation </span>
                </div>
                <div>
                    <p>Treichville, Rue 21 avenue 17</p>
                </div>
            </div>

            <div class="w-full h-[300px]" id="map"></div>

        </div>
    </section>
</main>



@include('partials.footer')

<!-- #053A4A dark blue -->
<!-- #9D8C47 Dark gold -->
