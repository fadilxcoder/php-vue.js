class App
{
    constructor() {
        this.init();
    }

    init() {
        // console.log(currentUrl);
    }
    
    getProductList(app) {
        var route = routingUrl + 'get-product-list';
        axios.get(route)
		.then(function(response) {
		    app.products = response.data.products
		});
    }
    
    viewSingleProductUrlGenerator(id) {
        return routingUrl + 'product?id=' + id;
    }

    getProductById(app) {
        var thisObj = this;
        var elem = document.getElementById('product');
        var prodId = elem.getAttribute('data-product-id');
        var route = routingUrl + 'get-single-product?id=' + prodId;
        app.products = [];
        thisObj._populateSingleProduct(app, route);
        thisObj.getRandomProducts(app);
    }

    fetchThisProductById(app, prodId) {
        var thisObj = this;
        var route = routingUrl + 'get-single-product?id=' + prodId;
        thisObj._populateSingleProduct(app, route);
        thisObj.getRandomProducts(app);
    }

    searchForProducts(app, search) {
        var thisObj = this;
        return app.products.filter( function(p) {
            return thisObj._filterProductsByName(p, search);
        });
    }

    getRandomProducts(app) {
        var route = routingUrl + 'get-related-products';
        axios.get(route)
		.then(function(response) {
		    app.products = response.data.products
		});
    }


    _filterProductsByName(product, searchKey) {
        return product.name.toLocaleLowerCase().includes(searchKey.toLocaleLowerCase());
    }

    _populateSingleProduct(app, route) {
        axios.get(route)
        .then(function(response) {
            app.image = response.data.image
            app.name = response.data.response.name;
            app.description = response.data.response.description;
            app.title = response.data.faker.title;
            app.list_1 = response.data.faker.pt_1;
            app.list_2 = response.data.faker.pt_2;
            app.list_3 = response.data.faker.pt_3;
            app.list_4 = response.data.faker.pt_4;
        });
    }
}

export default App;