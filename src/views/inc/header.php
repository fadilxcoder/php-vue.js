<div class="container">
    <hr>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?php echo URL ?>">PHP / VUE.JS</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="<?php echo URL . 'adminer.php' ?>">Adminer UI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="<?php echo ROUTING_URL . 'populate-db' ?>">DB Handler</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Utility
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" href="<?php echo ROUTING_URL . 'contact-us' ?>">Contact Us</a>
                        <a class="dropdown-item" href="<?php echo ROUTING_URL . 'invoicing' ?>">Invoicing</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>