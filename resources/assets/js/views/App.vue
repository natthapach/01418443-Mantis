<template>
    <div>
        <h1>Vue Router Demo App</h1>

        <p>
            <router-link :to="{ name: 'home' }">Home</router-link> |
            <router-link :to="{ name: 'hello' }">Hello World</router-link> |
            <router-link :to="{ name: 'projects' }">Projects</router-link> |
            <router-link :to="{ name: 'users' }">Users</router-link> |
            <span v-for="(category, i) in categories">
                <router-link :to="{ name: 'category', params:{id: i} }">{{ category.name }}</router-link> |
            </span>
            
        </p>

        <div class="container">
            <router-view :categories-json=categoriesJson :projects-json=projects :users-json=users></router-view>
        </div>
    </div>
</template>
<script>
    export default {
        data: function(){
            return {
                categories: null
            }
        },
        props: ['users', 'projects', 'categories-json'],
        mounted(){
            this.categories = JSON.parse(this.categoriesJson);
        }
    }
</script>