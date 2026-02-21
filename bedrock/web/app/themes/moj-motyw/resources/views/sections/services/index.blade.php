{{-- Sekcja Usługi — Strona Główna --}}
<section class="bg-white py-12 lg:py-4">
    <div class="container-own flex flex-col lg:flex-row gap-[40px] lg:gap-[80px] lg:items-center">

        {{-- Lewa kolumna: intro --}}
        <div class="flex flex-col gap-8 lg:gap-14 lg:flex-1">
            <div class="flex flex-col gap-4">
                <h2 class="display-md-regular lg:display-lg-regular text-black">
                    {{ $uslugi['tytul'] ?? '' }}
                </h2>
                <p class="text-md-regular text-black">
                    {{ $uslugi['opis'] ?? '' }}
                </p>
            </div>

            @php
                $link = $uslugi['przycisk_link'] ?? [];
                $btnHref = $link['url'] ?? '#';
                $btnTarget = $link['target'] ?? '_self';
            @endphp

            <x-button
                variant="custom"
                :href="$btnHref"
                class="bg-blue-300 text-white hover:bg-blue-400 w-full lg:w-fit"
                target="{{ $btnTarget }}"
            >
                {{ $uslugi['przycisk_tekst'] ?? 'Dowiedz się więcej' }}
            </x-button>
        </div>

        {{-- Prawa kolumna: akordeon usług --}}
        @if(!empty($uslugi['lista']))
            <div class="flex flex-col lg:flex-1" data-accordion>
                @foreach($uslugi['lista'] as $i => $item)
                    {{-- Pierwszy element: domyślnie otwarty --}}
                    @if($loop->first)
                        <div
                            class="border-b border-solid border-blue-300 text-blue-300 py-6"
                            data-accordion-item
                        >
                            <button
                                class="flex items-center justify-between w-full text-left cursor-pointer"
                                data-accordion-trigger
                                aria-expanded="true"
                            >
                                <span class="display-xs-medium lg:display-sm-medium">
                                    {{ $item['nazwa'] ?? '' }}
                                </span>
                                <x-icons.chevron class="rotate-90 shrink-0" data-accordion-icon />
                            </button>
                            <div class="overflow-hidden transition-[max-height] duration-300" data-accordion-content>
                                <p class="text-md-regular text-black pt-4">
                                    {{ $item['opis'] ?? '' }}
                                </p>
                            </div>
                        </div>
                    @else
                        <div
                            class="border-b border-solid border-[#8e8e8e] text-black py-6"
                            data-accordion-item
                        >
                            <button
                                class="flex items-center justify-between w-full text-left cursor-pointer"
                                data-accordion-trigger
                                aria-expanded="false"
                            >
                                <span class="display-xs-medium lg:display-sm-medium">
                                    {{ $item['nazwa'] ?? '' }}
                                </span>
                                <x-icons.chevron class="shrink-0" data-accordion-icon />
                            </button>
                            <div class="overflow-hidden transition-[max-height] duration-300" style="max-height: 0px" data-accordion-content>
                                <p class="text-md-regular text-black pt-4">
                                    {{ $item['opis'] ?? '' }}
                                </p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        @endif

    </div>
</section>