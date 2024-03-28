@extends('admin.layouts.admin')


@section('header')
    <!-- section body header -->
    <header aria-label="page caption" class="flex-none flex h-16 dark:bg-white/5 border-t px-4 items-center">
        <h1 id="page-caption" class="font-semibold text-lg">Dashboard</h1>
    </header>
@endsection

@section('main')
    <!-- main content -->
    <main class="flex-grow flex min-h-0 gap-4 my-4 px-4">
        <!-- section update to tickets -->
        <section class="flex flex-col p-4 w-full max-w-sm flex-none bg-white/5 min-h-0 overflow-auto">
            <h1 class="font-semibold mb-3">
                Updates to your tickets
            </h1>
            <ul>
                <li>
                    <article tabindex="0"
                        class="cursor-pointer border rounded-md p-3 bg-white/5 flex text-gray-700 mb-2 hover:border-emerald-500 focus:outline-none focus:border-emerald-500">
                        <span class="flex-none pt-1 pr-2">
                            <img class="h-8 w-8 rounded-md"
                                src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
                        </span>
                        <div class="flex-1">
                            <header class="mb-1">
                                Tarun T <span class="font-semibold">commented</span> on
                                <h1 class="inline">"RE: WPMS issue".</h1>
                            </header>
                            <p class="text-gray-600">
                                Hi Mazhar, Please note this issue comes when user is not
                                closing or logout sy…
                            </p>
                            <footer class="text-gray-500 mt-2 text-sm">
                                Friday 22:16
                            </footer>
                        </div>
                    </article>
                </li>

            </ul>
        </section>

        <!-- section content -->
        <section aria-label="main content" class="flex min-h-0 flex-col flex-auto">
            <!-- content navigation -->
            <nav class="bg-white/5 flex p-4">
                <!-- open tickets nav -->
                <section aria-labelledby="open-tickets-tabs-label" class="mr-4 focus:outline-none">
                    <label id="open-tickets-tabs-label" class="font-semibold block mb-1 text-sm">Open Tickets
                        <span class="font-normal text-gray-700">(current)</span>
                    </label>
                    <ul class="flex">
                        <li>
                            <button
                                class="focus:outline-none focus:bg-emerald-200 border-gray-900 p-2 rounded-l-md border border-r-0 bg-white/5 flex flex-col items-center w-24">
                                <p class="font-semibold text-lg">6</p>
                                <p class="text-sm uppercase text-gray-600">
                                    You
                                </p>
                            </button>
                        </li>
                        <li>
                            <button
                                class="focus:outline-none focus:bg-emerald-200 border-gray-900 p-2 border rounded-r-md bg-white/5 flex flex-col items-center w-24 cursor-pointer">
                                <p class="font-semibold text-lg">23</p>
                                <p class="text-sm uppercase text-gray-600">
                                    Groups
                                </p>
                            </button>
                        </li>
                    </ul>
                </section>
                <!-- stats nav -->
                <section aria-labelledby="ticket-statistics-tabs-label" class="pb-2">
                    <label id="ticket-statistics-tabs-label" class="font-semibold block mb-1 text-sm">Ticket
                        Statistics
                        <span class="font-normal text-gray-700">(this week)</span></label>
                    <ul class="flex">
                        <li>
                            <button
                                class="focus:outline-none focus:bg-emerald-200 border-gray-900 p-2 rounded-l-md border border-r-0 bg-white/5 flex flex-col items-center w-24">
                                <p class="font-semibold text-lg">16</p>
                                <p class="uppercase text-gray-600 text-sm">
                                    good
                                </p>
                            </button>
                        </li>
                        <li>
                            <button
                                class="focus:outline-none focus:bg-emerald-200 border-gray-900 p-2 border border-r-0 bg-white/5 flex flex-col items-center w-24">
                                <p class="font-semibold text-lg">2</p>
                                <p class="uppercase text-gray-600 text-sm">
                                    bad
                                </p>
                            </button>
                        </li>

                        <li>
                            <button
                                class="focus:outline-none focus:bg-emerald-200 border-gray-900 p-2 border rounded-r-md bg-white/5 flex flex-col items-center w-24">
                                <p class="font-semibold text-lg">32</p>
                                <p class="uppercase text-gray-600 text-sm">
                                    solved
                                </p>
                            </button>
                        </li>
                    </ul>
                </section>
            </nav>

            <!-- content caption -->
            <header class="bg-white/5 border-t flex items-center py-2 px-4 border-gray-900">
                <div class="flex">
                    <h2 id="content-caption" class="font-semibold">
                        Tickets requiring your attention (6)
                    </h2>
                    <span class="ml-3 group relative">
                        <button role="details" aria-controls="info-popup"
                            class="text-blue-700 border-b border-dotted border-blue-700 focus:outline-none text-sm">
                            What is this?
                        </button>
                        <div role="tooltip" id="info-popup"
                            class="absolute pt-1 rounded-md rounded-t-lg right-0 transform translate-x-40 mx-auto hidden group-hover:block z-50">
                            <div class="border rounded-md rounded-t-lg shadow-lg bg-white w-full max-w-xs w-screen">
                                <header class="font-semibold rounded-t-lg bg-gray-300 px-4 py-2">
                                    People are waiting for replies!
                                </header>
                                <div class="p-4 border-t">
                                    <p class="mb-4">
                                        These are new or open tickets that are assigned to
                                        you, unassinged in your group(s) or not assigned to
                                        any group.
                                    </p>
                                    <p class="mb-1">
                                        They are ordered by priority and requester update date
                                        (oldest first).
                                    </p>
                                </div>
                            </div>
                        </div>
                    </span>
                </div>
                <div class="ml-auto">
                    <button title="See available tickets in this view" aria-label="play"
                        class="border rounded-md px-3 py-2 leading-none">
                        Play
                    </button>
                </div>
            </header>

            @include('admin.partials.productTable')
        </section>
    </main>
@endsection
