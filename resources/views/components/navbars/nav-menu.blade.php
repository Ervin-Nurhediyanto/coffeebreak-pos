@php
$options = [
  (object) ['route' => '/', 'name' => 'Home'],
];

if (Auth::user()) {
  array_push($options, (object)[
    'route' => '/product', 'name' => 'Product',
]);
}
@endphp

<div class="hidden md:block">
  <div class="ml-10 flex items-baseline space-x-4">
    @foreach ($options as $option)
    <x-navbars.nav-link
      href='{{ $option->route }}'
      :active="request()->is('{{ $option->route }}')">
      {{ $option->name }}
    </x-navbars.nav-link>
    @endforeach
  </div>
</div>