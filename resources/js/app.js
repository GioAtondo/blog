import { createApp } from 'vue';
import App from './App.vue'; // Ensure this path is correct
import router from './router'; // Import router if set up

// Import Bootstrap CSS
import 'bootstrap/dist/css/bootstrap.min.css';

// Import Bootstrap JS (optional, if you need Bootstrap's JavaScript functionality)
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

createApp(App)
  .use(router) // Use router if set up
  .mount('#app');
