<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html class="loading" lang="es" data-textdirection="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template.">
        <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
        <meta name="author" content="PIXINVENT">
        <title><?php echo isset($pagina_titulo) ? $pagina_titulo." | " : ""; ?><?php echo titulo(); ?></title>
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>app-assets/images/ico/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CMuli:300,400,500,700" rel="stylesheet">
        <!-- BEGIN VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>app-assets/css/vendors.css">
        <!-- END VENDOR CSS-->
        <!-- BEGIN ROBUST CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>app-assets/css/app.css">
        <!-- END ROBUST CSS-->
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>app-assets/css/core/menu/menu-types/horizontal-menu.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>app-assets/css/core/colors/palette-gradient.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>app-assets/css/pages/timeline.css">
        <!-- END Page Level CSS-->
        <!-- BEGIN Custom CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
        <!-- END Custom CSS-->

        <?php if (isset($styles) && is_array($styles)): ?>
            <?php foreach ($styles as $style): ?>
                <link rel="stylesheet" type="text/css" href="<?php echo !$style['es_rel'] ? $style['href'] : base_url() . 'assets/css/' . $style['href']; ?>">
            <?php endforeach;?>
        <?php endif;?>

    </head>
    <body id="vista" class="horizontal-layout horizontal-menu horizontal-menu-padding 2-columns   menu-expanded" data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

        <!-- fixed-top-->
        
        <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-static-top navbar-dark bg-purple bg-darken-3 navbar-border navbar-brand-center">
            <div class="navbar-wrapper">
            
                <!--div class="navbar-header"-->
                <div class="">

                    <ul class="nav navbar-nav flex-row">
                        <!--li class="nav-item d-none d-md-block">
                            <a class="navbar-brand" href="<?php //echo base_url(); ?>">
                                <img class="brand-logo" alt="robust admin logo" src="<?php //echo base_url(); ?>app-assets/images/logo/logo-dark-sm.png">
                            </a>
                        </li-->
                        <li class="nav-item mobile-menu d-md-none mr-auto">
                            <!--a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                                <i class="fa fa-ellipsis-v"></i>
                            </a-->
                            <a class="nav-link" href="<?php echo base_url(); ?>">
                                <img class="brand-logo" alt="robust admin logo" src="<?php echo base_url(); ?>app-assets/images/logo/logo-dark-sm.png">
                            </a>
                        </li>
                        <li class="nav-item d-md-none">
                            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile">
                                <i class="ft-menu font-large-1"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="navbar-container container center-layout">
                    <div class="collapse navbar-collapse" id="navbar-mobile">

                        <ul class="nav navbar-nav mr-auto float-left">
                            <li class="nav-item d-none d-md-block">
                                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                                    <img class="brand-logo" alt="robust admin logo" src="<?php echo base_url(); ?>app-assets/images/logo/logo-dark-sm.png">
                                </a>
                            </li>
                            <!--li class="nav-item nav-search">
                                <a class="nav-link nav-link-search" href="#">
                                    <i class="ficon ft-search"></i>
                                </a>
                                <div class="search-input">
                                    <input class="input" type="text" placeholder="Explore Robust...">
                                </div>
                            </li-->
                        </ul>

                        <ul class="nav navbar-nav float-right">
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."portada"; ?>" data-toggle="">Portada</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>" data-toggle="">Inicio</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."directorio"; ?>" data-toggle="">Directorio</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."categorias"; ?>" data-toggle="">Categorías</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."locales"; ?>" data-toggle="">Locales</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."promociones"; ?>" data-toggle="">Promociones</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."mapa"; ?>" data-toggle="">Mapa</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."eventos"; ?>" data-toggle="">Eventos</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."info/acerca"; ?>" data-toggle="">Acerca</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."info/contacto"; ?>" data-toggle="">Contacto</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </nav>

        <!-- ////////////////////////////////////////////////////////////////////////////-->

        <div class="d-md-none mr-auto header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-light navbar-without-dd-arrow navbar-shadow" role="navigation" data-menu="menu-wrapper">
            <div class="navbar-container main-menu-content container center-layout" data-menu="menu-container">
            </div>
        </div>