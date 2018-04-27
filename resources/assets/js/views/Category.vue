<template>
    <div>
        <h1>{{ categoryRE.name }}</h1>
        <ul>
            <li v-for="menu in categoryRE.menu">
                {{ menu }}
            </li>
        </ul>
    </div>
</template>
<script>
export default {
    data:function(){
        return {
        }
    },
    computed:{
        categoryRE: function(){
            /*
            * $route cannot invoke in script ($route is not defined)
            * this.$route is not update real param in mounted()
            */
            let id = this.$route.params.id;
            let categories = JSON.parse(this.categoriesJson);
            let category = categories[id];
            return category;
        }
    },
    props: ["categories-json"],
    mounted(){

    }
}
</script>

