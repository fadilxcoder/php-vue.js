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
        <?php include __DIR__ . '/../inc/header.php'; ?>
        <div id="vue-app">
            <?php echo $this->section('landingPage') ?>
        </div>
        <?php include __DIR__ . '/../inc/footer.php'; ?>
    </body>
</html>