import App from "./App.js";

Vue.prototype.$App= new App();

var app = new Vue({
    el:'#vue-app',
    
    data: {
        products: '',
    },
    
    methods: {
        getProductList: function() {
            this.$App.getProductList(this);
        },
        getSingleProduct: function(id) {
            return routingUrl + 'product&id=' + id;
        }
    },
    
    created: function() {
		this.getProductList();
	},
});
