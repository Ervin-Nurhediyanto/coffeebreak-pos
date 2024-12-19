<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Product Page</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  @vite(['resources/css/app.css','resources/js/app.js'])
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full overflow scrollbar-none">
  <div class="min-h-full">
    <x-navbars.nav-index></x-navbars.nav-index>
    <main>
      <div>{{ $slot }}</div>
    </main>
  </div>
</body>
</html>