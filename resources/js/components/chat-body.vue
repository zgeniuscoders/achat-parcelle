<template>
    <div id="messages" v-for="message in messages" :key="message.id"
        class="flex flex-col space-y-4 p-3 overflow-y-auto scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter scrollbar-w-2 scrolling-touch">

        <div class="chat-message" v-if="message.sender_id != props.receiverId">

            <div class="flex items-end">
                <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-2 items-start">
                    <div><span class="px-4 py-2 rounded-lg inline-block rounded-bl-none bg-gray-300 text-gray-600">{{
                            message.message }}</span></div>
                </div>
                <img src="https://images.unsplash.com/photo-1549078642-b2ba4bda0cdb?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=144&amp;h=144"
                    alt="My profile" class="w-6 h-6 rounded-full order-1">
            </div>
        </div>

        <div class="chat-message" v-else>
            <div class="flex items-end justify-end">
                <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-1 items-end">
                    <div><span class="px-4 py-2 rounded-lg inline-block rounded-br-none bg-emerald-600 text-white ">{{
                            message.message }}</span></div>
                </div>
                <img src="https://images.unsplash.com/photo-1590031905470-a1a1feacbb0b?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=144&amp;h=144"
                    alt="My profile" class="w-6 h-6 rounded-full order-2">
            </div>
        </div>

    </div>

</template>

<script setup>
import { onMounted } from "vue"
import { useMessages } from "../services/index"
import emitter from 'tiny-emitter/instance'

const { getMessage, messages } = useMessages()
const props = defineProps({ receiverId: Number, currentUser: Number })

onMounted(() => {
    getMessage(props.receiverId)

    emitter.on("onUserSelected", (id) => {
        getMessage(id)
    })

    emitter.on('userSentMessage', async function () {
        getMessage(props.receiverId)
    })
})

</script>