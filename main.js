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
    changeStatus(index) {
      const changeStat = {
        changeStat: index,
      };
      axios
        .post(this.apiUrl, changeStat, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((response) => {
          this.list = response.data;
        });
    },
    /* updatelement() {
      const data = {
        status: false,
        toDoElement: this.toDoElement,
        toDoDescription: this.toDoDescription,
      };
      axios
        .post(this.apiUrl, data, {
          header: { "Content-type": "multipart/form-data" },
        })
        .then((response) => {
          console.log(response.data);
          this.list = response.data;
        });
    }, */
  },
  mounted() {
    this.getApi();
  },
}).mount("#app");
