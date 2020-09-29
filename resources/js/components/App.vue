<template>
  <contentData :passing="contentData"></contentData>
</template>

<script>
import navbar from "./NavBar";
import headerImages from "./headerImages";
import contentData from "./ContentData";

export default {
  data() {
    return {
      images: {},
      contentData: {},
    };
  },

  created() {
    //verification to the Unsplash
    const url = "https://api.unsplash.com/search/photos?query=children&";
    const verification =
      "client_id=kZyGMfnnVFXSvEURDspBH8l44UaV4pOnW79rKP2k8iI";
    const connection = url + verification;

    axios.get(connection).then((response) => {
      this.images.restImages = response.data.results;
      this.images.headerImages =
        response.data.results[1].urls.raw + "&ar=9:3&fit=crop";

      //Get curent data
      axios.get("/api/").then((response) => {
        this.contentData = response.data;

        Object.keys(this.contentData).forEach((element) => {
          this.contentData[element].img = this.images.restImages[
            element
          ].urls.thumb;
        });
      });
    });
  },

  components: {
    headerImages,
    contentData,
  },
};
</script>