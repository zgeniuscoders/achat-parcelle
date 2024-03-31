import './bootstrap';
import chat from "./components/chat.vue"

import { createApp } from 'vue';
createApp({})
  .component('chat', chat)
  .mount('#app')



