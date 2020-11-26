class App
{
    constructor() {
        this.init();
    }

    init() {
        console.log(currentUrl);
    }
    
    getProductList(app) {
        var route = routingUrl + 'get-product-list';
        axios
        .get(route)
		.then(function(response){
		    app.products = response.data.products
		})
    }
    
    viewSingleProductUrlGenerator(id) {
        return routingUrl + 'product?id=' + id;
    }

    getProductById(app) {
        var elem = document.getElementById('product');
        var prodId = elem.getAttribute('data-product-id');
        // console.log(prodId);
        console.log(app);
    }
}

export default App;