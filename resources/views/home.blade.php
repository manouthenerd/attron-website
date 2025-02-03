@include('partials.header')

<main class="h-full transition-fade" id="swup">
    <section id="hero-section">
        <div id="circle" class="p-4">
            <h4 class="text-white">
                Akwaba à <span id="brandname" class="font-bold text-darkBlue">ATTRON CAB</span>
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
        <div id="section-container">
            <div class="box">
                <h3>Rapprochez-vous des experts</h3>

                <p>
                    L'expertise d'une entreprise en comptabilité se caractérise par des comptables qualifiés, une
                    expérience diversifiée, une formation continue, l'utilisation de logiciels modernes, une
                    solide réputation et une offre de services variée, garantissant des solutions adaptées aux besoins
                    de
                    ses clients.
                </p>
                <div id="mini-circle1" class="mini-circle"></div>
            </div>

            <div class="box">

                <h3 class="head-2">Des services de qualités et sur mesure.</h3>

                <p>
                    Nous vous offrons des services de qualité, conçus sur mesure pour répondre à vos besoins
                    spécifiques.
                    Chaque prestation est pensée pour vous apporter une solution optimale, alliant expertise, écoute et
                    personnalisation. Parce que chaque projet est unique, nous nous engageons à vous fournir un
                    accompagnement sur mesure, afin de garantir votre entière satisfaction.
                </p>

                <div id="mini-circle2" class="mini-circle"></div>
            </div>
        </div>

        <div class="py-[10px] px-[60px] min-my-4">
            <h3 class="text-center font-bold text-darkBlue my-2">La vision qui nous alimente</h3>
            <p class="leading-[30px] bg-kaki p-2">
                Notre vision est de devenir le leader incontournable dans le domaine de la comptabilité en offrant des
                services sur mesure, axés sur l'excellence, l'innovation et la performance. Nous aspirons à être le
                conseiller stratégique privilégié de nos clients, en les accompagnant dans l’optimisation de leur
                gestion financière, la conformité fiscale et la prise de décisions éclairées, tout en garantissant une
                transparence totale et un haut niveau de fiabilité. Notre engagement : offrir des solutions comptables
                adaptées aux défis contemporains et renforcer la pérennité des entreprises, quelle que soit leur taille.
            </p>
        </div>
    </section>

    <section id="our-services" class="section-2">
        <div class="header">
            <h3>Nos services phares</h3>
        </div>

        <div class="card-container">

            <x-card title="Formation financière" img="formation-fn.jpg">
                Notre service de formation financière est conçu pour vous aider
                à maîtriser les fondamentaux de la gestion financière, tant
                personnelle que professionnelle.
            </x-card>
            <x-card title="Service de comptabilité" img="finance.jpg">
                Notre service de comptabilité offre une gestion complète et
                rigoureuse de vos finances, en garantissant la conformité avec
                les normes légales et fiscales.
            </x-card>
            <x-card title="Ventes et Achates de fournitures de bureau" img="achats.png">
                Notre service de vente et d’achats de fournitures de bureaux vous permet d’équiper votre entreprise avec
                des
                produits de qualité, adaptés à vos besoins professionnels. Que vous cherchiez des fournitures courantes,
                des
                équipements spécialisés ou des solutions personnalisées, nous vous proposons une large gamme de produits
                pour optimiser le fonctionnement de votre environnement de travail, tout en garantissant la
                compétitivité de
                vos coûts.
            </x-card>
        </div>

        <div class="flex justify-center">
            <a href="/services" class="p-2 rounded-sm bg-darkBlue text-white font-bold" href="/services">Voir tous les
                services</a>
        </div>

    </section>

    <section class="w-full flex flex-col justify-center bg-[#e2e3e3]">
        <div>
            <h3 class="text-center font-bold text-darkBlue my-2">
                Demander un devis ou une consultation
            </h3>
        </div>
        <div class="w-full">
            <div class="max-w-[500px] my-0 mx-auto">
                <form method="post" action="/contact" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    @csrf
                    <div class="my-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Forme juridique
                        </label>
                        
                        <p class="flex flex-wrap gap-2 justify-between my-2">
                            <label for="sarl">
                                SARL
                                <input type="radio" name="company" id="sarl">
                            </label>
                            <label for="sas">
                                SAS/SA
                                <input type="radio" name="company" id="sas">
                            </label>
                            <label for="other">
                                Autre
                                <input type="radio" name="company" id="other">
                            </label>
                        </p>

                        <p class="flex flex-wrap gap-2 justify-between my-2">
                            <label for="individual">
                                Entreprise individuelle
                                <input type="radio" name="company" id="individual">
                            </label>
                            
                            <label for="association">
                                Entreprise individuelle
                                <input type="radio" name="company" id="association">
                            </label>
                        </p>
                    </div>

                    <div class="my-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="activity">
                            Secteur d'activité
                        </label>
                        <input
                            class="shadow appearance-none border border-gray-100 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="activity" required name="activity" type="text">
                    </div>

                    <div class="my-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Nom et prénoms
                        </label>
                        <input
                            class="shadow appearance-none border border-gray-100 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="username" required name="username" type="text">
                    </div>

                    <div class="my-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            Email
                        </label>
                        <input
                            class="shadow appearance-none border border-gray-100 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="email" required name="email" type="email">
                    </div>

                    <div class="my-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="contact">
                            Téléphone
                        </label>
                        <input
                            class="shadow appearance-none border border-gray-100 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="contact" required name="contact" type="text">
                    </div>

                    <div class="my-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Nombre de salarié(s)
                        </label>
                        
                        <p class="flex flex-wrap gap-2 justify-between my-2">
                            <label for="first">
                                Pas de salarié
                                <input type="radio" value="pas de salarié" name="workers" id="first">
                            </label>
                            <label for="second">
                                10 à 50 salariés
                                <input type="radio" value="10 à 50 salariés" name="workers" id="second">
                            </label>
                            <label for="last">
                                Plus de 50 salariés
                                <input type="radio" value="plus de 50 salariés" name="workers" id="last">
                            </label>
                        </p>
                    </div>

                    <div class="my-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
                            Objet de votre demande
                        </label>
                        <textarea
                            class="h-[150px] shadow border border-gray-100 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="message" name="message" required placeholder="Veuillez exprimer votre demande ici..."></textarea>

                    </div>

                    <div class="flex items-center justify-between">
                        <button
                            class="bg-gray-500 hover:bg-[#053A4A] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            Envoyer
                        </button>
                    </div>
                </form>
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
                    <p>info@attron-cab.com</p>
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
                    <p>Treichville, Rue 21 avenue 17 <br>
                        Avenue Ouezzin Coulibaly</p>
                </div>
            </div>

            <div class="w-full h-[300px]" id="map"></div>

        </div>
    </section>
</main>


@include('partials.footer')

<!-- #053A4A dark blue -->
<!-- #9D8C47 Dark gold -->
