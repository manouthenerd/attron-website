<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ATRON CAB</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/css/style.css')

    <link rel="shortcut icon" href="./assets/logo-atron.png" type="image/x-icon" />
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js" defer></script>
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