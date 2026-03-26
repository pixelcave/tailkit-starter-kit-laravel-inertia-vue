<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicons -->
    <link rel="icon" href="favicon.svg" sizes="any" type="image/svg+xml" />
    <link rel="icon" href="favicon.png" type="image/png" />

    <!-- Inter + Caveat web fonts from Bunny.net (GDPR compliant) -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link
      href="https://fonts.bunny.net/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.bunny.net/css2?family=Caveat:wght@600&display=swap"
      rel="stylesheet"
    />

    <!-- Styles / Scripts -->
    @vite("resources/js/app.js")
    <x-inertia::head>
      <title>Tailkit Project</title>
    </x-inertia::head>
  </head>
  <body class="antialiased">
    <x-inertia::app />
  </body>
</html>
