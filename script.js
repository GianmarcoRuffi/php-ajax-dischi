const app = new Vue({
  el: "#app",
  data: {
    albums: [],
  },
  methods: {},
  mounted() {
    axios.get("server.php").then((response) => {
      response.data;
      this.albums = response.data;
    });
  },
});
