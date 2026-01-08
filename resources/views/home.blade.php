@include('partials.header')


<main style="overflow: hidden" class="h-full transition-fade overflow-hidden">

    <section id="hero-section" class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Image avec filtre CSS intégré -->
        <div class="absolute inset-0 z-0">
            <img src="/assets/bg-attron.webp" alt="Fond Attron Cab" class="w-full h-full object-cover"
                style="filter: brightness(0.7) opacity(0.4);" />
        </div>

        <!-- Conteneur principal du contenu -->
        <div class="relative z-10 container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-white font-bold space-y-2 text-4xl ">
                    <p data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
                        Akwaba à <span class="text-[#9D8C47] italic my-2 text-5xl" id="text-logo">ATTRON-CAB</span>,</p>
                    <div>
                        <p data-aos="fade-up" data-aos-offset="200" data-aos-delay="75" data-aos-duration="1200">Votre
                            partenaire de confiance</p>
                        {{-- <p>en matière de <span class="text-[#9D8C47]">comptabilité</span></p> --}}
                        <p data-aos="fade-up" data-aos-offset="200" data-aos-delay="85" data-aos-duration="1300"
                            class="mt-2" id="element"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="section-2">
        <div id="section-container" class="bg-radial-[at_25%_25%] from-[#053a4a37] via-white to-[#9d8c4763]">
            <div class="box" data-aos="fade-right" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
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

            <div class="box" data-aos="fade-left" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1100">

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

        <div class="py-[10px] [@media(min-width:820px)]:px-[60px] min-my-4">
            <h3 class="text-center font-bold text-darkBlue my-2" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1200">La vision qui nous alimente </h3>
            <p id="test" class="leading-[30px] bg-[#9d8c477d] p-2" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1200">
                Notre vision est de devenir le leader incontournable dans le domaine de la comptabilité en offrant des
                services sur mesure, axés sur l'excellence, l'innovation et la performance. Nous aspirons à être le
                conseiller stratégique privilégié de nos clients, en les accompagnant dans l’optimisation de leur
                gestion financière, la conformité fiscale et la prise de décisions éclairées, tout en garantissant une
                transparence totale et un haut niveau de fiabilité. Notre engagement : offrir des solutions comptables
                adaptées aux défis contemporains et renforcer la pérennité des entreprises, quelle que soit leur taille.
            </p>

            <div class="grid grid-cols-2 mt-2">
                <img src="/assets/shoot/img-3.jpeg" alt="illustration3" class="rounded" data-aos="zoom-in-left" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
                <img src="/assets/shoot/img-4.jpeg" alt="illustration4" class="rounded" data-aos="zoom-in-left" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
                <img src="/assets/shoot/img-5.jpeg" alt="illustration3" class="rounded" data-aos="zoom-in-right" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1200">
                <img src="/assets/shoot/img-2.jpeg" alt="illustration4" class="rounded" data-aos="zoom-in-right" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1200">
            </div>
        </div>
    </section>

    <section id="our-services" class="section-2">
        <div class="header">
            <h3>Nos services phares</h3>
        </div>

        <div class="card-container">


            <x-card title="Service d'Audit" img="audit.jpg">
                Notre service d'audit vise à offrir à nos clients une évaluation rigoureuse, objective et transparente
                de
                leurs états financiers, dans le respect des normes et régulations en vigueur. Forts de notre expertise
                et de
                notre expérience, nous accompagnons les entreprises de toutes tailles dans la vérification et l’analyse
                de
                la conformité de leurs processus comptables et financiers.
            </x-card>

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

        </div>

        <div id="services" class="flex justify-center">
            <a href="/services" class="p-2 rounded-sm text-[#053A4A]! font-bold" href="/services">Voir tous les
                services</a>
        </div>

    </section>

    <section id="text" class="w-full flex flex-col justify-center bg-[#e2e3e3]">

        <div>
            <h3 class="text-center font-bold text-darkBlue my-2">
                Demander un devis ou une consultation
            </h3>
        </div>
        <div class="w-full" id="form">
            <div class="max-w-[500px] my-0 mx-auto">
                <form method="POST" action="/" id="estimation-form"
                    class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div id="estimation-message" class="bg-[#BDCEBD] p-4 rounded-sm my-0 mx-auto hidden">
                        Votre message a été envoyé avec succès.
                    </div>
                    @csrf
                    <div class="my-4" data-aos="zoom-in" data-aos-duration="1000">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Forme juridique
                        </label>

                        <select name="company" id="company"
                            class="shadow appearance-none border border-gray-100 rounded w-full py-2 px-3 text-gray-700 mb-3 bg-white leading-tight focus:outline-none focus:shadow-outline">
                            <option value="SAS">SAS</option>
                            <option value="SARL">SARL</option>
                            <option value="SASU">SASU</option>
                            <option value="EURL">EURL</option>
                            <option value="SCI">SCI</option>
                            <option value="SNC">SNC</option>
                            <option value="ONG">ONG</option>
                            <option value="Société anonyme" selected>Société anonyme</option>
                            <option value="Association">Association</option>
                            <option value="Entreprise individuelle">Entreprise individuelle</option>
                        </select>


                        @error('company')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="my-6" data-aos="zoom-in" data-aos-duration="1000">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="activity">
                            Secteur d'activité
                        </label>
                        <input id="activity" value="{{ old('activity') }}" required name="activity" type="text"
                            placeholder="Entrer le domaine d'activité ici..."
                            class="shadow appearance-none border border-gray-100 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                        @error('activity')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="my-6" data-aos="zoom-in" data-aos-duration="1000">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Raison Sociale
                        </label>
                        <input id="name" value="{{ old('name') }}" required name="name" type="text"
                            placeholder="Entrer la raison sociale ici..."
                            class="shadow appearance-none border border-gray-100 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                        @error('name')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="my-6" data-aos="zoom-in" data-aos-duration="1000">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Date de création
                        </label>
                        <input id="date" value="{{ old('date') }}" required name="date" type="date"
                            class="shadow appearance-none border border-gray-100 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                        @error('date')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="my-6" data-aos="zoom-in" data-aos-duration="1000">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            Email
                        </label>
                        <input id="email" value="{{ old('email') }}" required name="email" type="email"
                            placeholder="example@gmail.com"
                            class="shadow appearance-none border border-gray-100 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                        @error('email')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="my-6" data-aos="zoom-in" data-aos-duration="1000">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="contact">
                            Téléphone
                        </label>
                        <input id="contact" value="{{ old('contact') }}" required name="contact" type="text"
                            placeholder="+2250102030405"
                            class="shadow appearance-none border border-gray-100 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                        @error('contact')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="my-4" data-aos="zoom-in" data-aos-duration="1000">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="workers">
                            Nombre de salarié(s)
                        </label>

                        <select name="workers" id="workers" required
                            class="shadow appearance-none border border-gray-100 rounded w-full py-2 px-3 text-gray-700 mb-3 bg-white leading-tight focus:outline-none focus:shadow-outline" data-aos="fade-up" data-aos-duration="1600">
                            <option value="Moins de 10 salariés">Moins de 10 salariés</option>
                            <option value="10 à 50 salariés">10 à 50 salariés</option>
                            <option value="Plus de 50 salariés">Plus de 50 salariés</option>
                        </select>


                        @error('workers')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="my-6" data-aos="zoom-in" data-aos-duration="1000">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
                            Votre demande en quelques lignes
                        </label>
                        <textarea id="message" value="{{ old('message') }}" name="message" required
                            class="h-[150px] shadow border border-gray-100 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="Veuillez exprimer votre demande ici..."></textarea>
                        @error('message')
                            <p class="error">{{ $message }}</p>
                        @enderror

                    </div>

                    <div class="flex items-center justify-between" data-aos="zoom-in" data-aos-duration="1000">
                        <button id="estimationButton"
                            class="bg-gray-500 hover:bg-[#053A4A] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            Envoyer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section>
        <div>
            <h3 class="text-center font-bold text-[#053A4A] my-2">
                Nos partenaires
            </h3>
        </div>

        <div class="grid">
            <div class="flex gap-2">
                <ul class="partners1 flex gap-2 items-center">
                    <li class="content-center size-[200px]"><img class="object-contain"
                            src="/assets/partners/partner_1.png" alt="partners logo"></li>
                    <li class="content-center size-[200px]"><img class="object-contain"
                            src="/assets/partners/partner_2.png" alt="partners logo"></li>
                    <li class="content-center size-[150px] mr-[25px]"><img class="object-contain"
                            src="/assets/partners/partner_8.png" alt="partners logo"></li>
                    <li class="mx-[20px] content-center size-[200px]"><img class="object-contain"
                            src="/assets/partners/partner_3.png" alt="partners logo"></li>
                    <li class="content-center size-[150px]"><img class="object-contain"
                            src="/assets/partners/partner_4.png" alt="partners logo"></li>
                    <li class="content-center size-[200px]"><img class="object-contain"
                            src="/assets/partners/partner_5.png" alt="partners logo"></li>
                    <li class="content-center size-[150px]"><img class="object-contain"
                            src="/assets/partners/partner_6.png" alt="partners logo"></li>
                    <li class="content-center size-[200px]"><img class="object-contain"
                            src="/assets/partners/partner_7.png" alt="partners logo"></li>
                    <li class="content-center size-[145px]"><img class="object-contain"
                            src="/assets/partners/partner_9.png" alt="partners logo"></li>
                </ul>
                <ul class="partners1 flex gap-2 items-center">
                    <li class="content-center size-[200px]"><img class="object-contain"
                            src="/assets/partners/partner_1.png" alt="partners logo"></li>
                    <li class="content-center size-[200px]"><img class="object-contain"
                            src="/assets/partners/partner_2.png" alt="partners logo"></li>
                    <li class="content-center size-[150px] mr-[25px]"><img class="object-contain"
                            src="/assets/partners/partner_8.png" alt="partners logo"></li>
                    <li class="mx-[20px] content-center size-[200px]"><img class="object-contain"
                            src="/assets/partners/partner_3.png" alt="partners logo"></li>
                    <li class="content-center size-[150px]"><img class="object-contain"
                            src="/assets/partners/partner_4.png" alt="partners logo"></li>
                    <li class="content-center size-[200px]"><img class="object-contain"
                            src="/assets/partners/partner_5.png" alt="partners logo"></li>
                    <li class="content-center size-[150px]"><img class="object-contain"
                            src="/assets/partners/partner_6.png" alt="partners logo"></li>
                    <li class="content-center size-[200px]"><img class="object-contain"
                            src="/assets/partners/partner_7.png" alt="partners logo"></li>
                    <li class="content-center size-[145px]"><img class="object-contain"
                            src="/assets/partners/partner_9.png" alt="partners logo"></li>
                </ul>
            </div>

        </div>


    </section>
    <section id="section-3" class="bg-[#d9d0c9]">
        <div class="header">
            <h3 id="contact" class="m-0">Nous contacter</h3>
        </div>

        <div class="card-container">

            <div class="card-2">
                <div class="header">
                    <span>
                        <img src="/assets/icons/contact.svg" alt="contact icon" />
                    </span>
                    <span><a href="tel:+2250708116811">Contact</a></span>
                </div>
                <div>
                    <p>+225 07 08 11 68 11</p>
                    <p>+225 07 78 40 10 57</p>
                    <p>+225 07 48 73 52 56</p>
                    <p>+225 05 86 93 40 58</p>
                </div>
            </div>


            <div class="card-2">
                <div class="header">
                    <span>
                        <a href="mailto:info@attron-cab.com" class="flex items-center gap-1">
                            <img src="/assets/icons/email.svg" alt="contact icon" />
                            Email
                        </a>
                    </span>
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

            <div class="w-full h-[200px]" id="map"></div>

        </div>
    </section>

</main>
@include('partials.footer')

<!-- #053A4A dark blue -->
<!-- #9D8C47 Dark gold -->
