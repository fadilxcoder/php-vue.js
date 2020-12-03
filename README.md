# General

- Use of HeliFox & dependencies
- PHP routes are sent to JS in `footer.php`, **currentUrl** & **routingUrl**
- URL : my project : http://iox.000webhostapp.com/php-vue-js/
- URL : front : https://fadilxcoder.github.io/php-vue.js/src/index.html

# Homepage

- Uses vue to list products
- - PHP `getProductList()` -> return JSON - products
- - JS `scripts.js` & `App.js` -> use JSON to list products (vue - created section)
- To view specific products, URLs are generated by `:href="getSingleProduct(_prod.id)"` in the `<a>` tag
- Real Time search (No PHP / Only JS)
- - `searchProduct` in vue/html search box
- - `searchProds` - looping over instead of *products*, **searchProds** defined in vue - computed section

# Single Product

- No PHP used to display
- Product Id bind to `#product` element
- Backtrace code in vue - mounted section, get Id in JS, get data by axios
- Render data in vue format
- Related products (Click to change data in DOM instantaneous)

# Vue 

- `:data-product-id` == `v-bind`
- `@click`
- `v-for`
- `v-model`
- `v-if`
- `$event` in HTML code
