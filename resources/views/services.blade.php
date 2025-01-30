@include('partials.header')


<main class="grid place-content-center p-2">
    <div class="text-center my-[20px]">
        <h3 class="text-darkBlue">
            Nos domaines d'interventions sont les suivantes:
        </h3>
    </div>

    <section id="services-section" class="mt-[20px] flex justify-center flex-wrap gap-[6.5rem]">
        <x-card title="Formation financière" img="formation-fn.jpg">
            Notre service de planification fiscale vous aide à optimiser la
            gestion de vos obligations fiscales, en minimisant vos impôts
            tout en respectant la législation en vigueur
        </x-card>

        <x-card title="Service de comptabilité" img="finance.jpg">
            Notre service de comptabilité offre une gestion complète et
            rigoureuse de vos finances, en garantissant la conformité avec
            les normes légales et fiscales.
        </x-card>

        <x-card title="marketing et communication" img="marketing.png">
            Notre service de marketing vous aide à booster votre visibilité et à atteindre vos objectifs commerciaux.
            Que ce soit pour développer votre marque, attirer de nouveaux clients ou maximiser vos ventes, nous mettons
            en place des stratégies sur mesure pour répondre à vos besoins spécifiques.
        </x-card>

        <x-card title="Finance et fiscalité" img="fisc.jpg">
            Nous nous chargeons de vous accompagner dans la gestion de vos ressources et la
            maximisation de vos opportunités financières. Que vous soyez un particulier ou une entreprise, nous vous
            aidons à optimiser vos investissements, à gérer vos impôts et à sécuriser votre avenir financier grâce à des
            solutions personnalisées et adaptées à votre situation
        </x-card>

        <x-card title="Création d'entreprises" img="creation-entreprise.jpg">
            Nous vous guidons à chaque étape de votre projet, de l'idée initiale à la
            mise en place de votre activité. Que vous ayez besoin d’accompagnement juridique, financier ou stratégique,
            nous vous offrons des solutions sur mesure pour lancer votre entreprise dans les meilleures conditions et
            assurer sa pérennité dès le départ.
        </x-card>

        <x-card title="Conseils en management" img="fournitures.jpg">
            Notre service de conseils en management vous accompagne dans l’optimisation de vos pratiques de gestion et
            le développement de votre équipe. Que ce soit pour améliorer la performance, renforcer la cohésion ou mettre
            en place des stratégies de leadership efficaces, nous vous apportons des solutions personnalisées pour
            garantir le succès et la croissance de votre organisation.
        </x-card>

        <x-card title="Recherche de partenaires" img="partenariat.jpg">
            Notre service de recherche de partenaires vous aide à identifier et à établir des collaborations
            stratégiques pour développer votre activité. Que vous soyez à la recherche de partenaires commerciaux,
            financiers ou technologiques, nous mettons en place des solutions sur mesure pour vous connecter avec des
            acteurs clés, et ainsi renforcer votre réseau et vos opportunités de croissance.
        </x-card>

        <x-card title="Ventes et Achates de fournitures de bureau" img="achats.png">
            Notre service de vente et d’achats de fournitures de bureaux vous permet d’équiper votre entreprise avec des
            produits de qualité, adaptés à vos besoins professionnels. Que vous cherchiez des fournitures courantes, des
            équipements spécialisés ou des solutions personnalisées, nous vous proposons une large gamme de produits
            pour optimiser le fonctionnement de votre environnement de travail, tout en garantissant la compétitivité de
            vos coûts.
        </x-card>

    </section>
</main>

@include('partials.footer')
