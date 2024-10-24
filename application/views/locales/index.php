<div class="app-content center-layout">
    <div class="container-fluid">
        <div class="content-body">
            <?php if (isset($imagen_banner_principal)) : ?>
            <?php endif; ?>
            <div class="row bg-banner-locales-ver" style="background: url(<?php echo base_url_locales() . $local_row->url . '/' . $imagen_banner_principal->url; ?>) no-repeat center center; background-size: cover;">
                <div class="mascara">
                    <?php //if (isset($imagen_banner_principal_movil)): 
                    ?>
                    <!--div class="row bg-banner-locales-ver d-block d-sm-none" style="background: url(<?php echo base_url_locales() . $local_row->url . '/' . $imagen_banner_principal_movil->url; ?>) no-repeat center center; background-size: cover;"-->
                    <?php //endif; 
                    ?>

                    <div class="container info-principal-local pt-5">
                        <div class="row align-items-end">
                            <div class="col">

                                <div class="contenedor-principal-local">

                                    <?php foreach ($categorias_list as $categoria_row) : ?>
                                        <a class="btn btn-primary btn-min-width mr-1 mb-1 bg-purple bg-darken-3" href="<?php echo site_url("categorias/ver/" . $categoria_row->url); ?>"><?php echo $categoria_row->nombre; ?></a>
                                    <?php endforeach; ?>

                                    <?php if (isset($local_row->nombre)) : ?>
                                        <h1><?php echo $local_row->nombre; ?></h1>
                                    <?php endif; ?>

                                    </br>

                                    <?php foreach ($horarios_list as $horario_row) : ?>
                                        <span><i class="teal lighten-3 fa fa-clock-o info"></i> <?php echo $horario_row->dia_inicio != $horario_row->dia_fin ? "<b>" . $horario_row->dia_inicio . " - " . $horario_row->dia_fin . "</b> | " . date('g:i a', strtotime($horario_row->hora_inicio)) . " - " . date('g:i a', strtotime($horario_row->hora_fin)) . "" : "<b>" . $horario_row->dia_inicio . "</b> | " . date('g:i a', strtotime($horario_row->hora_inicio)) . " - " . date('g:i a', strtotime($horario_row->hora_fin)) . ""; ?></span><br>
                                    <?php endforeach; ?>

                                    <?php if (isset($local_row->ubicacion)) : ?>
                                        <a href="<?php echo $local_row->url_ubicacion; ?>" target="_blank" rel="noopener noreferrer">
                                            <i class="teal lighten-3 fa fa-share-square"></i> <?php echo $local_row->ubicacion; ?>
                                        </a>
                                    <?php endif; ?>

                                    <br>

                                    <?php if (isset($local_row->telefono_1)) : ?>
                                        <a href="tel:+52<?php echo $local_row->telefono_1; ?>">
                                            <i class="teal lighten-3 fa fa-phone-square"></i> <?php echo $local_row->telefono_1; ?>
                                        </a>
                                    <?php endif; ?>

                                    <?php if (isset($local_row->telefono_1) and isset($local_row->telefono_2)) : ?>
                                        <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;"; ?>
                                    <?php endif; ?>

                                    <?php if (isset($local_row->telefono_2)) : ?>
                                        <a href="tel:+52<?php echo $local_row->telefono_2; ?>">
                                            <i class="teal lighten-3 fa fa-phone-square"></i> <?php echo $local_row->telefono_2; ?>
                                        </a>
                                    <?php endif; ?>

                                    <?php if (isset($local_row->telefono_1) or isset($local_row->telefono_2) and isset($local_row->telefono_2)) : ?>
                                        <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;"; ?>
                                    <?php endif; ?>

                                    <?php if (isset($local_row->correo_electronico)) : ?>
                                        <a href="mailto:<?php echo $local_row->correo_electronico; ?>">
                                            <i class="teal lighten-3 fa fa-envelope-square"></i> <?php echo $local_row->correo_electronico; ?>
                                        </a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
            <div class="container">
                <div class="row mt-3">
                    <div class="col-lg-8 col-md-12">

                        <div class="card bg-purple bg-darken-3">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row breadcrumbs-top">
                                        <div class="breadcrumb-wrapper col-12">
                                            <ol class="breadcrumb ">
                                                <li class="breadcrumb-item white"><a href="<?php echo site_url("inicio"); ?>"><strong>Inicio</strong></a></li>
                                                <li class="breadcrumb-item white"><a href="<?php echo site_url("categorias/ver/" . $categoria_row->url); ?>"><strong><?php echo ucwords(mb_strtolower($categoria_row->nombre)); ?></strong></a></li>
                                                <li class="breadcrumb-item white active"><strong><?php echo ucwords(mb_strtolower($local_row->nombre)); ?></strong></li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card no-border">
                            <div class="card-content">
                                <div class="card-body p-0">
                                    <?php foreach (array_slice($imagenes_galeria_list, 0, 1) as $imagen_galeria_row) : ?>
                                        <img class="img-fluid rounded" src="<?php echo base_url_locales() . $local_row->url . '/' . $imagen_galeria_row->url; ?>" alt="<?php echo $imagen_galeria_row->alt; ?>">
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <?php if (isset($local_row->nombre)) : ?>
                                        <h4 class="card-title text-uppercase purple"><?php echo $local_row->nombre . ' | ' . titulo(); ?></h4>
                                    <?php endif; ?>
                                    <?php if (isset($local_row->descripcion)) : ?>
                                        <p class="text-justify"><?php echo $local_row->descripcion; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="card no-border">
                            <div class="card-content">

                                <div class="card-body my-gallery mb-2 p-0">
                                    <div class="row">
                                        <?php foreach ($imagenes_galeria_list as $imagen_galeria_row) : ?>
                                            <figure class="col-lg-6 col-md-6 col-12 mb-2">
                                                <a href="<?php echo base_url_locales() . $local_row->url . '/' . $imagen_galeria_row->url; ?>" itemprop="contentUrl" data-size="1100x619">
                                                    <img class="img-fluid rounded" src="<?php echo base_url_locales() . $local_row->url . '/' . $imagen_galeria_row->url; ?>" itemprop="thumbnail" alt="<?php echo $imagen_galeria_row->alt; ?>" />
                                                </a>
                                            </figure>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="card no-border">
                            <div class="card-content">
                                <div class="card-body my-gallery mb-2 p-0">
                                    <?php if (isset($imagenes_promociones_list)) : ?>
                                        <div class="row">
                                            <?php foreach ($imagenes_promociones_list as $imagen_promocion_row) : ?>
                                                <figure class="col-lg-4 col-md-6 col-12 mb-2">
                                                    <a href="<?php echo base_url_locales() . $local_row->url . '/' . $imagen_promocion_row->url; ?>" itemprop="contentUrl" data-size="1200x1200">
                                                        <img class="img-fluid rounded" src="<?php echo base_url_locales() . $local_row->url . '/' . $imagen_promocion_row->url; ?>" itemprop="thumbnail" alt="<?php echo $imagen_promocion_row->alt; ?>" />
                                                    </a>
                                                </figure>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>


                        <div class="card no-border">
                            <div class="card-content">
                                <div class="card-body my-gallery mb-2 p-0">
                                    <?php if (isset($imagenes_eventos_list)) : ?>
                                        <div class="row">
                                            <?php foreach ($imagenes_eventos_list as $imagen_evento_row) : ?>
                                                <figure class="col-lg-6 col-md-6 col-12 mb-2">
                                                    <a href="<?php echo base_url_locales() . $local_row->url . '/' . $imagen_evento_row->url; ?>" itemprop="contentUrl" data-size="1200x1200">
                                                        <img class="img-fluid rounded" src="<?php echo base_url_locales() . $local_row->url . '/' . $imagen_evento_row->url; ?>" itemprop="thumbnail" alt="<?php echo $imagen_evento_row->alt; ?>" />
                                                    </a>
                                                </figure>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-12">

                        <div class="card no-border">
                            <div class="card-content">
                                <div class="card-body p-0">
                                    <?php if (isset($imagen_logotipo)) : ?>
                                        <img class="img-fluid rounded" src="<?php echo base_url_locales() . $local_row->url . '/' . $imagen_logotipo->url; ?>" alt="">
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <!--div class="card no-border">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title text-uppercase purple">Rango de precios</h4>
                                    <p>Comida: <span class="teal lighten-3">$150 - $600</span></p>
                                    <p>Bebidas: <span class="teal lighten-3">$60 - $1,000</span></p>
                                </div>
                            </div>
                        </div-->

                        <?php if (isset($etiquetas_list) and !empty($etiquetas_list)) : ?>
                            <div class="card no-border">
                                <div class="card-content">
                                    <div class="card-body">
                                        <!--h4 class="card-title text-uppercase purple"></h4-->
                                        <?php foreach ($etiquetas_list as $etiqueta_row) : ?>
                                            <p><i class="teal lighten-3 fa fa-check"></i> <?php echo $etiqueta_row->nombre; ?></p>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title text-uppercase purple">Redes sociales</h4>
                                    <div class="text-center mt-2">
                                        <?php if (isset($local_row->url_pagina)) : ?>
                                            <a href="//<?php echo $local_row->url_pagina; ?>" target="_blank" class="btn btn-social-icon mr-1 mb-1"><span class="teal lighten-3 fa fa-globe"></span></a>
                                        <?php endif; ?>
                                        <?php if (isset($local_row->url_facebook)) : ?>
                                            <a href="<?php echo $local_row->url_facebook; ?>" target="_blank" class="btn btn-social-icon mr-1 mb-1"><span class="teal lighten-3 fa fa-facebook-square"></span></a>
                                        <?php endif; ?>
                                        <?php if (isset($local_row->url_instagram)) : ?>
                                            <a href="<?php echo $local_row->url_instagram; ?>" target="_blank" class="btn btn-social-icon mr-1 mb-1"><span class="teal lighten-3 fa fa-instagram"></span></a>
                                        <?php endif; ?>
                                        <?php if (isset($local_row->url_twitter)) : ?>
                                            <a href="<?php echo $local_row->url_twitter; ?>" target="_blank" class="btn btn-social-icon mr-1 mb-1"><span class="teal lighten-3 fa fa-twitter-square"></span></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card no-border">
                            <div class="card-content">
                                <div class="card-body p-0">
                                    <?php if (isset($imagen_pickup)) : ?>
                                        <img class="img-fluid rounded" src="<?php echo base_url_locales() . $local_row->url . '/' . $imagen_pickup->url; ?>" alt="<?php echo $imagen_pickup->alt; ?>">
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
        It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader-active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>
</div>