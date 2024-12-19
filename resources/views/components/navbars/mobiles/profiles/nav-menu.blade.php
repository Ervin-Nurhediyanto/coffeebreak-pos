@php
$options = [
  (object) ['route' => '#', 'name' => 'Your Profile'],
  (object) ['route' => '#', 'name' => 'Settings'],
  (object) ['route' => '#', 'name' => 'Sign out'],
];
@endphp

<div class="mt-3 space-y-1 px-2">
  @foreach ($options as $option)
  <a
    href="{{ $option->route }}"
    class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">
    {{ $option->name }}
  </a>
  @endforeach
</div>