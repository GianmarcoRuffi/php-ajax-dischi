// <!-- Prima Milestone:
// Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
// Seconda Milestone:
// Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
// Bonus:
// Attraverso un’altra chiamata api, filtrare gli album per genere -->

const app = new Vue({
  el: "#app",

  data() {
    return {
      key: "All",
      inputText: "",
      albumList: [],
      apiPath: "http://localhost/php-ajax-dischi/server.php",
      filteredDiscs: [],
      genres: ["Jazz", "Metal", "Rock", "Pop"],
    };
  },

  //   computed: {
  //     genres() {
  //       //   console.log(this.albumList);
  //       const genreList = [];
  //       this.albumList.forEach((disc) => {
  //         if (!genreList.includes(disc.genre)) {
  //           genreList.push(disc.genre);
  //           //   console.log(disc.genre);
  //         }
  //       });

  //       console.log(genreList);
  //       return genreList;
  //     },
  //   },

  methods: {
    startFilter() {
      axios
        .get(this.apiPath + `?genre=${this.key}`)
        .then((res) => {
          console.log(res);
          this.albumList = res.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
    filterDiscs(searchKeys) {
      //   console.log(`Filtering Discs by ${searchKeys.genre}`);
      const filteredDiscs = [];
      if (searchKeys.genre === "All" && searchKeys.searchText === "") {
        this.filteredDiscs = this.albumList;
      } else if (searchKeys.genre != "All" && searchKeys.searchText === "") {
        this.albumList.forEach((el) => {
          if (el.genre === searchKeys.genre) {
            filteredDiscs.push(el);
          }
        });
        this.filteredDiscs = filteredDiscs;
      }
    },
  },
  mounted() {
    this.startFilter();
  },
});
