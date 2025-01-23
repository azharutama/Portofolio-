!<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/app.js','resources/css/style.css'])
  <title>{{ $title }}</title>
</head>
<body>

  <main>

    <x-navbar></x-navbar>

    <div class="">
      {{ $slot }}
    </div>
  </main>

</body>
</html>
