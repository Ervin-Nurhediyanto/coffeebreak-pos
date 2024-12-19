@php
$options = [
  (object) ['route' => '/', 'name' => 'Home'],
  // (object) ['route' => '/about', 'name' => 'About']
];
@endphp

<div x-show="isOpen" class="md:hidden" id="mobile-menu">
  <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
    {{-- MENU BAR --}}
    @foreach ($options as $option)
    <x-navbars.mobiles.nav-link
      href='{{ $option->route }}'
      :active="request()->is('{{ $option->route }}')">
      {{ $option->name }}
    </x-navbars.mobiles.nav-link>
    @endforeach
  </div>
  <x-navbars.mobiles.profiles.nav-index/>
</div>