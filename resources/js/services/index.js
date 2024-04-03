import {ref} from "vue"
import axios from "axios"

export function useUsers(){

    const users = ref([])
    const user = ref({})
    
    const getUsers = async () => {
        await axios.get('/api/users').then(res => {
            users.value = res.data.data
        })
    }

    const getUser = async (id) => {
        await axios.get(`/api/users/${id}`).then(res => {
            user.value = res.data.data
        })
    }

    return {
        getUsers,
        getUser,
        users,
        user
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
       await axios.get(`/api/messages/${id}`)
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