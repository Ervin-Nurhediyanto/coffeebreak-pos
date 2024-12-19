<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Auth Page</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full overflow scrollbar-none">
  <div class="min-h-full">
    <x-navbars.nav-index></x-navbars.nav-index>
    <main class="h-100vh bg-home">
      <div>{{ $slot }}</div>
    </main>
  </div>
</body>
</html>