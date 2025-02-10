@props(['title', 'img'])

<div class="card grid shadow-sm shadow-[#bcbcbc] bg-[#9d8c477d] gap-2 p-2 rounded-sm space-y-2  max-w-[250px] min-h-[250px] border border-solid border-[#9D8C47]">
    <p class="text-darkBlue font-bold text-center">{{  $title }}</p>
    <div>
        <img class="rounded-sm" src="./assets/img/{{$img}}" alt="image d'illustration" />
        <p style="scrollbar-width: none" class="h-[150px] overflow-y-scroll text-ellipsis leading-[1.5rem] mt-4">
            {{ $slot }}
        </p>
    </div>
</div>
