<!DOCTYPE html>
<html lang="es-MX">

<head>
    <!-- Essential Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo descripcion(); ?>">
    <meta name="keywords" content="<?php echo palabras_clave(); ?>">
    <meta name="author" content="<?php echo autor(); ?>">

    <!-- Title and Favicon -->
    <title><?php echo isset($pagina_titulo) ? $pagina_titulo . " | " : ""; ?><?php echo titulo() ? titulo() : ""; ?></title>
    <link rel="icon" href="assets/images/icon.png" type="image/png" sizes="16x16">

    <!-- Open Graph Meta Tags (Facebook, LinkedIn) -->
    <meta property="og:title" content="<?php echo og_title(); ?>">
    <meta property="og:description" content="<?php echo og_description(); ?>">
    <meta property="og:image" content="<?php echo og_image(); ?>">
    <meta property="og:url" content="<?php echo og_url(); ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_MX">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo twitter_title(); ?>">
    <meta name="twitter:description" content="<?php echo twitter_description(); ?>">
    <meta name="twitter:image" content="<?php echo twitter_image(); ?>">
    <meta name="twitter:site" content="<?php echo twitter_site(); ?>">

    <!-- Additional SEO Meta Tags -->
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS Files -->
    <link href="<?php echo base_url('app-assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="<?php echo base_url('app-assets/css/plugins.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('app-assets/css/swiper.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('app-assets/css/coloring.css'); ?>" rel="stylesheet" type="text/css">
    <link id="colors" href="<?php echo base_url('app-assets/css/colors/scheme-01.css'); ?>" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Consulta los estilos del tema en app-assets/css/style.css -->
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css">

    <?php if (isset($styles) && is_array($styles)) : ?>
        <?php foreach ($styles as $style) : ?>
            <link rel="stylesheet" type="text/css" href="<?php echo !$style['es_rel'] ? $style['href'] : base_url() . 'assets/css/' . $style['href']; ?>">
        <?php endforeach; ?>
    <?php endif; ?>
</head>

<body>
    <div id="wrapper">
        <div id="de-loader"></div>

        <!-- header begin -->
        <header class="">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <nav class="navbar navbar-expand-lg navbar-light bg-white">
                            <a class="navbar-brand d-none d-sm-block" href="<?php echo site_url(); ?>">
                                <img src="<?php echo base_url('assets/images/logos/logo-negro.png'); ?>" alt="Logo" width="60%" class="img-fluid">
                            </a>
                            <a class="navbar-brand d-block d-sm-none" href="<?php echo site_url(); ?>">
                                <img src="<?php echo base_url('assets/images/logos/logo-negro.png'); ?>" alt="Logo" class="img-fluid img-movil">
                            </a>

                            <div class="social-icons-movil d-block d-sm-none">
                                <span class="text-white">Síguenos:</span>
                                <a href="<?php echo tiktok(); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo base_url('assets/images/redes/tiktok.png'); ?>" alt="tiktok" class="img-fluid" width="14%"></a>
                                <a href="<?php echo facebook(); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo base_url('assets/images/redes/facebook.png'); ?>" alt="facebook" class="img-fluid" width="14%"></a>
                                <a href="<?php echo instagram(); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo base_url('assets/images/redes/instagram.png'); ?>" alt="instagram" class="img-fluid" width="14%"></a>
                            </div>
                            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse me-6" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo isset($nav_inicio) ? 'active' : ''; ?>" href="<?php echo site_url(); ?>">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo isset($nav_directorio) ? 'active' : ''; ?>" href="<?php echo site_url('directorio'); ?>">Directorio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo isset($nav_mapa) ? 'active' : ''; ?>" href="<?php echo site_url('mapa'); ?>">Mapa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo isset($nav_nosotros) ? 'active' : ''; ?>" href="<?php echo site_url('nosotros'); ?>">Nosotros</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo isset($nav_contacto) ? 'active' : ''; ?>" href="<?php echo site_url('contacto'); ?>">Contacto</a>
                                    </li>
                                </ul>
                                <div class="social-icons ms-lg-3 d-none d-sm-block">
                                    <span class="text-white">Sígueno:</span>
                                    <a href="<?php echo tiktok(); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo base_url('assets/images/redes/tiktok.png'); ?>" alt="tiktok" class="img-fluid"></a>
                                    <a href="<?php echo facebook(); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo base_url('assets/images/redes/facebook.png'); ?>" alt="facebook" class="img-fluid"></a>
                                    <a href="<?php echo instagram(); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo base_url('assets/images/redes/instagram.png'); ?>" alt="instagram" class="img-fluid"></a>
                                </div>
                            </div>
                            <!-- </div> -->
                        </nav>

                    </div>
                </div>
            </div>
        </header>