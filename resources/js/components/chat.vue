<template>
    <main class="flex-grow flex min-h-0 gap-4">

        <section class="flex flex-col p-4 w-full max-w-sm flex-none bg-white/5 min-h-0">
            <h1 class="font-semibold mb-3 text-2xl dark:text-white">
                Ndakuna<span class="text-emerald-500">kin</span>
            </h1>

            <form class="max-w-md">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Recherche..." required />
                </div>
            </form>

            <user-list />
        </section>
        <!-- component -->
        <div class="flex-1 p:2 sm:p-6 justify-between flex flex-col h-screen overflow-hidden" v-if="hasChatId">
            <chat-header />
            <chat-body :receiver-id="1" :current-user="2"/>
            <chat-footer />
        </div>
        <div class="flex-1 p:2 sm:p-6 flex flex-col item-center justify-center h-screen overflow-hidden">
            <p class="text-gray-200 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, voluptatum.</p>
        </div>

    </main>
</template>


<style>
.scrollbar-w-2::-webkit-scrollbar {
    width: 0.25rem;
    height: 0.25rem;
}

.scrollbar-track-blue-lighter::-webkit-scrollbar-track {
    --bg-opacity: 1;
    background-color: #f7fafc;
    background-color: rgba(247, 250, 252, var(--bg-opacity));
}

.scrollbar-thumb-blue::-webkit-scrollbar-thumb {
    --bg-opacity: 1;
    background-color: #edf2f7;
    background-color: rgba(237, 242, 247, var(--bg-opacity));
}

.scrollbar-thumb-rounded::-webkit-scrollbar-thumb {
    border-radius: 0.25rem;
}
</style>
<script setup>
// const el = document.getElementById('messages')
// el.scrollTop = el.scrollHeight

import chatBody from './chat-body.vue';
import chatFooter from './chat-footer.vue';
import chatHeader from './chat-header.vue';
import UserList from './user-list.vue'

import { ref,onMounted } from 'vue';

const hasChatId = ref(false)
const userId = ref({id: ""})


function routerLoad(id) {
    props.value.id = id
    hasChatId.value = true
}


onMounted(() => {
    // const route = useRoute()
    // routeParams.value = route.params
    // console.log(routeParams.value)
    // if (routeParams.value.id) {
    //     routerLoad(routeParams.value.id)
    // }
})

</script>