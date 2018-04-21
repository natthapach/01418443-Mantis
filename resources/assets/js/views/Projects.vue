<template>
  <ul>
    <h1>Projects</h1>
    <ul>
      <li v-for="project in projects">
        {{ project.name }}
      </li>
    </ul>
    <!-- {{ projectsJson }} -->
  </ul>
</template>
<script>
export default {
  props: ["projectsJson"],
  data: function() {
    return {
      projects: null
    };
  },
  mounted() {
    this.projects = JSON.parse(this.projectsJson);
  }
};
</script>