<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ATTRON CAB - Dashboard</title>
    @vite('resources/css/app.css')

    <style>

        thead {
            background-color: #b4c0887a;
        }
        tr:hover {
            background-color: #b4c0887a;
            transition: background-color .5s;
        }
    </style>
</head>

<body class="bg-[whitesmoke]">

    <nav class="w-full shadow-sm flex justify-between items-center bg-white min-h-[20vh] px-4">
        <div class="h-[100px] w-[100px]">
            <img class="w-full h-full" src="/assets/logo-attron.png" alt="logo du siten ATTRON CAB">
        </div>
        <div>
            <form action="/logout">
                @method('DELETE')
                <button class="p-2 text-center rounded-sm text-darkBlue font-bold">Se déconnecter</button>
            </form>
        </div>
    </nav>

    <main class="mt-4 w-full mx-2">

        <section>
            <div class="flex justify-between items-center p-2 m-4">
                <p>Liste des services actuels</p>
                <p class="border border-solid bg-darkGold p-2 rounded-sm">
                    <a class="text-center text-white font-bold" href="/services/create">Ajouter un service</a>
                </p>
            </div>

            <div class="mt-4 p-2 m-4">
                <table class="border border-solid border-collapse border-black table-auto w-full">
                    <thead>
                        <tr class="text-[15px]">
                            <th class="border border-solid border-black">ID</th>
                            <th class="border border-solid border-black">Titres</th>
                            <th class="border border-solid border-black">Modification</th>
                        </tr>
                    </thead>

                    <tbody>
                        @for ($i = 1; $i < 11; $i++)
                            
                        
                        <tr class="text-center">
                            <td class="border border-solid border-black p-1">{{ $i }}</td>
                            <td class="border border-solid border-black p-1">Service comptabilté</td>
                            <td class="border border-solid border-black p-1"><a class="rounded-sm bg-darkBlue text-white text-center " href="/services/{{$i}}/edit">modifier</a></td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </section>

    </main>
</body>

</html>