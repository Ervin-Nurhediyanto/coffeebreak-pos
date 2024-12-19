<nav class="bg-gray-800" x-data="{ isOpen: false }">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="flex items-center">
        <x-navbars.nav-logo/>
        <x-navbars.nav-menu/>
      </div>
      <div class="hidden md:block">
        <div class="ml-4 flex items-center md:ml-6">
          {{-- <x-bottoms.btn-notification/> --}}
          @if (Auth::user())
            <x-dropdowns.dd-profile/>
          @endif
          {{-- <x-navbars.nav-login/> --}}
        </div>
      </div>
      <div class="-mr-2 flex md:hidden">
        <x-bottoms.mobiles.btn-menu/>
      </div>
    </div>
  </div>
  <x-navbars.mobiles.nav-index/>
</nav>