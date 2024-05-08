<section
    class="text-center dark:text-white container mx-auto lg:px-20 px-4 h-screen flex items-center justify-center flex-col">

    <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span
            class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Acheter Une
            parcelle</span> ou louer une maison a kinshasa</h1>
    <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Bienvenue sur <span
            class="text-emerald-400">Ndakunakin</span>, votre plateforme spécialisée dans l'immobilier à Kinshasa, en
        République démocratique du Congo. Que vous soyez à la recherche d'une parcelle, des terrains à acheter pour concrétiser vos projets de
        construction, ou que vous préfériez opter pour la location d'une maison existante, nous sommes là pour vous
        accompagner. </p>

    <div class="mt-4">
        <x-button-link buttonTitle="Commencer a vendre" />
        <x-button-link buttonTitle="Acheter" link="{{ route('property.index') }}"/>
    </div>

</section>
