<div class="bg-primary-400 w-full text-white">
    <div class="container py-4 flex justify-between items-center">
       <a href="{{ home_url('/') }}" class="text-4xl font-extrabold italic text-white">
            <img src="{{ get_theme_file_uri('resources/images/logoakorn.png') }}" alt="Akorn">
        </a>
        
        @include('components.navigation.menu-desktop')

        <x-button variant="custom" size='md' class="bg-orange-400"> 
            <span class="lg:hidden">Kontakt</span>
            <span class="hidden lg:inline">Darmowa wycena</span>
        </x-button>

        <button
            type="button"
            class="grid h-12 w-12 place-items-center cursor-pointer lg:hidden"
            data-menu-toggle
            aria-controls="mobile-menu"
            aria-expanded="false"
          >
            <x-icons.hamburger />
          </button>
    </div>
    @include('components.navigation.menu-mobile')
</div>