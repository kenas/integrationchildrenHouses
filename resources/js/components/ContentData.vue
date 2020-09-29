<template>
  <div class="container space">
    <dir class="articles">
      <article class="test" v-for="item in passing" :key="item.index">
        <img :src="item.img" alt="" />
        <h1>{{ item.title }}</h1>
        <p>{{ item.summary }}</p>
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
  props: {
    passing: { Object, Object },
  },
};
</script>
