@include('partials.header')


<main class="mt-4">
    <h3 class="text-center mb-8 font-bold text-[25px] text-darkBlue">
        Veuillez remplire le formulaire ci-dessous
    </h3>

    <div class="w-full max-w-lg my-0 mx-auto">

        <div class="bg-[#BDCEBD] p-4 rounded-sm">
          Votre message a été envoyé avec succès.
        </div>


        <form method="post" action="/contact" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Nom et prénoms
                </label>
                <input
                    class="shadow outline-none appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight"
                    id="username" required name="username" type="text" placeholder="Marc Arthur">
            </div>
            
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="contact">
                    Numéro de téléphone
                </label>
                <input
                    class="shadow appearance-none border border-gray-100 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="contact" required name="contact" type="password" placeholder="+225012030405">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Adresse email
                </label>
                <input
                    class="shadow appearance-none border border-gray-100 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" required type="email" name="email" placeholder="contact@gmail.com">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
                    Votre préoccupation
                </label>
                <textarea
                    class="h-[150px] shadow border border-gray-100 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="message" name="message" required placeholder="Veuillez exprimer votre besoin ici..."></textarea>

            </div>

            <div class="flex items-center justify-between">
                <button
                    class="bg-gray-500 hover:bg-[#053A4A] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Envoyer
                </button>
            </div>
        </form>

    </div>

</main>


@include('partials.footer')
