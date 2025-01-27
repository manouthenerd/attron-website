@props(['title', 'img', 'href'])

<div class="grid shadow-sm shadow-[#bcbcbc] bg-darkGold gap-2 p-2 rounded-sm space-y-2  max-w-[250px] min-h-[250px] border border-solid border-darkGold">
    <p class="text-darkBlue font-bold text-center">{{  $title }}</p>
    <div>
        <img class="rounded-sm" src="./assets/img/{{$img}}" alt="image d'illustration" />
        <p class="h-[100px] overflow-hidden text-ellipsis leading-[1.5rem] mt-4">
            {{ $slot }}
        </p>
    </div>
    <div class="w-full">
        <a href="{{$href}}"  class="block p-2 rounded-sm text-darkBlue text-center font-[600] border border-solid border-darkBlue hover:text-white hover:bg-darkBlue transition-all">Lire la suite</a>
    </div>
</div>
