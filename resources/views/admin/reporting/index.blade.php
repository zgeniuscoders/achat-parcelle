@extends('admin.layouts.admin')


@section('header')
    <!-- section body header -->
    <header aria-label="page caption" class="flex-none flex h-16 dark:bg-white/5 border-t px-4 items-center">
        <h1 id="page-caption" class="font-semibold text-lg">Reporting</h1>
    </header>
@endsection


@section('top-nav')
    @include('admin.partials.topNav')
@endsection

@section('main')
<main class="min-h-0 gap-4 my-4 px-4">
    @include('admin.partials.productTable')
</main>
@endsection
