<ul class="hidden lg:flex list-none ps-0 border mb-10 border-emerald-300 mx-40 rounded-md" role="tablist" data-twe-nav-ref>
    <li role="presentation" class="flex-auto text-center">
        <a href="{{ route('property.index') }}"
            class="@if (!request()->has('category')) bg-emerald-800 @endif block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent dark:text-white/50 dark:hover:bg-emerald-700/60 rounded-md"
            data-twe-toggle="pill" data-twe-target="all" role="tab" aria-controls="all_property"
            aria-selected="false">Tout</a>
    </li>
    @foreach ($categories as $category)
        <li role="presentation" class="flex-auto text-center">
            <a href="{{ route('property.index') }}?category={{ $category->name }}"
                class="@if (request()->input('category') == $category->name) bg-emerald-800 @endif block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent dark:text-white/50 dark:hover:bg-emerald-700/60 rounded-md"
                data-twe-toggle="pill" data-twe-target="terrains" data-twe-nav-active role="tab"
                aria-controls="{{ $category->name }}_property" aria-selected="true">{{ $category->name }}</a>
        </li>
    @endforeach
</ul>
