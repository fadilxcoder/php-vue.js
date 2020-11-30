<?php 
    $this->layout('layouts/lp.base.layout', [
        'title' => $this->e($title)
    ]);
?>

<?php $this->start('landingPage') ?>
<div class="row" id="product" :data-product-id="<?php echo $this->e($id) ?>">
	<div class="col-md-8">
		<img class="img-fluid" :src="image" alt="">
	</div>
	<div class="col-md-4">
		<h3 class="my-3">{{ name }}</h3>
		<p>{{ description }}</p>
		<h3 class="my-3">{{ title }}</h3>
		<ul>
			<li>{{ list_1 }}</li>
			<li>{{ list_2 }}</li>
			<li>{{ list_3 }}</li>
			<li>{{ list_4 }}</li>
		</ul>
        <div class="my-3">
            <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
        </div>
	</div>
</div>
<h3 class="my-4">Related Products</h3>
<div class="row">
	<div class="col-md-3 col-sm-6 mb-4" v-for="_prod in products">
		<!-- <a :href="getSingleProductUrl(_prod.id)"> -->
		<a href="#" @click="fetchThisProduct(_prod.id, $event)">
			<img class="img-fluid" :src="_prod.image" :alt="_prod.name">
		</a>
	</div>
</div>
<hr>
<?php $this->stop() ?>