const vue = new Vue({
    // el: '#vue-app',
    
    data: () => {
        return {
            wines: [],
            searchKey: '',
            inputType: '',
            countryList: [],
            searchByCountryVar: '',
            grapesRadio: [
                { name: 'Pinot Noir'},
                { name: 'Sauvignon'},
                { name: 'Merlot'},
                { name: 'Chardonay'},
            ],
            grapesSelected: '',
        }
    },
    
    computed: {
        search() {
            return this.wines.filter( (wine) => {
                // console.log(wine);
                // console.log(this.searchKey);
                return (
                    wine.name.toLocaleLowerCase().includes(this.searchKey.toLocaleLowerCase()) &&
                    wine.country.includes(this.searchByCountryVar) &&
                    wine.grapes.includes(this.grapesSelected)
                );
            });
        },
    },
    
    methods: {
        removeItem(id) {
            this.$delete(this.wines, id);
        },
        
        getImgURL(img) {
            return 'assets/uploads/' + img;
        },
        searchInput(value) {
            this.inputType = value;
        },
        cancelSearch() {
            this.searchKey = '';
            this.searchByCountryVar = '';
            this.grapesSelected = '';
        },
    },
    
    // Called when page load
    mounted() {
        axios
        // .get('handler/functions.php')
        .get('handler/json-vue.json')
        .then((resp) => {
            // Response information is returned
            // console.log(resp);
            return resp.data;
        })
        // .then((res) => console.log(res))
        .then((res) => {
            this.wines = res;
        })
        .then( () => {
            let arr = []
            this.wines.forEach( function (value, key) {
                // console.log(value.country);
 
                if (!arr.includes(value.country)) {
                    arr.push(value.country);
                }
            });
            
            // console.log(arr);

            this.countryList = arr.sort();
        })
        ;
    }
}).$mount("#vue-app");