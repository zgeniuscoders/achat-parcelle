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

        <div>
            <button type="submit"
                class="mx-2 text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800"><a
                    href="{{ route('admin.user.create') }}">Ajouter Un Utilisateur</a></button>

            <button type="submit"
                class="mx-2 text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800"><a
                    href="{{ route('admin.role.index') }}">Ajouter Un Role</a></button>
        </div>

        <table aria-describedby="info-popup" aria-label="open tickets"
            class="border-t w-full min-h-0 h-full flex flex-col border-gray-900 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mt-4">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="border-b flex">
                    <th class="font-semibold text-left py-3 pl-3 pr-1 w-24">
                        ID
                    </th>
                    <th class="font-semibold text-left py-3 px-1 flex-1 truncate">
                        Nom
                    </th>
                    <th class="font-semibold text-left py-3 px-1 flex-1 truncate">
                        Email
                    </th>
                    <th class="font-semibold text-left py-3 px-1 flex-1 truncate">
                        Role
                    </th>
                    <th class="font-semibold text-left py-3 px-1 flex-1 truncate">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="flex w-full flex-col flex-1 min-h-0">


                @foreach ($users as $user)
                    <tr role="row"
                        class="flex cursor-pointer bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="py-3 pl-3 pr-1 w-24">
                            #{{ $user->id }}
                        </td>
                        <td class="py-3 px-1 flex-1">
                            {{ $user->name }}
                        </td>

                        <td class="py-3 px-1 flex-1">
                            {{ $user->email }}
                        </td>
                        <td class="py-3 px-1 flex-1">
                            {{ $user->role?->title }}
                        </td>
                        <td class="py-3 px-1 flex-1  flex gap-2">
                            <form action="{{ route('admin.user.destroy', ['user' => $user->id]) }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="text-red-500">Supprimer</button>
                            </form>
                            <a href="{{ route('admin.user.edit', ['user' => $user->id]) }}"
                                class="text-blue-500">Modifer</a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>

    </main>
@endsection
