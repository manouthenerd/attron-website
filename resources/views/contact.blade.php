@include('partials.header')


<main class="mt-4">
    <h3 class="text-center mb-8 font-bold text-[25px] text-darkBlue">
        Veuillez remplire le formulaire ci-dessous
    </h3>

    <div class="w-full max-w-lg my-0 mx-auto">

        <div class="bg-[#BDCEBD] p-4 rounded-sm hidden" id="contact-message">
            Votre message a été envoyé avec succès.
        </div>


        <form id="contact-form" method="post" action="/contact" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Nom et prénoms
                </label>
                <input
                    id="username" value="{{ old('username') }}" 
                    required name="username" type="text"
                    placeholder="ANZAN Kouadio Jean"
                    class="shadow outline-none appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight"
                >
                @error('username')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="contact">
                    Numéro de téléphone
                </label>
                <input
                    id="contact" value="{{ old('contact') }}" 
                    required name="contact" type="text"
                    placeholder="+225012030405"
                    class="shadow appearance-none border border-gray-100 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                >
                @error('contact')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Adresse email
                </label>
                <input
                    id="email" value="{{ old('email') }}" required type="email" name="email"
                    placeholder="votre adresse email"
                    class="shadow appearance-none border border-gray-100 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                >
                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="object">
                    Objet de votre demande
                </label>
                <input
                    class="shadow appearance-none border border-gray-100 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="subject" value="{{ old('subject') }}" required type="text" name="subject"
                    placeholder="Entrer l'objet ici...">
                @error('subject')
                    <p class="error">{{ $message }}</p>
                @enderror

            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
                    Votre demande
                </label>
                <textarea
                    class="h-[150px] shadow border border-gray-100 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="message" value="{{ old('message') }}" name="message" required
                    placeholder="Veuillez exprimer votre demande ici..."></textarea>
                @error('message')
                    <p class="error">{{ $message }}</p>
                @enderror

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
