<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('scripts')
</head>

<body class="dark:bg-gray-900 overflow-x-hidden" id="app">
    <div class="fixed top-0 left-0 bottom-0 right-0 z-50 backdrop-blur-lg flex items-center justify-center">
        <section class="w-[600px] dark:bg-gray-900 bg-white dark:text-white p-4 rounded-md">
            <h3 class="font-medium mb-4 text-lg">Filtre & Recherche</h3>
            <form method="GET" action="" class="">
                <input type="search" name="" id="" placeholder="Recherche par mot cle"
                    class="w-full outline-none border-none p-2 rounded-md border border-gray-400 dark:text-gray-900">

                <h3 class="my-4 font-medium text-gray-900 dark:text-white">Selectionner une commune</h3>
                <div>
                    <townships-chips />
                </div>

                <h3 class="my-4 font-medium text-gray-900 dark:text-white">Selectionner un quartier</h3>
                <div>
                    <quater-chips/>
                </div>

                <div class="relative my-4">
                    <label for="labels-range-input" class="sr-only">Labels range</label>
                    <input id="labels-range-input" type="range" value="1000" min="100" max="1500"
                        class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700" name="price">
                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-0 -bottom-6">Min ($100)</span>
                    <span
                        class="text-sm text-gray-500 dark:text-gray-400 absolute start-1/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">$500</span>
                    <span
                        class="text-sm text-gray-500 dark:text-gray-400 absolute start-2/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">$1000</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute end-0 -bottom-6">Max ($1500)</span>
                </div>

                <div class="mt-4">
                    <button type="submit" name="" id="" placeholder="Recherche par mot cle"
                    class="w-full outline-none border-none p-2 rounded-md border bg-emerald-600">Rechercher</button>
                </div>
            </form>
        </section>
    </div>
    @include('partials.navbarComponent')
    @yield('main')
    @include('partials.footerComponent')
</body>

</html>
