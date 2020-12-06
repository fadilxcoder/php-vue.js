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
        items: [],
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
        },
        addRowToInvoice: function(e) {
            this.items.push({ 
                description: "", 
                quantity: 1, 
                price: 0 
            });
        }
    },

    computed: {
        searchProds: function() {
            return this.$App.searchForProducts(this, this.searchProduct);
        },
        total: function() {
            return this.$App.calculateInvoiceTotal(this);
        }
    },
    
    created: function() {
        this.getProductList();
        this.$App.getContactsList(this);
        this.$App.getInvoiceList(this);
    },
    
    mounted: function() {
        routerExecutor(this);
    },
    filters: {
        currency: function(value) {
            return value.toFixed(2);
        }
    }
});

function routerExecutor(thisObj) {
    switch (currentUrl) {
        case 'product':
            thisObj.$App.getProductById(thisObj);
            break;
    }
}
