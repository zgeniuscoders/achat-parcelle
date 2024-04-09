<template>
    <div>
        <label for="quater" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quartier</label>
        <select id="quater" name="quater_id"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected disabled>Choisir un quartier</option>
            <option :value="quater.id" v-for="quater in props.townships[townshipId-1].quaters" :key="quater.id">{{
                quater.name }}</option>
        </select>
    </div>
</template>


<script setup>

import { ref, onMounted } from "vue"
import emitter from 'tiny-emitter/instance'

const props = defineProps({ townships: Array })

const townshipId = ref(1)

onMounted(() => {
    emitter.on('townshipChange', (id) => {
        townshipId.value = id
    })
})

</script>