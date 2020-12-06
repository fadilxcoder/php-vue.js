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
        isRelatedActive: false,
        isRelatedProducts: '',
        isSuccess: false,
        contact: {
            name: '',
            phone: '',
            email: '',
            message: '',
        },
        contacts: [],
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
        },
        activateRelatedProducts: function(value, e) {
            e.preventDefault();
            this.isRelatedActive = value;
            this.isRelatedProducts = (value) ? 'active' : 'inactive';
            this.$App.getRandomProducts(this);
        },
        contactForm: function(event) {
            event.preventDefault();
            this.$App.contactFormSubmission(this);
        }
    },

    computed: {
        searchProds: function() {
            return this.$App.searchForProducts(this, this.searchProduct);
        }
    },
    
    created: function() {
        this.getProductList();
        this.$App.getContactsList(this);
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
