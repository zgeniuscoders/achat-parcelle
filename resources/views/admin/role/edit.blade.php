@extends('admin.layouts.admin')


@section('header')
    <!-- section body header -->
    <header aria-label="page caption" class="flex-none flex h-16 dark:bg-white/5 border-t px-4 items-center">
        <h1 id="page-caption" class="font-semibold text-lg">Utilisateur</h1>
    </header>
@endsection

@section('main')
    <main class="px-4 my-4 ">
        <x-flash-component />

        <form action="{{ route("admin.role.update", ["role" => $role->id]) }}" method="post">

            @csrf
            @method("put")
            <div class="">
                <x-input-component name='title' title='Role' placeholder='Administrateur'  value="{{ $role->title }}"/>
            </div>

            <button type="submit"
                class="mt-4 text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">Modifier</button>
        </form>

    </main>
@endsection
