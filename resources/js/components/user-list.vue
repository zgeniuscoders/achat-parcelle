<template>
    <ul class="divide-y divide-gray-200 dark:divide-gray-700 overflow-auto h-screen" role="list">
        <li class="py-3 sm:py-4" v-for="i in 10" :key="i">
            <div class="flex items-center space-x-4">
                <div class="flex-shrink-0">
                    <img class="w-12 h-12 rounded-full"
                        src="https://flowbite.com/docs/images/people/profile-picture-1.jpg" alt="Neil image">
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                        Neil Sims
                    </p>
                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                        email@windster.com
                    </p>
                </div>

            </div>
        </li>

    </ul>
</template>

<script setup></script>