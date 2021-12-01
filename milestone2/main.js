new Vue({
    el: "#vueContainer",
    data: {
      albumList: [],
    },
    mounted() {
      axios.get("http://localhost:8888/php-ajax-dischi/milestone2/api/api.php").then((resp) => {
        this.albumList = resp.data.albumsList;
      });
    },
  });