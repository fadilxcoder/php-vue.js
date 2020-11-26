<?php 
    $this->layout('layouts/lp.base.layout', [
        'title' => $this->e($title)
    ]);
?>

<?php $this->start('landingPage') ?>
    <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item" v-for="_prod in products">
            <div class="card h-100">
                <!--<a href="#"><img class="card-img-top" :src="_prod.image" alt=""></a>-->
                <a v-bind:href="getSingleProductUrl(_prod.id)">
                    <img class="card-img-top" v-bind:src="_prod.image" v-bind:alt="_prod.name">
                </a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a :href="getSingleProductUrl(_prod.id)" :data-product-id="_prod.id">{{ _prod.name }}</a>
                    </h4>
                    <p class="card-text">{{ _prod.description }}</p>
                </div>
            </div>
        </div>
    </div>
<?php $this->stop() ?>