<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html class="loading" lang="es" data-textdirection="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="En Solesta creemos en el valor de la familia, es por eso que hemos diseñado un concepto en donde cada uno de los espacios está pensado para disfrutar con la seguridad y tranquilidad que tu familia merece.">
        <meta name="keywords" content="Plaza comercial, centro comercial, Puebla, Solesta, Plaza comercial Solesta, Centro comercial Solesta, Tiendas solesta, Plaza comercial Solesta Puebla, Centro comercial Solesta Puebla, Centros comerciales en puebla">
        <meta name="author" content="JID Agency">
        <title><?php echo isset($pagina_titulo) ? $pagina_titulo." | " : ""; ?><?php echo titulo(); ?></title>
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>app-assets/images/ico/favicon.ico">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
    <body id="vista" class="">

        <!-- fixed-top
        
        <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-static-top navbar-dark bg-purple bg-darken-3 navbar-border navbar-brand-center d-none d-sm-block d-sm-none d-md-block d-md-none">
            <div class="navbar-wrapper">
            
                <!--div class="navbar-header"
                <div class="">

                    <ul class="nav navbar-nav flex-row">
                        <!--li class="nav-item d-none d-md-block">
                            <a class="navbar-brand" href="<?php //echo base_url(); ?>">
                                <img class="brand-logo" alt="robust admin logo" src="<?php //echo base_url(); ?>almacenamiento\header\solesta-oficial-blanco.png">
                            </a>
                        </li-
                        <li class="nav-item mobile-menu d-md-none mr-auto">
                            <!--a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                                <i class="fa fa-ellipsis-v"></i>
                            </a--
                            <a class="nav-link" href="<?php echo base_url(); ?>">
                                <img class="brand-logo" alt="robust admin logo" src="<?php echo base_url(); ?>almacenamiento\header\solesta-oficial-blanco.png">
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
                                    <img class="brand-logo" alt="robust admin logo" src="<?php echo base_url(); ?>almacenamiento\header\solesta-oficial-blanco.png">
                                </a>
                            </li>
                            <!--li class="nav-item nav-search">
                                <a class="nav-link nav-link-search" href="#">
                                    <i class="ficon ft-search"></i>
                                </a>
                                <div class="search-input">
                                    <input class="input" type="text" placeholder="Explore Robust...">
                                </div>
                            </li--
                        </ul>
                        <ul class="nav navbar-nav float-right">
                            <!--li class="nav-item"><a class="nav-link" href="<?php echo base_url()."portada"; ?>" data-toggle="">Portada</a></li--
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>" data-toggle="">Inicio</a></li>
                            <!--li class="nav-item"><a class="nav-link" href="<?php echo base_url()."directorio"; ?>" data-toggle="">Directorio</a></li--
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."locales"; ?>" data-toggle="">Locales</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."categorias"; ?>" data-toggle="">Categorías</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."pickup"; ?>" data-toggle="">PickUp</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."promociones"; ?>" data-toggle="">Promociones</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."eventos"; ?>" data-toggle="">Eventos</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."mapa"; ?>" data-toggle="">Mapa</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."info/acerca"; ?>" data-toggle="">Nosotros</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."info/contacto"; ?>" data-toggle="">Contacto</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </nav>-->

        <section class="seccion-boton p-md-5 d-none d-xl-block d-xl-block d-lg-none d-md-none d-lg-block d-sm-none d-md-block bg-purple bg-darken-3">
            <div class="container">
                <div class="row">

                    <div class="col-3">
                        <img src="<?php echo base_url(); ?>almacenamiento\header\solesta-oficial-blanco.png" class="img-fluid">
                    </div>

                    <div class="col-9">
                    
                        <ul class="nav menu-principal">
                            <li class="nav-item">
                                <a class="nav-link white" href="<?php echo site_url("inicio"); ?>" data-toggle=""><strong>Inicio</strong></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link white" href="<?php echo site_url("locales"); ?>" data-toggle=""><strong>Locales</strong></a>   
                            </li>
                            <li class="nav-item">
                                <a class="nav-link white" href="<?php echo site_url("categorias"); ?>" data-toggle=""><strong>Categorías</strong></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link white" href="<?php echo site_url("pickup"); ?>" data-toggle=""><strong>PickUp</strong></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link white" href="<?php echo site_url("promociones"); ?>" data-toggle=""><strong>Promociones</strong></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link white" href="<?php echo site_url("eventos"); ?>" data-toggle=""><strong>Eventos</strong></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link white" href="<?php echo site_url("mapa"); ?>" data-toggle=""><strong>Mapa</strong></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link white" href="<?php echo site_url("info/acerca"); ?>" data-toggle=""><strong>Nosotros</strong></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link white" href="<?php echo site_url("info/contacto"); ?>" data-toggle=""><strong>Contacto</strong></a>
                            </li>
                            
                        </ul>

                    </div>

                </div>
            </div>
        </section>




        <section class="seccion-boton p-md-5 d-block d-sm-none d-none d-sm-block d-md-none bg-purple bg-darken-3">

            <div class="container">

                <div class="row">

                    <div class="col-6">
                        <img src="<?php echo base_url(); ?>almacenamiento\header\solesta-oficial-blanco.png" class="img-fluid">
                    </div>

                    <div class="col-6">
                        <a href="#" data-toggle="modal" data-target="#exampleModal"><img src="<?php echo base_url(); ?>almacenamiento\header\menu-movil.png" class="float-right" width="30"></strong></a>
                    </div>

                </div>

            </div>

        </section>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content-2">
            
                    <div class="row">
                        <div class="col">   

                            <img src="<?php echo base_url(); ?>almacenamiento\header\solesta-oficial-blanco.png" class="img-fluid p-md-5">

                            <ul class="navbar-light menu-movil">

                                <li class="nav-item">
                                    <a class="nav-link white" href="<?php echo site_url("inicio"); ?>" data-toggle=""><strong>Inicio</strong></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link white" href="<?php echo site_url("locales"); ?>" data-toggle=""><strong>Locales</strong></a>   
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link white" href="<?php echo site_url("categorias"); ?>" data-toggle=""><strong>Categorías</strong></a>
                                </li>
                    
                                <li class="nav-item">
                                    <a class="nav-link white" href="<?php echo site_url("pickup"); ?>" data-toggle=""><strong>PickUp</strong></a> 
                                </li>
                    
                                <li class="nav-item">
                                    <a class="nav-link white" href="<?php echo site_url("promociones"); ?>" data-toggle=""><strong>Promociones</strong></a>
                                </li>
                    
                                <li class="nav-item">
                                    <a class="nav-link white" href="<?php echo site_url("eventos"); ?>" data-toggle=""><strong>Eventos</strong></a>
                                </li>
                    
                                <li class="nav-item">
                                    <a class="nav-link white" href="<?php echo site_url("mapa"); ?>" data-toggle=""><strong>Mapa</strong></a>
                                </li>
                    
                                <li class="nav-item">
                                    <a class="nav-link white" href="<?php echo site_url("info/acerca"); ?>" data-toggle=""><strong>Nosotros</strong></a>
                                </li>
                    
                                <li class="nav-item">
                                    <a class="nav-link white" href="<?php echo site_url("info/contacto"); ?>" data-toggle=""><strong>Contacto</strong></a>
                                </li>
                            
                            </ul>
                        </div>
                    </div>
        
                </div>
                
                <div class="modal-footer">
                    <a href="#" class="btn btn-light square btn-min-width mr-1 mb-1" data-dismiss="modal" aria-label="Close"><strong>Cerrar</strong></a>
                </div>
                
                <div class="">
                    <a href="" target="_blank" class="btn btn-social-icon mr-1 mb-1"><span class="fa white fa-facebook-square"></span></a>
                    <a href="" target="_blank" class="btn btn-social-icon mr-1 mb-1"><span class="fa white fa-instagram"></span></a>
                    <a href="" target="_blank" class="btn btn-social-icon mr-1 mb-1"><span class="fa white fa-twitter-square"></span></a>
                </div>
            </div>
        </div>



        <!-- ////////////////////////////////////////////////////////////////////////////-->