<!-- eslint-disable -->
<template>
    <div>
      <h1>Hello from TestBackendComponent!</h1>
    <button @click="fetchData">Fetch Data</button>
    </div>
</template>
<!-- eslint-enable -->

<script>
import axios from "axios";

export default {
  name: "TestBackendComponent",
  methods: {
    fetchData() {
      // Use Axios to send a GET request to your Laravel route
      axios
        .get("/index") // Replace with your actual Laravel route
        .then((response) => {
          // Handle the response data here
          console.log(response.data);
        })
        .catch((error) => {
          // Handle any errors here
          console.error("Error:", error);
        });
    },
  },
};
</script>

<style scoped>
/* Add your component-specific styles here */
</style>
