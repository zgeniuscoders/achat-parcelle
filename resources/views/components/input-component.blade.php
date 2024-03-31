<div>
    @if ($type == 'textarea')
        <div>

            <label for="{{ $name }}"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Details</label>
            <textarea id="{{ $name }}" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-emerald-500 focus:border-emerald-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
                placeholder="{{ $placeholder }}" name="{{ $name }}">{{ $value }}</textarea>

            @if ($errors->has($name))
                <p class="text-red-400 mt-4">{{ $errors->first($name) }}</p>
            @endif

        </div>
    @else
        <label for="{{ $name }}" @class(
            $isLogin
                ? 'mb-2  dark:text-gray-400 text-'
                : 'block mb-2 text-sm font-medium text-gray-900 dark:text-white'))>{{ $title }}</label>
        <input type="{{ $type }}" id="{{ $name }}" @class(
            $isLogin
                ? 'border p-3 dark:bg-emerald-700 dark:text-gray-300  dark:border-gray-700 shadow-md placeholder:text-base focus:scale-105 ease-in-out duration-300 border-gray-300 rounded-lg w-full'
                : 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500') class=""
            placeholder="{{ $placeholder }}" name="{{ $name }}" value="{{ $value }}" />


        @if ($errors->has($name))
            <p class="text-red-400 mt-4">{{ $errors->first($name) }}</p>
        @endif

    @endif

</div>
