<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $this->e($title) ?></title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo URL?>favicon.ico"/>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="<?php echo URL ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo URL ?>assets/css/modern-business.css" rel="stylesheet">
    </head>
    <body>
        <div id="vue-app">
            <?php echo $this->section('landingPage') ?>
        </div>
        <script src="<?php echo URL ?>assets/jquery/jquery.min.js"></script>
        <script src="<?php echo URL ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js"></script>
        <script>
            const currentUrl = '<?php echo URL ?>'
            const routingUrl = '<?php echo URL ?>?url='
        </script>
        <script type="module" src="<?php echo URL ?>assets/js/scripts.js"></script>
    </body>
</html>