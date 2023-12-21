<template>
  <div>
    <h1>Hello from TestView!</h1>
    <!-- Render the TestBackendComponent -->
    <TestBackendComponent />
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import TestBackendComponent from "@/components/TestBackendComponent.vue"; // Adjust the path accordingly

export default defineComponent({
  name: "BackendTest",
  components: {
    TestBackendComponent, // Register the TestBackendComponent
  },
});
</script>

<style scoped>
/* Add your component-specific styles here */
</style>
