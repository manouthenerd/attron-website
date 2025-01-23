@include('partials.header')


<main class="mt-4">
    <h3 class="text-center mb-8 font-bold text-[25px] text-[#053A4A]">
        Veuillez remplire le formulaire ci-dessous
    </h3>

    <div class="w-full max-w-lg my-0 mx-auto">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              Nom et prénoms
            </label>
            <input class="shadow outline-none appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" id="username"  type="text" placeholder="Marc Arthur">
          </div>
          <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="contact">
              Numéro de téléphone
            </label>
            <input class="shadow appearance-none border border-gray-100 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="contact" type="password" placeholder="+225012030405">
          </div>
          <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="contact">
              Adresse email
            </label>
            <input class="shadow appearance-none border border-gray-100 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="contact@gmail.com">
          </div>

          <div class="flex items-center justify-between">
            <button class="bg-gray-500 hover:bg-[#053A4A] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
              Soumettre le formulaire
            </button>
          </div>
        </form>
       
      </div>
</main>


@include('partials.footer')
