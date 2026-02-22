{{-- drawer --}}
<aside
  id="mobile-menu"
  class="fixed right-0 top-0 z-50 h-full w-full translate-x-full bg-primary-400 transition-transform duration-200"
  aria-hidden="true"
>
  <div class="flex items-center justify-between border-b px-4 py-4 ">
    <span class="font-semibold !text-white">Menu</span>
    <button type="button" class="h-10 w-10 text-white" data-menu-close label="Zamknij menu">✕</button>
  </div>

  <nav class="p-4">
    {!! wp_nav_menu([
      'theme_location' => 'primary_navigation',
      'menu_class' => 'flex flex-col gap-3 text-lg font-semibold',
      'container' => false,
      'echo' => false,
    ]) !!}
  </nav>
</aside>
