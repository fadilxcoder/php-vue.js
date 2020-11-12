const vue = new Vue({
    // el: '#vue-app',
    
    data: () => {
        return {
            wines: [],
        }
    },
    
    methods: {
        removeItem(id) {
            this.$delete(this.wines, id);
        },
        
        getImgURL(img) {
            return 'assets/uploads/' + img;
        }
    },
    
    // Called when page load
    mounted() {
        axios
        .get('handler/functions.php')
        .then((resp) => {
            // Response information is returned
            // console.log(resp);
            return resp.data;
        })
        // .then((res) => console.log(res))
        .then((res) => {
            this.wines = res;
        })
        ;
    }
}).$mount("#vue-app");