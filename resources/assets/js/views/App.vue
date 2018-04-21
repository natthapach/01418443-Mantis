<template>
    <div>
        <h1>Vue Router Demo App</h1>

        <p>
            <router-link :to="{ name: 'home' }">Home</router-link> |
            <router-link :to="{ name: 'hello' }">Hello World</router-link> |
            <router-link :to="{ name: 'projects' }">Projects</router-link>
            <router-link :to="{ name: 'users' }">Users</router-link>
        </p>

        <div class="container">
            <router-view :projects-json=projects :users-json=users></router-view>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['users', 'projects']
    }
</script>