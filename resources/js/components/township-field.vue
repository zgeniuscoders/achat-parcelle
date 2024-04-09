<template>
    <div>
        {{ props.townships.id }} 

        <label for="township" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Commune</label>
        <select id="township" name="township_id" v-model="townshipId"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected disabled>Choisir une commune</option>
            <option :value="township.id" v-for="township in props.townships" :key="township.id">{{ township.name }}
            </option>
        </select>
    </div>
</template>


<script setup>

import { ref, watch } from "vue"
import emitter from 'tiny-emitter/instance'


const props = defineProps({ townships: Array })
const townshipId = ref(1)

watch(townshipId, (newVal, oldVal) => {
    emitter.emit('townshipChange', newVal)
})


</script>