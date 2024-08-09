const { createApp } = Vue;

createApp({
  data() {
    return {
      apiUrl: "function.php",
      list: [],
    };
  },
  methods: {
    getApi() {
      axios.get(this.apiUrl).then((response) => {
        console.log(response.data);
        this.list = response.data;
      });
    },
  },
  mounted() {
    this.getApi();
  },
}).mount("#app");
