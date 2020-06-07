<template>
    <img v-bind:src="images" class="responsive" alt="Deti z detskych domovu">
</template>

<script>
    export default {

    	data() {
    		return {
    			images: [],
    		}
    	},
        created() {

            const url = 'https://api.unsplash.com/search/photos?query=children&';
            const verification = 'client_id=kZyGMfnnVFXSvEURDspBH8l44UaV4pOnW79rKP2k8iI';
            const connection = url + verification;
            axios.get(connection)
            .then(response => {
                
                this.images = response.data.results[0].urls.raw + '&ar=9:2&fit=crop';
                
               //   console.log(this.data.results[0].urls.raw + '');
                
            });
        }
    }
</script>
