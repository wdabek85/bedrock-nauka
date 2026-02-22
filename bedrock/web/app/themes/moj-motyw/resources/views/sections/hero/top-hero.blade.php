<div class="bg-primary-400 text-white">
    <div class="w-full py-6 px-5 lg:max-w-[1440px] m-auto flex flex-col gap-6 items-center lg:flex-row  lg:pl-20 lg:py-0 lg:pr-0">
        <div class="flex gap-4 flex-col">
            <h1 class="display-md-medium">{{ $sekcjeHero['tytul']}}</h1>
            <p class="text-md-regular">{{$sekcjeHero['podtytul']}}</p>
            <x-button variant="outline" size='md' class="bg-orange-400 lg:w-fit"> 
                <span>Dowiedz się o nas Więcej</span>
                 <x-slot:iconAfter>
                    <x-icons.arrow />
                </x-slot:iconAfter>
            </x-button>
        </div>
        @if($sekcjeHero['image'])
            <img src="{{ $sekcjeHero['image']['url'] }}" alt="{{ $sekcjeHero['image']['alt'] }}">
        @endif
    </div>
    
</div>
