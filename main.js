console.log("Script loaded");

const { createApp } = Vue;

createApp({
  data() {
    return {
      apiUrl: "function.php",
    };
  },
  methods: {
    getApi() {
      console.log("get Api");
      axios.get(this.apiUrl).then((response) => {
        console.log(response.data);
      });
    },
  },
  mounted() {
    this.getApi();
  },
}).mount("#app");
