{{-- Sekcja Technologie — Strona Główna --}}
<x-header-section
    headerLabel="Sprawdź w czym pracujemy"
    underHeaderLabel="Technologie"
/>

<section class="bg-white pb-8">
    <div class="container-own">
        <div class="flex items-center gap-4 lg:justify-between py-8 overflow-x-auto scrollbar-hide">
            @forelse($technologie as $item)
                <div class="shrink-0 w-[210px] h-[80px] rounded-[5px] overflow-hidden">
                    @if(!empty($item['obrazek']))
                        <img
                            src="{{ $item['obrazek']['url'] }}"
                            alt="{{ $item['obrazek']['alt'] ?? '' }}"
                            class="w-full h-full object-cover"
                        />
                    @endif
                </div>
            @empty
                @for($i = 0; $i < 6; $i++)
                    <div class="shrink-0 w-[210px] h-[80px] rounded-[5px] overflow-hidden lg:flex-1">
                        <img
                            src="{{ get_theme_file_uri('resources/images/tech-placeholder.png') }}"
                            alt="Technologia"
                            class="w-full h-full object-cover"
                        />
                    </div>
                @endfor
            @endforelse
        </div>
    </div>
</section>