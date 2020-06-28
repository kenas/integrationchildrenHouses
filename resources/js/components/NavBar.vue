<template>
    <nav class="navbar">
		<div class="hamburger-container" v-on:click="toggle()">
			<div class="hamburger"></div>
			<div class="hamburger"></div>
			<div class="hamburger"></div>
		</div>
		<div class="container-navbar" v-show="isActive">
			<div class="navbar-layout">
				<div class="logo">
					<h4>Integration in vitam</h4>
				</div>
	
				<ul class="links">
					<li class="link"><a href="">Novinky</a></li>
					<li class="link"><a href="">O projektu</a></li>
					<li class="link"><a href="">Reference</a></li>
					<li class="link"><a href="">O nás</a></li>
					<li class="link"><a href="">Kontakt</a></li>
				</ul>
	
				<div class="searchLogoWrap">
					<input v-model="searchQuery" class="inputSearch" type="text" placeholder="Co hledáte?">
				</div>
			</div>
		</div>
    </nav>
</template>

<script>
    export default {
    	data() {
    		return {
    			isActive: false,
    			searchQuery: '',
    			searchQueryResult: '',
				listResult: false,

    		}
		},

        methods: {

        	toggle: function() {

        		if(this.isActive) {
					this.isActive = false;

        		} else   {
        			this.isActive = true;
        		}
        	},

        	searchBoxQuery: function () {
        		if(this.searchQuery !== '') { 
                	axios.get('/api/search?q=' + this.searchQuery)
                    	.then((data) => {
                    	this.searchQueryResult = data.data;
                    	// setTimeout(() => this.searchQueryResult = "", 20000)  	
                	});
              	}
        	},

        	showListResults: function () {
        		this.listResult = true;

        	},

	        mounted() {
	            console.log('Component mounted.')
	        },
        }
    }
</script>
