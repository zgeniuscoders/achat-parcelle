<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
</head>

<body class="dark:bg-gray-900 flex font-poppins items-center justify-center">
    <div class="h-screen w-screen flex justify-center items-center dark:bg-gray-900">
        <div class="grid gap-8">
            <div id="back-div" class="bg-gradient-to-r to-emerald-600 from-sky-400 rounded-[26px] m-4 w-[600px]">
                <div
                    class="border-[20px] border-transparent rounded-[20px] dark:bg-gray-900 bg-white shadow-lg xl:p-10 2xl:p-10 lg:p-10 md:p-10 sm:p-2 m-2">
                    <h1 class="pt-4 pb-6 font-bold dark:text-gray-400 text-5xl text-center cursor-default">
                        @yield('text')
                    </h1>
                    @yield('main')
                    
                    @yield('footer')

                </div>
            </div>
        </div>
    </div>
</body>

</html>
