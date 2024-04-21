@extends('admin.layouts.admin')


@section('header')
    <!-- section body header -->
    <header aria-label="page caption" class="flex-none flex h-16 dark:bg-white/5 border-t px-4 items-center">
        <h1 id="page-caption" class="font-semibold text-lg">Promouvoir le bien ({{ $property->name }})</h1>
    </header>
@endsection


@section('top-nav')
    @include('admin.partials.topNav')
@endsection

@section('main')
    <main class="min-h-0 gap-4 my-4 px-4">
        <!-- Overlapping background -->
        <div aria-hidden="true" class="absolute bottom-0 hidden h-6 w-full bg-gray-50 dark:bg-white/5 lg:block"></div>

        <div class="relative mx-auto max-w-2xl px-6 pt-16 text-center sm:pt-32 lg:max-w-7xl lg:px-8">
            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">
                <span class="block lg:inline">Tarification simple,</span>
                <span class="block lg:inline">sans engagement.</span>
            </h1>
            <p class="mt-4 text-xl text-emerald-100">Tout ce dont vous avez besoin, rien de superflu. Choisissez un
                plan qui correspond le mieux à votre entreprise.</p>
        </div>
        <boost :propertyId="{{ $property->id }}"/>
    </main>
@endsection
