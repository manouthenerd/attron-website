<!DOCTYPE html>
<html lang="fr" class="h-full">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Obtez pour des services de comptabilité, de finance et de fiscalité sur mesure avec des experts chez ATTRON CAB."> 
    <title>ATTRON CAB</title>
    
    <link rel="shortcut icon" href="/assets/logo-attron.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollToPlugin.min.js"></script>
    @vite('resources/css/style.css')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body>

    <div id="loader-box">
        <p class="loader-text">
            ATTRON CAB
            <img src="/assets/logo-attron.png" alt="logo ATTRON" width="100" height="100">
        </p>
        <p class="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </p>
    </div>

    <div id="bounce-container" class="fixed right-[8px] bottom-[90px] z-[99999] h-[50px] w-[50px] max-[480px]:h-[35px] max-[480px]:w-[35px] rounded-full bg-[#053A4A] text-center font-bold text-white flex justify-center items-center opacity-0">
        <button id="bounce-arrow">
            <img src="/assets/arrow.svg" alt="icon fléchée" class="animate-bounce" class="max-[480px]:size-[30px]">
        </button>
    </div>

    @include('components.navbar')
