import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './views/App'
import Hello from './views/Hello'
import Home from './views/Home'
import Projects from './views/Projects'
import Users from './views/Users'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/hello',
            name: 'hello',
            component: Hello,
        },
        {
            path: '/test-vue/projects',
            name: 'projects',
            component: Projects,
        },
        {
            path: '/test-vue/users',
            name: 'users',
            component: Users,
        }
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});