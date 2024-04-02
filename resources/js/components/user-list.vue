<template>
    <ul class="divide-y divide-gray-200 dark:divide-gray-700 overflow-auto h-screen" role="list">
        <li class="py-3 sm:py-4" v-for="user in users" :key="user.id">
            <div class="flex items-center space-x-4">
                <div class="flex-shrink-0">
                    <img class="w-12 h-12 rounded-full" v-if="user.photo"
                        :src="storage+user.photo" alt="Neil image">

                        <div v-else class="h-12 w-12 rounded-full bg-gray-50 flex items-center justify-center text-2xl font-bold">{{ user.name[0] }}</div>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                        {{ user.name }}

                    </p>
                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                        {{ user.email }}
                    </p>

                </div>

            </div>
        </li>

    </ul>
</template>

<script setup>


import { useUsers } from '../services'
const {getUser, users } = useUsers()
import {onMounted, ref} from "vue"

const storage = ref('/storage/')

onMounted(() => {
    getUser()
})

</script>