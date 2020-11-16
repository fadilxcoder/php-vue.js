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
    },
    
    created: function() {
		this.getProductList();
	},
});
