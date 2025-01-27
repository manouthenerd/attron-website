@include('partials.header')


<main class="grid place-content-center p-2">
    <div class="text-center my-[20px]">
        <h3 class="text-darkBlue">Nos services actuels</h3>
    </div>

    <section class="mt-[20px]">
        <x-card title="Formation financière" img="finance.jpg" href="/services/1">
            Notre service de planification fiscale vous aide à optimiser la
            gestion de vos obligations fiscales, en minimisant vos impôts
            tout en respectant la législation en vigueur
        </x-card>
    </section>
</main>

@include('partials.footer')