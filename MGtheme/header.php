<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url('/forside'); ?>">Forside</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url('/om'); ?>">Om</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url('/kontakt'); ?>">Kontakt</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cases
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo site_url('/daisys-kageri'); ?>">Daisys Kageri</a>
                        <a class="dropdown-item" href="<?php echo site_url('/lydac-akustik'); ?>">Lydac Akustik</a>
                        <a class="dropdown-item" href="<?php echo site_url('/siigurd'); ?>">Siigurd</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url('/insights'); ?>">Insights</a></li>
            </ul>
        </div>
        <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logomg.png" alt="Din Forretning Logo" style="height: 35px;">
        </a>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>





