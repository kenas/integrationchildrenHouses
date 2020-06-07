<template>        
    <nav>
        <div class="logo">
          Logo
        </div>
        <div class="links">
          <ul>
            <li class="link"><a href="">Novinky</a></li>
            <li class="link"><a href="">O projektu</a></li>
            <li class="link"><a href="">Reference</a></li>
			<li class="link"><a href="">O nás</a></li>
            <li class="link"><a href="">Kontakt</a></li>
          </ul>
        </div>
        <div class="searchLogoWrap">
          	<input class="inputSearch  "v-show="!isActive" type="text" placeholder="Co hledáte?">
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
