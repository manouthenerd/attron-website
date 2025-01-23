<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ATRON CAB</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/css/style.css')

    <link rel="shortcut icon" href="./assets/logo-atron.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>

<body>

    <div id="loader-box">
        <p class="loader-text">
            ATRON CAB
            <img src="/assets/logo-atron.png" alt="logo atron" width="100" height="100">
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
