<template>
  <ul>
    <h1>Users</h1>
    <ul>
      <li v-for="user in users">
        {{ user.name }}
      </li>
    </ul>
    <!-- {{ projectsJson }} -->
  </ul>
</template>
<script>
export default {
  props: ['usersJson'],
  data: function(){
    return {
      users: null
    }
  },
  mounted(){
    console.log(this.usersJson);
    this.users = JSON.parse(this.usersJson);
  }
}
</script>