<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="robots" content="@yield('robots', 'index')">

        @hasSection('meta_title')
            <meta name="title" content="@yield('meta_title')">
        @else
            <meta name="title" content="@yield('page_title', 'Card Olympus')">
        @endif

        <meta name="description" content="@yield('meta_description', 'The most friendly way to buy your Magic the Gathering cards, every process is for your comfort, search, contact, buy, shipment with us.')">
        <meta name="author" content="Atlantox">

        <title>@yield('page_title', 'Card Olympus')</title>
        
        <!-- Styles -->
        @livewireStyles
        @include('_partials.app.styles')
    </head>
    <body class="">
        <!-- Page Heading -->
        @hasSection('header')
            @yield('header')
        @else
            @include('_partials.app.header')
        @endif

        <!-- Page Content -->
        <main class="row col-12 m-0 p-0 pt-5 mt-5 text-center justify-content-center align-items-center">
            @yield('main')
        </main>

        <!-- Page footer -->
        @hasSection('footer')
            @yield('footer')
        @else
            @include('_partials.app.footer')
        @endif

        @stack('modals')
        @livewireScripts
        @include('_partials.app.scripts')
    </body>
</html>
