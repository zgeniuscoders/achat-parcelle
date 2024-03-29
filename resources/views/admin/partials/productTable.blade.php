<table aria-describedby="info-popup" aria-label="open tickets"
    class="border-t w-full min-h-0 h-full flex flex-col border-gray-900 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr class="border-b flex">
            <th class="font-semibold text-left py-3 pl-3 pr-1 w-24">
                <input type="checkbox" name="" id="" />
            </th>
            <th class="font-semibold text-left py-3 px-1 w-24 truncate">
                ID
            </th>
            <th class="font-semibold text-left py-3 px-1 flex-1 truncate">
                Property name
            </th>
            <th class="font-semibold text-left py-3 px-1 flex-1 truncate">
                Property Size
            </th>
            <th class="font-semibold text-left py-3 px-1 flex-1 truncate">
                Property City
            </th>
            <th class="font-semibold text-left py-3 px-1 flex-1 truncate">
                Property Size
            </th>
        </tr>
    </thead>
    <tbody class="flex w-full flex-col flex-1 min-h-0">


        <tr role="row"
            class="flex cursor-pointer bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <td role="cell" headers="select" class="py-3 pl-3 pr-1 w-24 flex items-start">
                <input class="mt-1" type="checkbox" />
            </td>
            <td class="py-3 px-1 w-24">
                #12534
            </td>
            <td class="py-3 px-1 flex-1">
                <div class="relative group w-full">
                    <p class="w-full truncate">
                        bla bla bal
                    </p>
                    <!-- dropdown -->
                    <span
                        class="hidden group-hover:block ml-4 mt-10 w-screen max-w-lg absolute top-0 border border-emerald-900 shadow-lg p-6 bg-white/5 rounded-md z-50 dark:text-white text-gray-900">
                        <article>
                            <header>
                                <div>
                                    <span
                                        class="px-3 py-1 uppercase text-xs leading-none rounded-sm bg-red-600 text-white">Open</span>
                                    <span class="ml-2 text-gray-700">Incident #12534</span>
                                    <span class="ml-1">(Low)</span>
                                </div>
                            </header>
                            <section class="mt-5">
                                <h1 class="text-sm font-semibold mt-3">
                                    Quo laudantium error corporis accusamus unde,
                                    labore quidem non officiis.
                                </h1>
                                <p class="mt-3">
                                    Hi Team,
                                    <br />
                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Error accusantium molestias fugit commodi
                                    doloremque. <br /><br />
                                    Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit? ...
                                </p>
                            </section>
                            <footer class="mt-4">
                                <p class="text-gray-600">Latest Comments</p>
                                <hr class="mt-1" />
                                <div class="flex mt-3">
                                    <p class="font-semibold">Nico Braun</p>
                                    <p class="ml-auto text-gray-700 text-sm">
                                        Yesterday 10:33
                                    </p>
                                </div>
                                <p class="mt-2">
                                    Dolore odio error inventore sint et dolorum
                                    asperiores exercitationem, quisquam esse.
                                </p>
                            </footer>
                        </article>
                    </span>
                    <!-- end dropdown -->
                </div>
            </td>
            <td class="py-3 px-1 flex-1 truncate">
                Marla Darsuz
            </td>
            <td class="py-3 px-1 flex-1 truncate">
                Tuesday 09:56
            </td>
            <td class="py-3 px-1 flex-1 truncate">
                UK Support
            </td>
        </tr>

    </tbody>
</table>
