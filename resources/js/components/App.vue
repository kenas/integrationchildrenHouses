<template>
  <contentData :listdata="items"></contentData>
</template>

<script>
import navbar from "./NavBar";
import headerImages from "./headerImages";
import contentData from "./ContentData";

export default {
  data() {
    return {};
  },

  components: {
    contentData,
  },
};
</script>