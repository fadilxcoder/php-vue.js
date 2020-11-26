import App from "./App.js";

Vue.prototype.$App= new App();

var app = new Vue({
    el:'#vue-app',
    
    data: {
        products: '',
        name: '',
        description: '',
        title: '',
        list_1: '',
        list_2: '',
        list_3: '',
        list_4: '',
        image: '',
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
