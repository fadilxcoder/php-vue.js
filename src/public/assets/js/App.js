class App
{
    constructor() {
        this.init();
    }

    init() {
        console.log('init..');
    }
    
    getProductList(app) {
        var route = routingUrl + 'get-product-list';
        axios
        .get(route)
		.then(function(response){
		    app.products = response.data.products
		})
    }
}

export default App;