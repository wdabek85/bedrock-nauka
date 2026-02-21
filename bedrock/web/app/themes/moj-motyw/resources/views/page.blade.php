@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')

    @foreach($sekcje as $wiersz)

    @foreach($wiersz['sekcja_hero'] ?: [] as $hero)
        <div class="bg-gray-900 text-white p-12">
            <h1 class="text-4xl font-bold">{{ $hero['naglowek'] }}</h1>
            <p class="text-xl mt-4">{{ $hero['podtytul'] }}</p>
        </div>
    @endforeach

    @foreach($wiersz['sekcja_tekst'] ?: [] as $tekst)
        <div class="p-8">
            <h2 class="text-2xl font-bold">{{ $tekst['tytul'] }}</h2>
            <p class="mt-4">{{ $tekst['tresc'] }}</p>
        </div>
    @endforeach

@endforeach
    <x-button label="Kliknij" variant="outline">
          <x-slot:iconAfter>
              <x-icons.arrow class="w-[8px] h-[8px]" />
          </x-slot:iconAfter>
      </x-button>
  @endwhile
@endsection