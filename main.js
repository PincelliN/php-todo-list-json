const { createApp } = Vue;

createApp({
  data() {
    return {
      apiUrl: "function.php",
      list: [],
      toDoTitle: "",
      toDoDescription: "",
    };
  },
  methods: {
    getApi() {
      axios.get(this.apiUrl).then((response) => {
        console.log(response.data);
        this.list = response.data;
      });
    },
    /* cambiuare stato ad un elemento */
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
    /* aggiungere un elemento */
    /* 
    const data = new FormData();
     data.append('toDoTitle': this.toDoTitle);
     data.append('toDoDescription': this.toDoDescription);
     scritto in questo modo non abbiamo bisogno del headers
     */

    updatelist() {
      const data = {
        toDoTitle: this.toDoTitle,
        toDoDescription: this.toDoDescription,
      };
      console.log(data);
      axios
        .post(this.apiUrl, data, {
          headers: { "Content-type": "multipart/form-data" },
        })
        .then((response) => {
          console.log(response.data);
          this.list = response.data;
          this.toDoTitle = "";
          this.toDoDescription = "";
        });
    },
    /* eliminare un elemento  */
    removeitem(index) {
      const indexRem = {
        indexRem: index,
      };
      axios
        .post(this.apiUrl, indexRem, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((response) => {
          console.log(response.data);
          this.list = response.data;
        });
    },
  },
  mounted() {
    this.getApi();
  },
}).mount("#app");
