@extends('layouts.default')

@section('title')
    Non produits
@endsection

@section('main')
    <main class="mt-40 container mx-auto px-4 lg:px-30">
        <section>
            <article>

                {{-- property image --}}
                <div>
                    <div class="w-full h-[500px] bg-emerald-600 rounded-md"></div>
                    <div class="grid grid-cols-4 gap-4 mt-4">
                        <div class="bg-emerald-300 h-[300px] rounded-md"></div>
                        <div class="bg-emerald-300 h-[300px] rounded-md"></div>
                        <div class="bg-emerald-300 h-[300px] rounded-md"></div>
                        <div class="bg-emerald-300 h-[300px] rounded-md"></div>
                    </div>
                </div>

                {{-- property details --}}
                <div class="my-4">
                    <div class="flex items-center justify-between">
                        <h3 class="text-2xl font-medium dark:text-white text-gray-900">Property name</h3>
                        <h4 class="dark:text-white text-gray-900 text-xl">$30.000</h4>
                    </div>
                    <h5 class="text-xl dark:text-white text-gray-900 my-4">Details</h5>
                    <p class="text-white mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus accusantium,
                        ex
                        voluptate animi modi
                        dignissimos cumque ullam nemo exercitationem, praesentium quos quia. Unde nam porro quo nihil
                        exercitationem atque doloremque ab, autem ducimus eum consectetur. Ea minus minima nihil doloribus.
                    </p>
                </div>

                <div class="my-6">
                    <x-button-link buttonTitle="entrer en contanct"/>
                </div>

                {{-- property user  --}}
                <div class="flex items-center gap-4 mb-4">
                    <div class="h-14 w-14 rounded-full bg-emerald-400"></div>
                    <div class="dark:text-white text-gray-900">
                        <h3 class="text-xl font-medium">zgeniuscoders</h3>
                        <h4>Kinshasa,Gombe</h4>
                    </div>
                </div>

            </article>
        </section>
    </main>
@endsection
