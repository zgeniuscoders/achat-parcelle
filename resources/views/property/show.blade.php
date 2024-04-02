@extends('layouts.default')

@section('title')
    {{ $property->name }} dimension {{ $property->height }} sur {{ $property->width }}
@endsection

@section('main')
    <main class="mt-40 container mx-auto px-4 lg:px-30">
        <section>
            <article>
                <div class="grid lg:grid-cols-2 gap-4">
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
                                        class="w-full h-[100px] object-cover">
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <div class="">

                            <h1 class="text-2xl font-medium dark:text-white text-gray-900">{{ $property->name }}</h1>
                            <h5 class="text-gray-50 font-medium">
                                <a
                                    href="{{ route('property.index') }}?township={{ $property->quater->township->id }}">{{ $property->quater->township->name }}</a>,
                                <a
                                    href="{{ route('property.index') }}?quater={{ $property->quater->id }}">{{ $property->quater->name }}</a>
                            </h5>

                            <h2 class="dark:text-white text-gray-900 text-xl">${{ $property->getFormatedPrice() }}</h2>
                            <h5 class="text-xl dark:text-white text-gray-900 my-4 font-bold">Details</h5>
                            <p class="text-white mb-2">{{ $property->details }}
                        </div>
                    </div>
                </div>

                <table aria-describedby="info-popup" aria-label="open tickets"
                    class="border-t mt-4 w-full min-h-0 h-full flex flex-col border-gray-900 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="border-b flex">
                            <th class="font-semibold text-left py-3 pl-3 pr-1 w-24">
                                Prix
                            </th>
                            <th class="font-semibold text-left py-3 px-1 flex-1 truncate">
                                Hauteur
                            </th>
                            <th class="font-semibold text-left py-3 px-1 flex-1 truncate">
                                Largeur
                            </th>
                            <th class="font-semibold text-left py-3 px-1 flex-1 truncate">
                                Commune
                            </th>
                            <th class="font-semibold text-left py-3 px-1 flex-1 truncate">
                                Quartier
                            </th>
                        </tr>
                    </thead>
                    <tbody class="flex w-full flex-col flex-1 min-h-0">


                        <tr role="row"
                            class="flex cursor-pointer bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="py-3 pl-3 pr-1 w-24">
                                {{ $property->price }} $
                            </td>
                            <td class="py-3 px-1 flex-1 truncate">
                                {{ $property->height }}
                            </td>
                            <td class="py-3 px-1 flex-1 truncate">
                                {{ $property->width }}
                            </td>
                            <td class="py-3 px-1 flex-1 truncate">
                                {{ $property->quater->township->name }}
                            </td>
                            <td class="py-3 px-1 flex-1 truncate">
                                {{ $property->quater->name }}
                            </td>
                        </tr>
                    </tbody>
                </table>


                <div class="my-6">
                    <x-button-link buttonTitle="entrer en contanct" link="{{ route('chat') }}?user={{ $property->user->id }}"/>
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
