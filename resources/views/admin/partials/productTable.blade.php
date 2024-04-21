<table aria-describedby="info-popup" aria-label="open tickets"
    class="border-t w-full min-h-0 h-full flex flex-col border-gray-900 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr class="border-b flex">
            <th class="font-semibold text-left py-3 pl-3 pr-1 w-24">
                ID
            </th>
            <th class="font-semibold text-left py-3 px-1 flex-1 truncate">
                Nom
            </th>
            <th class="font-semibold text-left py-3 px-1 flex-1 truncate">
                Prix
            </th>
            <th class="font-semibold text-left py-3 px-1 flex-1 truncate">
                Dimension1
            </th>
            <th class="font-semibold text-left py-3 px-1 flex-1 truncate">
                Commune
            </th>
            <th class="font-semibold text-left py-3 px-1 flex-1 truncate">
                Quartier
            </th>
            <th class="font-semibold text-left py-3 px-1 flex-1 truncate">
                Actions
            </th>
        </tr>
    </thead>
    <tbody class="flex w-full flex-col flex-1 min-h-0">


        @foreach ($properties as $property)
            <tr role="row"
                class="flex cursor-pointer bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="py-3 pl-3 pr-1 w-24">
                    #{{ $property->id }}
                </td>
                <td class="py-3 px-1 flex-1">
                    <div class="relative group w-full">
                        <p class="w-full truncate">
                            {{ $property->name }}
                        </p>
                        <!-- dropdown -->
                        <span
                            class="hidden group-hover:block ml-4 mt-10 w-screen max-w-lg absolute top-0 border border-emerald-900 shadow-lg p-6 bg-gray-900 rounded-md z-50 dark:text-white text-gray-900">
                            <article>
                                <header>
                                    <div>
                                        <span
                                            class="px-3 py-1 uppercase text-xs leading-none rounded-sm bg-red-600 text-white">{{ $property->status == 1 ? 'a vendre' : 'a louer' }}</span>
                                        <span class="ml-2 text-gray-700">Incident #12534</span>
                                        <span class="ml-1">(Low)</span>
                                    </div>
                                </header>
                                <section class="mt-5">
                                    <h3 class="text-sm font-semibold mt-3">
                                        {{ $property->details }}
                                    </h3>
                                </section>

                            </article>
                        </span>
                        <!-- end dropdown -->
                    </div>
                </td>
                <td class="py-3 px-1 flex-1 truncate">
                    {{ $property->price }} $
                </td>
                <td class="py-3 px-1 flex-1 truncate">
                    {{ $property->height }} sur {{ $property->width }}
                </td>
                <td class="py-3 px-1 flex-1 truncate">
                    {{ $property->quater->township->name }}
                </td>
                <td class="py-3 px-1 flex-1 truncate">
                    {{ $property->quater->name }}
                </td>
                <td class="py-3 px-1 flex-1  flex gap-2">
                    @if (request()->routeIs('reporting.index'))
                        <a href="{{ route('boost.show', ['property' => $property->id]) }}"
                            class="text-blue-500">Promouvoir</a>
                    @else
                        <form action="{{ route('admin.property.destroy', ['property' => $property->id]) }}"
                            method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="text-red-500">supprimer</button>
                        </form>
                        <a href="{{ route('admin.property.edit', ['property' => $property->id]) }}"
                            class="text-blue-500">modifier</a>
                        <form action="{{ route('admin.property.update', ['property' => $property->id]) }}"
                            method="post">
                            @method('put')
                            @csrf
                            <button type="submit" class="text-red-500">marquer comme vendu</button>
                        </form>
                    @endif

                </td>
            </tr>
        @endforeach


    </tbody>
</table>
