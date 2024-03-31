@extends('layouts.default')

@section('title')
    {{ $property->name }} dimension {{ $property->height }} sur {{ $property->width }}
@endsection

@section('main')
    <main class="mt-40 container mx-auto px-4 lg:px-30">
        <section>
            <article>

                {{-- property image --}}
                <div>
                    <div class="w-full rounded-md overflow-hidden">
                        <img src="/storage/{{ $property->image }}" alt="image de la parcelle {{ $property->name }}"
                            class="w-full object-cover">
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
                        <div>
                            <h1 class="text-2xl font-medium dark:text-white text-gray-900">{{ $property->name }}</h1>
                            <h5 class="text-gray-50 font-medium">
                                <a href="{{ route('property.index') }}?township={{ $property->quater->township->id }}">{{ $property->quater->township->name }}</a>,
                                    <a href="{{ route('property.index') }}?quater={{ $property->quater->id }}">{{ $property->quater->name }}</a>
                            </h5>
                        </div>
                        <h2 class="dark:text-white text-gray-900 text-xl">${{ $property->getFormatedPrice() }}</h2>
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
                        <h3 class="text-xl font-medium">{{ $property->user->name }}</h3>
                        <h4 class="text-sm"><a href="">{{ $property->user->email }}</a></h4>
                    </div>
                </div>

            </article>
        </section>
    </main>
@endsection
