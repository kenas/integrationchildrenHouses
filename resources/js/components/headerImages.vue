<template>
  <div class="header-container">
    <h1 class="heading">
      Příležitost pro děti z dětských domovů. Příprava a zkušenost na integraci
      dětí do života.
    </h1>

    <img
      v-bind:src="images.headerImages"
      class="responsive"
      alt="Deti z detskych domovu"
    />
  </div>
</template>

<script>
export default {
  data() {
    return {
      images: {
        headerImages: [],
        restImages: [],
      },
    };
  },
  created() {
    const url = "https://api.unsplash.com/search/photos?query=children&";
    const verification =
      "client_id=kZyGMfnnVFXSvEURDspBH8l44UaV4pOnW79rKP2k8iI";
    const connection = url + verification;
    axios.get(connection).then((response) => {
      this.images.restImages = response.data.results;
      this.images.headerImages =
        response.data.results[1].urls.raw + "&ar=9:3&fit=crop";
    });
  },

  methods: {},
};
</script>
