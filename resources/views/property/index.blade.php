@extends('layouts.default')

@section('title')
    Tout nos article
@endsection

@section('main')
    <main class="relative mt-40" id="app">
        <div class="container mx-auto lg:px-30 px-4 text-center">
            <h1
                class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                Tout nos bien</h1>
            <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Here at
                Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and
                drive economic growth.</p>
        </div>

        @include('partials.tabs')



        <section class="relative container mx-auto px-4 lg:px-30 gap-4">

            <div>
                <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block text-center"
                    id="tabs-home01" role="tabpanel" aria-labelledby="tabs-home-tab01" data-twe-tab-active>


                    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-3 text-start mb-8">
                        @foreach ($properties as $property)
                            @include('partials.productItem')
                        @endforeach
                    </div>

                </div>

                <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
                    id="tabs-profile01" role="tabpanel" aria-labelledby="tabs-profile-tab01">
                    Tab 2 content
                </div>
                <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
                    id="tabs-messages01" role="tabpanel" aria-labelledby="tabs-profile-tab01">
                    Tab 3 content
                </div>
                <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
                    id="tabs-contact01" role="tabpanel" aria-labelledby="tabs-contact-tab01">
                    Tab 4 content
                </div>
            </div>

            <section
                class="w-[200px] h-[200px] blur-3xl opacity-50 bg-gradient-to-r to-emerald-600 from-sky-400 rounded-full absolute top-[300px] -z-50 animate-spin animate">
            </section>

            {{ $properties->links() }}

        </section>


    </main>
@endsection
