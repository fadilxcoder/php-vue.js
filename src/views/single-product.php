<?php 
    $this->layout('layouts/lp.base.layout', [
        'title' => $this->e($title)
    ]);
?>

<?php $this->start('landingPage') ?>
<div class="row" id="product" :data-product-id="<?php echo $this->e($response->id) ?>">
	<div class="col-md-8">
		<img class="img-fluid" src="<?php echo $this->e($response->image) ?>" alt="">
	</div>
	<div class="col-md-4">
		<h3 class="my-3"><?php echo $this->e($response->name) ?></h3>
		<p><?php echo $this->e($response->description ) ?></p>
		<h3 class="my-3"><?php echo $this->e($faker['title'] ) ?></h3>
		<ul>
			<li><?php echo $this->e($faker['pt_1']) ?></li>
			<li><?php echo $this->e($faker['pt_2']) ?></li>
            <li><?php echo $this->e($faker['pt_3']) ?></li>
            <li><?php echo $this->e($faker['pt_4']) ?></li>
		</ul>
        <div class="my-3">
            <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
        </div>
	</div>
</div>
<hr>
<?php $this->stop() ?>