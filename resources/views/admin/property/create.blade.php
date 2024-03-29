@extends('admin.layouts.admin')


@section('header')
    <!-- section body header -->
    <header aria-label="page caption" class="flex-none flex h-16 dark:bg-white/5 border-t px-4 items-center">
        <h1 id="page-caption" class="font-semibold text-lg">Dashboard</h1>
    </header>
@endsection

@section('main')
    <main class="px-4 my-4 ">

        <x-flash-component/>
        <form action="" method="post" enctype="multipart/form-data">

            @csrf
            <div class="grid gap-6 mb-6 md:grid-cols-2">

                <x-input-component name='name' title='Nom' placeholder='Maison a louer kinshasa masina' />
                <x-input-component name='height' title='Hauteur' placeholder='100' type='number' />
                <x-input-component name='width' title='Largeur' placeholder='100' type='number' />
                <x-input-component name='price' title='Prix' placeholder='100' type='number' />

                <x-select-component name='city' title='Commune' :collections="[1, 2, 3]" choose='Choisir une commune' />
                <x-select-component name='quater' title='Quartier' :collections="[1, 2, 3]" choose='Choisir un quartier' />
                <x-select-component name='category_id' title='Categorie' :collections="[1, 2, 3]" choose='Choisir la categorie' />
                <x-select-component name='type' title='Type' :collections="['louer', 'vendre']" choose='Choisir la categorie' />


                <x-input-component name='price' title='Prix' placeholder='100' type='number' />


                <div>

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload
                        multiple files</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="image" type="file" name="image">

                </div>

                <div>

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="multiple_files">Upload
                        multiple files</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="multiple_files" type="file" multiple>

                </div>


            </div>

            <button type="submit"
                class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">Publier</button>
        </form>

    </main>
@endsection
