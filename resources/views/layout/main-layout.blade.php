<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="shortcut icon" href="/assets/genesis-fav.png" type="image/png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

         <title>{{ $title ? $title . ' | ' : '' }} {{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        
    </head>
    <body>
        <div class="content">
            @include('components.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header>
                    <div>
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="container mb-5">
                                <div class="row">
                                    <div {{ $attributes->merge(['class' => 'col-12 main-slot p-0']) }}>
                                        {{ $slot }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
        <footer>
            @include('components.footer')
        </footer>
    </body>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</html>