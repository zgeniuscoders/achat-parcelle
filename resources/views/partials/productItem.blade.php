<article class="bg-white border border-emerald-400 rounded-lg shadow dark:bg-gray-800 dark:border-emerald-700 w-full">
    <a href="#">
        <img class="mb-4 rounded-t-lg w-full h-[250px] object-cover" src="/storage/{{ $property->image }}"
            alt="product image" />
    </a>
    <div class="px-5 pb-5">
        <a href="{{ route('property.show', ['property' => $property->id]) }}">
            <h3 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $property->name }}t</h3>
        </a>
        <p class="text-white my-2">{{ $property->getExcerpt() }}</p>
        <span
            class="bg-blue-100 text-emerald-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-emerald-200 dark:text-emerald-800 capitalize">{{ $property->status == 1 ? 'a vendre' : 'a louer' }}</span>

        <a href="{{ route('property.index') }}?category={{ $property->category->name }}"
            class="bg-blue-100 text-emerald-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-emerald-200 dark:text-emerald-800 capitalize">{{ $property->category->name }}</a>

        <div class="flex items-center mt-2.5 mb-5">
            <a href="
            {{ request()->has('category')
                ? (request()->has('city')
                    ? ''
                    : url()->full() . '&city=' . $property->quater->township->name)
                : (request()->has('city')
                    ? ''
                    : url()->full() . '?city=' . $property->quater->township->name) }}
            "
                class="bg-blue-100 text-emerald-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-emerald-200 dark:text-emerald-800 capitalize">{{ $property->quater->township->name }}</a>
            <a href="
                    {{ request()->has('category')
                        ? (request()->has('quater')
                            ? ''
                            : url()->full() . '&quater=' . $property->quater->name)
                        : (request()->has('quater')
                            ? ''
                            : url()->full() . '?quater=' . $property->quater->name) }}
            "
                class="bg-blue-100 text-emerald-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-emerald-200 dark:text-emerald-800 ms-3 capitalize">{{ $property->quater->name }}</a>
        </div>
        <div class="flex items-center justify-between">
            <span class="text-3xl font-bold text-gray-900 dark:text-white">{{ $property->getFormatedPrice() }}$</span>
            <a href="{{ route('property.show', ['property' => $property->id]) }}"
                class="dark:text-gray-900 text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">Voir
                les details</a>

        </div>
    </div>
</article>
