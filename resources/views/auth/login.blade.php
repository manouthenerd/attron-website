{{-- @include('partials.header') --}}

<!DOCTYPE html>
<html lang="fr" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ATTRON CAB - Connexion</title>
    @vite('resources/css/app.css')
</head>

<body class="h-full">

    <main>

        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">
                    Connexion à votre espace
                </h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
                        <div class="mt-2">
                            <input type="email" name="email" id="email"
                                required
                                class="block w-full border border-darkBlue focus:outline-none focus:border-none focus:transition-all rounded-md bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 focus:outline-darkBlue sm:text-sm/6">
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm/6 font-medium text-gray-900">Mot de passe</label>
                            <div class="text-sm">
                                <a href="#" class="font-semibold text-darkBlue hover:text-darkGold">
                                    Mot de passe oublié ?
                                </a>
                            </div>
                        </div>
                        <div class="mt-2">
                            <input type="password" name="password" id="password" autocomplete="current-password"
                                required
                                class="block w-full border border-darkBlue focus:outline-none focus:border-none focus:transition-all rounded-md bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 focus:outline-darkBlue sm:text-sm/6">
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-darkBlue px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs focus-visible:outline-2 focus-visible:outline-offset-2 hover:bg-darkGold transition-colors focus-visible:outline-darkBlue">Se
                            connecter</button>
                    </div>
                </form>
            </div>
        </div>

    </main>
</body>

</html>
