import './bootstrap';
import chat from "./components/chat.vue"
import townshipField from './components/township-field.vue';
import quaterField from './components/quater-field.vue';

import { createApp } from 'vue';
createApp({})
  .component('chat', chat)
  .component('township-field', townshipField)
  .component('quater-field', quaterField)
  .mount('#app')



