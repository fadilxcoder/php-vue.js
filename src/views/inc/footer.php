</div>
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; fadilxcoder <?php echo date('Y'); ?></p>
    </div>
</footer>

<script src="<?php echo URL ?>assets/jquery/jquery.min.js"></script>
<script src="<?php echo URL ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js"></script>
<script>
    // const routingUrl = '<?php echo URL ?>';
    const routingUrl = '<?php echo URL ?>?url=';
    const currentUrl = '<?php echo (isset($_GET['url'])) ? $_GET['url'] : 'home' ?>';
</script>
<!-- <script type="module" src="<?php echo URL ?>assets/js/scripts.js"></script> -->
<script type="application/javascript" src="<?php echo URL ?>dist/polyfill.bundle.js"></script>
<script type="application/javascript" src="<?php echo URL ?>dist/app.bundle.js"></script>