<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title inertia:title>Tailkit Project</title>

    <!-- Favicons -->
    <link rel="icon" href="favicon.svg" sizes="any" type="image/svg+xml" />
    <link rel="icon" href="favicon.png" type="image/png" />

    <!-- Inter web font from Bunny.net (GDPR compliant) -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link
      href="https://fonts.bunny.net/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- Styles / Scripts -->
    @vite(["resources/js/app.js", "resources/js/Pages/{$page["component"]}.vue"])
    @inertiaHead
  </head>
  <body class="antialiased">
    @inertia
  </body>
</html>
