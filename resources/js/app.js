import './bootstrap';
import chat from "./components/chat.vue"
import townshipField from './components/township-field.vue';
import quaterField from './components/quater-field.vue';
import boost from './components/boost.vue';
import townshipChips from './components/township-chips.vue';
import quaterChips from './components/quater-chips.vue';

import { createApp } from 'vue';
createApp({})
  .component('chat', chat)
  .component('township-field', townshipField)
  .component('quater-field', quaterField)
  .component('townships-chips', townshipChips)
  .component('quater-chips',quaterChips)
  .component("boost", boost)
  .mount('#app')



