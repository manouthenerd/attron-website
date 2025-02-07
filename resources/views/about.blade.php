@include('partials.header')

<main class="h-full mt-8 min-[700px]:mx-16 bg-[#bcbc] p-2 rounded-sm">
    <h3 class="text-center mb-8 font-bold text-[25px] text-darkBlue">
        Présentation de l'entreprise
    </h3>

    <section class="grid place-content-center gap-4 mt-4">

        <div class="indent-3 text-justify bg-[#bcbc] p-2 space-y-2">

            <p class="p-2 space-y-2">
                <span class="font-bold text-darkBlue">ATTRON CAB</span> est une société de comptabilité et de conseil financier dédiée aux
                entrepreneurs,
                aux PME et aux grandes entreprises. Notre mission est d’accompagner nos clients dans la gestion de leurs
                finances en leur offrant des services personnalisés, modernes et adaptés à leurs besoins
            </p>

            <p class="p-2 space-y-2">
                Nous nous engageons à fournir des solutions comptables efficaces, en combinant expertise humaine et
                technologies avancées, afin d’optimiser la gestion financière de nos clients et de garantir leur
                conformité fiscale et réglementaire.
            </p>
        </div>

        <div class="indent-3 text-justify bg-[#bcbc] p-2 space-y-2">
            <h4 class="text-center font-bold text-darkBlue">1. Nos services</h4>
            <ul class="list-[square] list-inside space-y-4 mt-4">
                <li>la comptabilité, la fiscalité;</li>
                <li>la formation continue, technique, classique et diverse en tout domaine;</li>
                <li>le montage de tout dossier de financement, les appels d'offres;</li>
                <li>la création de société (du registre de commerce à la DPE et rattachement à la CNPS;)</li>
                <li>la recherche de partenaires techniques, financiers et commerciaux;</li>
                <li>l'assistance, le conseil en management et gestion des ressources humaines;</li>
                <li>le Marketing, l'édition, l'étude, la recherche, l'entrepreneuriat et la pédagogie;</li>
                <li>L'informatique, la télécommunication et la communication;</li>
                <li>la représentation de marque diverses;</li>
                <li>Ventes et Achates de fournitures de bureau, matériels et mobiliers de bureau;</li>
                <li>Prestations diverses.</li>
            </ul>
        </div>

        <div class="indent-3 text-justify bg-[#bcbc] p-2 space-y-2">
            <h4 class="text-center font-bold text-darkBlue">2. Pourquoi nous choisir ?</h4>
            <ul class="list-[square] list-inside space-y-4 mt-4">
                <li><strong>Un service personnalisé</strong> : Nous nous adaptons aux besoins spécifiques de chaque client.</li>
                <li><strong>Une approche moderne</strong> : Nous utilisons des outils digitaux performants pour une gestion comptable
                    optimisée.</li>
                <li><strong>Une expertise reconnue</strong> : Nos professionnels sont qualifiés et suivent régulièrement des formations
                    pour être à jour sur les réglementations.</li>
                <li><strong>Un accompagnement de A à Z</strong> : De la création d’entreprise à la gestion quotidienne, nous sommes à vos
                    côtés.</li>
            </ul>
        </div>

        <div class="indent-3 text-justify bg-[#bcbc] p-2 space-y-2">
            <h4 class="text-center font-bold text-darkBlue">3. Nos valeurs</h4>
            <p>Chez <strong class="text-darkBlue">ATTRON CAB</strong>, nous sommes guidés par des valeurs fondamentales qui font notre
                différence :</p>
            <ul class="list-[square] list-inside space-y-4 mt-4">
                <li>✅ <strong>Transparence</strong> : Nous garantissons une communication claire et sans surprise.</li>
                <li>✅ <strong>Professionnalisme</strong> : Nous assurons un suivi rigoureux et conforme aux normes comptables.</li>
                <li>✅ <strong>Innovation</strong> : Nous intégrons des solutions numériques pour une gestion plus efficace et intuitive.</li>
                <li>✅ <strong>Accompagnement humain</strong> : Parce que derrière chaque chiffre, il y a une entreprise et des ambitions.</li>
            </ul>
        </div>

        <div>
            <div>
                <div>
                    <h3
                        class="flex justify-center gap-1 items-center text-center mb-8 font-bold text-[20px] text-darkBlue">
                        Nos domaines d'expertises
                        <img class="size-[25]" src="/assets/icons/certificate.svg" alt="certification svg">
                    </h3>
                </div>
                <div class="grid gap-[5rem]">
                    <div class="flex justify-center gap-[5.5rem] flex-wrap">
                        <div class="size-[200px] rounded-full border border-solid bg-gray-200">
                            <img class="image" src="" alt="image d'illustration">
                            <p class="title text-xs text-darkBlue text-center font-bold mt-4"></p>
                        </div>
                        <div class="size-[200px] rounded-full border border-solid bg-gray-200">
                            <img class="image" src="" alt="image d'illustration">
                            <p class="title text-xs text-darkBlue text-center font-bold mt-4"></p>
                        </div>
                        <div class="size-[200px] rounded-full border border-solid bg-gray-200">
                            <img class="image" src="" alt="image d'illustration">
                            <p class="title text-xs text-darkBlue text-center font-bold mt-4"></p>
                        </div>
                    </div>
                    <div class="flex justify-center gap-3">
                        <button class="small-button size-[30px] rounded-full bg-white button text-center">1</button>
                        <button class="small-button size-[30px] rounded-full bg-white button text-center">2</button>
                        <button class="small-button size-[30px] rounded-full bg-white button text-center">3</button>
                    </div>
                </div>


            </div>

            <div class="my-16">
                <div>
                    <h3
                        class="flex justify-center flex-wrap gap-1 items-center text-center mb-8 font-bold text-[20px] text-darkBlue">
                        Les piliers d'ATTRON CAB
                        <img class="size-[25]" src="/assets/icons/team.svg" alt="team svg">
                    </h3>
                </div>
                <div id="team" class="flex justify-center flex-wrap gap-[3.5rem]">
                    
                    <div class="size-[155px] rounded-full border border-solid bg-gray-200">
                        <img class="picture" src="/assets/img/Mr-X.jpg" alt="image d'illustration">
                        <p id="firstUser" class="text-xs text-darkBlue text-center font-bold mt-4">
                            Mr ATTRON Achille - Directeur Général
                        </p>
                    </div>

                    <div class="size-[155px] rounded-full border border-solid bg-gray-200">
                        <img class="picture" src="/assets/img/Mr-Y.jpg" alt="image d'illustration">
                        <p class="text-xs text-darkBlue text-center font-bold mt-4">
                            Mr N'GUESSAN Louis Max - Directeur Financier
                        </p>
                    </div>
                </div>
            </div>

        </div>


    </section>
</main>

@include('partials.footer')
