<section class="my-10 bg-white/5 flex items-center justify-center">

    <div class="container mx-auto lg:px-20 p-8">
        <!--Tabs navigation-->
        @include('partials.tabs')


        <!--Tabs content-->
        <div>
            <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block text-center"
                id="tabs-home01" role="tabpanel" aria-labelledby="tabs-home-tab01" data-twe-tab-active>


                <div class="grid xl:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-3 text-start mb-8">
                    @foreach ($properties as $property)
                        @include('partials.productItem')
                    @endforeach

                </div>

                <x-button-link buttonTitle="Voir Plus D'articles" link="{{ route('property.index') }}"/>

            </div>

            <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
                id="tabs-profile01" role="tabpanel" aria-labelledby="tabs-profile-tab01">
                Tab 2 content
            </div>
            <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
                id="tabs-messages01" role="tabpanel" aria-labelledby="tabs-profile-tab01">
                Tab 3 content
            </div>
            <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
                id="tabs-contact01" role="tabpanel" aria-labelledby="tabs-contact-tab01">
                Tab 4 content
            </div>
        </div>
    </div>


</section>
