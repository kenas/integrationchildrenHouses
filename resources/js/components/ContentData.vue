<template>
	<div class="space">
		<article v-for="item in data" :key="item.index">		
			<h1> {{ item.title }} </h1>
			<p> {{ item.summary }} </p>
		</article>
	</div>
</template>

<script>
    export default {

    	data() {
    		return {
    			data: [],
    		}
    	},
        created() {
            axios.get('/api/')
            .then(response => {
            	this.data = response.data;
            });
        }
    }
</script>
