<header class="fixed top-0 w-full z-50 bg-gray-900/50 pb-8 backdrop-blur-lg">
    <div class="mt-8 bg-white/5 py-4 rounded-lg flex items-center justify-between z-20 container mx-auto px-16">
        <div class="flex items-center justify-center gap-16">
            <h3 class="font-bold lg:text-2xl text-xl text-white"><a href="">NDAKUNA<span class="text-emerald-600">KIN</span></a></h3>
            <div class="bg-gray-400 h-5 w-[2px]"></div>
            <ul class="lg:flex items-center text-white gap-16 hidden">
                <li class="text-md hover:text-green-400"><a href="{{ route("home") }}" class="">Accueil</a></li>
                <li class="text-md hover:text-green-400"><a href="{{ route("property.index") }}" class="">Articles</a></li>
                <li class="text-md hover:text-green-400"><a href="" class="">Commissionaires</a></li>
            </ul>
        </div>

        <form action="" method="get">
            <div class="bg-white rounded-md p-2 w-[250px]">
                <input type="search" name="q" id="q" placeholder="Recherche..."
                    class="w-full outline-none border-none px-2">
            </div>
        </form>
    </div>
</header>
