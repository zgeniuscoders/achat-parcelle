<!-- component -->
<!DOCTYPE html>
<html class="h-full" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="./tailwind.css" />
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        html,
        body {
            width: 100%;
            height: 100%;
        }

        /* zendesk styles */
        .h-16 {
            height: 50px;
        }

        svg {
            fill: #ffffff;
        }
    </style>
</head>

<body class="h-full" id="app">


    <div class="h-full w-full flex overflow-hidden antialiased text-gray-800 bg-white dark:bg-gray-900 dark:text-white">
        <!-- section body side nav -->
        @include('admin.partials.sideBar')




        <div class="flex-1 flex flex-col overflow-auto">
            <!-- section body top nav -->
            @yield('top-nav')

            @yield('header')

            @yield('main')

        </div>
    </div>

</body>
