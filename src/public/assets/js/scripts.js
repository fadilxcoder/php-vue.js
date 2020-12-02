import App from "./App.js";

Vue.prototype.$App= new App();

var app = new Vue({
    el:'#vue-app',
    
    data: {
        products: [],
        name: '',
        description: '',
        title: '',
        list_1: '',
        list_2: '',
        list_3: '',
        list_4: '',
        image: '',
        searchProduct: '',
    },
    
    methods: {
        getProductList: function() {
            this.$App.getProductList(this);
        },
        getSingleProductUrl: function(id) {
            return this.$App.viewSingleProductUrlGenerator(id);
        },
        getImageWithRandomText: function(img) {
            console.log(this.$App.getRandomText());
            return img + '?text=' + this.$App.getRandomText();
        },
        fetchThisProduct: function(pid, e) {
            e.preventDefault();
            this.$App.fetchThisProductById(this, pid);
        }
    },

    computed: {
        searchProds: function() {
            return this.$App.searchForProducts(this, this.searchProduct);
        }
    },
    
    created: function() {
        this.getProductList();
    },
    
    mounted: function() {
        routerExecutor(this);
    },
});

function routerExecutor(thisObj) {
    switch (currentUrl) {
        case 'product':
            thisObj.$App.getProductById(thisObj);
            break;
    }
}
