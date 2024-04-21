<template>
    <div class="relative">
        
        <div class="relative mx-auto mt-8 max-w-2xl px-6 pb-8 sm:mt-12 lg:max-w-7xl lg:px-8 lg:pb-0">
            <!-- Decorative background -->
            <div aria-hidden="true"
                class="absolute inset-0 top-4 bottom-6 left-8 right-8 hidden rounded-tl-lg rounded-tr-lg bg-emerald-700 lg:block">
            </div>

            <div class="relative space-y-6 lg:grid lg:grid-cols-3 lg:space-y-0">

                <boost-basic :propertyId="props.propertyId"/>

                <boost-standard :propertyId="props.propertyId"/>

                <boost-best :propertyId="props.propertyId"/>

            </div>
        </div>
    </div>
</template>

<script setup>
import boostBest from './boost-best.vue';
import boostStandard from './boost-standard.vue';
import boostBasic from './boost-basic.vue';

import {onMounted} from "vue"

const props = defineProps({propertyId: Number})


onMounted(() => {
    console.log(props.propertyId);
})

</script>