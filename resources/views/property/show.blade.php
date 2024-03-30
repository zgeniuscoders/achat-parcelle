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
                    <div class="w-full rounded-md overflow-hidden">
                        <img src="/storage/{{ $property->image }}" alt="" class="w-full object-cover">
                    </div>
                    <div class="grid grid-cols-4 gap-4 mt-4">
                        @foreach ($property->images as $image)
                            <div class="rounded-md overflow-hidden">
                                <img src="/storage/{{ $image }}" alt="image de la parcelle {{ $property->name }}"
                                    class="w-full h-[200px] object-cover">
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- property details --}}
                <div class="my-4">
                    <div class="flex items-center justify-between">
                        <h1 class="text-2xl font-medium dark:text-white text-gray-900">{{ $property->name }}</h1>
                        <h4 class="dark:text-white text-gray-900 text-xl">${{ $property->price }}</h4>
                    </div>
                    <h5 class="text-xl dark:text-white text-gray-900 my-4">Details</h5>
                    <p class="text-white mb-2">{{ $property->details }}
                    </p>
                </div>

                <div class="my-6">
                    <x-button-link buttonTitle="entrer en contanct" />
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
