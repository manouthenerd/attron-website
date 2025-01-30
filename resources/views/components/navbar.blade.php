<nav class="mobile-navbar">
    <div class="close-btn-div"><button>X</button></div>

    <div class="mobile-links">
        <a href="/" class="{{ request()->is('/') ? 'active-mobile-link' : ''}}">Accueil</a>
        <a href="/services" class="{{ request()->is('services') ? 'active-mobile-link' : ''}}">Nos services</a>
        <a href="/about" class="{{ request()->is('about') ? 'active-mobile-link' : ''}}">À propos de nous</a>
        {{-- <a href="/contact" id="rdv" class="bg-[#9D8C47] p-2 rounded-sm text-center text-white font-bold">Prendre un rendez-vous</a> --}}
    </div>
</nav>
<nav id="default-navbar" class="flex w-full justify-between items-center sticky top-0 min-h-8 px-2">
    <div id="logo" class="w-[100px]">
        <a href="/"><img src="/assets/logo-attron.png" alt="logo ATTRON cab" /></a>
    </div>

    <div id="links" class="flex gap-4 font-bold">
        <a href="/" class="{{ request()->is('/') ? 'is-active' : ''}} ">Accueil</a>
        <a href="/services" class="{{ request()->is('services') ? 'is-active' : ''}} ">Nos services</a>
        <a href="/about" class="{{ request()->is('about') ? 'is-active' : ''}}">À propos de nous</a>
    </div>

    <div class="contact">
        {{-- <a href="/contact" class="p-2 rounded-[5px] text-center text-white font-bold bg-[#9D8C47]">Prendre un rendez-vous</a> --}}
    </div>

    <button class="burger-menu">
        <span></span>
        <span></span>
        <span></span>
    </button>
</nav>
