<template>
    <div class="bg-white ring-2 ring-emerald-700 shadow-md pt-6 px-6 pb-3 rounded-lg lg:px-8 lg:pt-12">
        <div>
            <h3 class="text-emerald-600 text-base font-semibold">Scale</h3>
            <div
                class="flex flex-col items-start sm:flex-row sm:items-center sm:justify-between lg:flex-col lg:items-start">
                <div class="mt-3 flex items-center">
                    <p class="text-emerald-600 text-4xl font-bold tracking-tight">$19</p>
                    <div class="ml-4">
                        <p class="text-gray-700 text-sm">USD / mo</p>
                        <p class="text-gray-500 text-sm">Billed yearly ($220)</p>
                    </div>
                </div>

                <button type="button" @click.prevent="boostNow"
                    class="bg-emerald-600 text-white hover:bg-emerald-700 mt-6 w-full inline-block py-2 px-8 border border-transparent rounded-md shadow-sm text-center text-sm font-medium sm:mt-0 sm:w-auto lg:mt-6 lg:w-full">Buy
                    Scale</button>


            </div>
        </div>
        <h4 class="sr-only">Features</h4>
        <ul role="list" class="border-gray-200 divide-gray-200 mt-7 border-t divide-y lg:border-t-0">

            <li class="flex items-center py-3">
                <svg class="text-emerald-500 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="text-gray-600 ml-4 text-sm font-medium">Advanced invoicing</span>
            </li>

            <li class="flex items-center py-3">
                <svg class="text-emerald-500 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="text-gray-600 ml-4 text-sm font-medium">Easy to use accounting</span>
            </li>

            <li class="flex items-center py-3">
                <svg class="text-emerald-500 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="text-gray-600 ml-4 text-sm font-medium">Mutli-accounts</span>
            </li>

            <li class="flex items-center py-3">
                <svg class="text-emerald-500 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="text-gray-600 ml-4 text-sm font-medium">Tax planning toolkit</span>
            </li>

            <li class="flex items-center py-3">
                <svg class="text-emerald-500 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="text-gray-600 ml-4 text-sm font-medium">VAT &amp; VATMOSS
                    filing</span>
            </li>

            <li class="flex items-center py-3">
                <svg class="text-emerald-500 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="text-gray-600 ml-4 text-sm font-medium">Free bank transfers</span>
            </li>

        </ul>
    </div>
</template>

<script setup>

import { onMounted, ref } from "vue"
import { useBoost } from "../services";

const { boost, boosted } = useBoost()
const props = defineProps({ propertyId: 0 })

const data = ref({
    boosted_type: "premium",
    propertyId: null
})

onMounted(() => {
    console.log(props.propertyId);
})

const boostNow = () => {
    data.value.propertyId = props.propertyId
    boosted(data.value)
}
</script>