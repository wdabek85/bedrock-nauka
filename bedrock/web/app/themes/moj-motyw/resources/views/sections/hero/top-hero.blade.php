<div class="bg-gray-900 text-white">
    <div class="max-w-[1440px] m-auto">
        <h1>{{ $sekcjeHero['tytul']}}</h1>
        <p>{{$sekcjeHero['podtytul']}}</p>
        @if($sekcjeHero['image'])
            <img src="{{ $sekcjeHero['image']['url'] }}" alt="{{ $sekcjeHero['image']['alt'] }}">
        @endif
    </div>
    
</div>
