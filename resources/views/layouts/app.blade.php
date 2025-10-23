<!doctype html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet"/>
    @vite(['resources/css/app.css','resources/css/tailwind.css', 'resources/js/app.js'])
    @livewireStyles
  </head>
  <body x-data class="is-header-blur" x-bind="$store.global.documentBody">
    <div class="min-h-100vh flex  justify-center grow bg-slate-50 dark:bg-navy-900" x-cloak>
      <x-sidemenu/>
      <x-navigation/>
      <main class="flex-1 mt-10">
        @yield('content')
        {{-- {{ $slot }} --}}
      </main>
      @livewireScripts
    </div>
  </body>
</html>


