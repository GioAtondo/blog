import { createRouter, createWebHistory } from 'vue-router';
import Layout from '../components/Layout.vue';
import Home from '../views/Home.vue';
import About from '../views/About.vue';
import Contact from '../views/Contact.vue';
import NewPost from '../views/NewPost.vue'; // Import the NewPost view

// Define routes
const routes = [
  {
    path: '/',
    component: Layout,
    children: [
      { path: '', component: Home },
      { path: 'about', component: About },
      { path: 'contact', component: Contact },
      { path: '/new-post', name: 'NewPost', component: NewPost },
    ],
  },
];

// Create router instance
const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
