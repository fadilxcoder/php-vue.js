import App from "./App.js";

Vue.prototype.$App= new App();

var app = new Vue({
    el:'#vue-app',
    
    data: {
        products: '',
        productId: '',
    },
    
    methods: {
        getProductList: function() {
            this.$App.getProductList(this);
        },
        getSingleProductUrl: function(id) {
            return this.$App.viewSingleProductUrlGenerator(id);
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
