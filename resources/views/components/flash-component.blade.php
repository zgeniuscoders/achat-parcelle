@if (session('success'))
    <div class="p-4 rounded-md bg-emerald-700 mb-4 text-center">
        <p class="font-medium"> {{ session('success') }}
        </p>
    </div>
@endif
