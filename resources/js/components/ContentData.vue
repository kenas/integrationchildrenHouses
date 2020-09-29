<template>
  <div class="container space">
    <dir class="articles">
      <article class="test" v-for="item in data" :key="item.index">
        <img class="responsive" />
        <h1>{{ item.title }}</h1>
        <p>{{ item.summary }}</p>
        <p>{{ item.img }}</p>
      </article>
    </dir>

    <div class="acide">
      <h2>Novinky</h2>
      <h3>Aenean maximus lectus non metus gravida</h3>
      <p>
        ras lacus metus, tristique in elementum at, semper non tortor. Praesent
        tristique, lectus sit amet blandit rutrum, ipsum ante pretium nisl, ac
        molestie libero tortor vitae est. Praesent tincidunt erat sed dolor
        volutpat.
      </p>
    </div>
  </div>
</template>

<script>
import imagescom from "./headerImages.vue";

export default {
  components: {
    imagescom,
  },

  data() {
    return {
      data: [],
      images: ["jasjdadjas"],
    };
  },

  created() {
    axios.get("/api/").then((response) => {
      this.data = response.data;

      Object.keys(this.data).forEach((element) => {
        this.data[element].img = this.images;
      });
    });

    this.test();
  },

  methods: {
    test: function () {
      for (let i = 0; i < this.data.length; i++) {
        [i].push("test");
      }
      // this.data.forEach((d) => {
      //   console.log(d.body);
      // });
    },
  },
};
</script>
