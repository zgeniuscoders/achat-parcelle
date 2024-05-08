<template>
    <ul class="flex gap-3 flex-wrap w-full">
        <li v-for="township in townships" :key="township.id">
            <input type="checkbox" :id="township.name+'-option'" class="hidden peer" required="" value="">
            <label :for="township.name+'-option'"
                class="inline-flex items-center w-full justify-center py-2 px-4 text-gray-500 bg-white border-2 border-gray-200 rounded-full cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-emerald-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="block">
                    <div class="w-full font-semibold text-sm">{{ township.name }}</div>
                </div>
            </label>
        </li>
    </ul>
</template>

<script setup>
import { useTownship } from '../services';
import {onMounted} from "vue"

const {townships,getTownships} = useTownship()

onMounted(() => {
    getTownships()
})


</script>