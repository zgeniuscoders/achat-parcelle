import {ref} from "vue"
import axios from "axios"

export function useUsers(){

    const users = ref({})
    
    const getUser = async () => {
        await axios.get('/api/users').then(res => {
            users.value = res.data.data
        })
    }

    return {
        getUser,
        users
    }

}

export function useMessages() {

    const  messages = ref([])

    const sendMessage = async (data) => {
        await axios.post("/api/messages", {
            "message": data.message,
            "receiverId": data.receiverId
        })
    }

    const deleteMessage = async () => {
        return await axios.delete("/api/messages/delete")
    }

    const getMessage = async (id) => {
        messages.value = await axios.get(`/api/messages/${id}`)
        .then(res => {
            messages.value = res.data.data
        })
    }


    return {
        sendMessage,
        getMessage,
        messages
    }
}