@extends('layouts.default')

@section('title')
    Page D'accueil
@endsection


@section('main')
    <main class="bg-bluer">

        <section
            class="w-[200px] h-[200px] blur-3xl opacity-50 bg-gradient-to-r to-emerald-600 from-sky-400 rounded-full absolute -bottom-0 -z-50 animate-spin animate">
        </section>

       

        @include('partials.bannerSection')

        @include('partials.homeProductSection')

        @include('partials.aboutSection')

    
        <section class="my-20">

            <div class="container mx-auto lg:px-30 px-10 text-center">
                <h3
                    class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    Best Sellers</h3>
                <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Here at
                    Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and
                    drive economic growth.</p>
            </div>

            <section class="grid lg:grid-cols-3 gap-3 px-4 relative">
                <section
                    class="w-[150px] h-[300px] blur-3xl  bg-gradient-to-r to-gray-900 from-gray-900 rounded-full absolute -bottom-0 -right-20">
                </section>
                <section
                    class="w-[150px] h-[300px] blur-3xl  bg-gradient-to-r to-gray-900 from-gray-900 rounded-full absolute -bottom-0 -left-0">
                </section>

                @for ($i = 0; $i < 3; $i++)
                    <article
                        class="flex flex-col items-center justify-center p-8 text-center bg-white border-gray-200 rounded-lg md:rounded-se-lg dark:bg-gray-800 dark:border-gray-700">
                        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Efficient Collaborating</h3>
                            <p class="my-4">You have many examples that can be used to create a fast prototype for your
                                team."</p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center ">
                            <img class="rounded-full w-9 h-9"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"
                                alt="profile picture">
                            <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                                <div>Joseph McFall</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">CTO at Google</div>
                            </div>
                        </figcaption>
                    </article>
                @endfor

            </section>


        </section>

    </main>
@endsection
