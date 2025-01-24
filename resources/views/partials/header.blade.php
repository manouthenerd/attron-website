<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ATTRON CAB</title>
    <link rel="shortcut icon" href="/favico.co/" type="image/x-icon">
    <link rel="shortcut icon" href="/favico.png/" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/css/style.css')

    <link rel="shortcut icon" href="./assets/logo-ATTRON.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>

</head>

<body>

    <div id="loader-box">
        <p class="loader-text">
            ATTRON CAB
            <img src="/assets/logo-ATTRON.png" alt="logo ATTRON" width="100" height="100">
        </p>
        <p class="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </p>
    </div>

    @include('components.navbar')
