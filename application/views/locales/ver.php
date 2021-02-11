<div class="app-content center-layout">
    <div class="container-fluid">
        <div class="content-body">
            <?php if (isset($imagen_banner_principal)): ?>
            <?php endif; ?>
            <div class="row bg-banner-locales-ver d-none d-sm-block" style="background: url(<?php echo base_url_locales().$local_row->url.'/'.$imagen_banner_principal->url; ?>) no-repeat center center; background-size: cover;">

                <?php //if (isset($imagen_banner_principal_movil)): ?>
                    <!--div class="row bg-banner-locales-ver d-block d-sm-none" style="background: url(<?php echo base_url_locales().$local_row->url.'/'.$imagen_banner_principal_movil->url; ?>) no-repeat center center; background-size: cover;"-->
                <?php //endif; ?>

                <?php foreach ($categorias_list as $categoria_row): ?>
                    <a class="btn btn-primary btn-min-width mr-1 mb-1" href="<?php echo site_url("categorias/ver/".$categoria_row->url); ?>"><?php echo $categoria_row->nombre; ?></a>
                <?php endforeach; ?>

                <?php if (isset($local_row->nombre)): ?>
                    <h1><?php echo $local_row->nombre; ?></h1>
                <?php endif; ?>

                <p><i class="teal lighten-3 fa fa-clock-o info"></i> Lun - Dom | 10:00am - 18:00pm</p>

                <?php if (isset($local_row->telefono_1)): ?>
                    <a href="tel:+52<?php echo $local_row->telefono_1; ?>">
                        <p class="black"><i class="teal lighten-3 fa fa-phone-square"></i> <?php echo $local_row->telefono_1; ?></p>
                    </a>
                <?php endif; ?>

                <?php if (isset($local_row->telefono_2)): ?>
                    <a href="tel:+52<?php echo $local_row->telefono_2; ?>">
                        <p class="black"><i class="teal lighten-3 fa fa-phone-square"></i> <?php echo $local_row->telefono_2; ?></p>
                    </a>
                <?php endif; ?>

                <?php if (isset($local_row->correo_electronico)): ?>
                    <a href="mailto:<?php echo $local_row->correo_electronico; ?>">
                        <p class="black"><i class="teal lighten-3 fa fa-envelope-square"></i> <?php echo $local_row->correo_electronico; ?></p>
                    </a>
                <?php endif; ?>

                <?php if (isset($local_row->ubicacion)): ?>
                    <a href="<?php echo $local_row->url_ubicacion; ?>" target="_blank" rel="noopener noreferrer">
                        <p class="black"><i class="teal lighten-3 fa fa-share-square"></i> <?php echo $local_row->ubicacion; ?></p>
                    </a>
                <?php endif; ?>
            </div>
        </div>

        <div class="content-body">
            <section id="categorias-gallery" class="card">
                <div class="card-header">
                    <?php $this->load->view('_templates/mensajes_alerta.tpl.php');?>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <?php if (isset($imagen_logotipo)): ?>
                                    <img class="img-fluid mb-2" src="<?php echo base_url_locales().$local_row->url.'/'.$imagen_logotipo->url; ?>" alt="" width="250">
                                <?php endif; ?>
                                <?php if (isset($local_row->nombre)): ?>
                                    <h4 class="card-title text-uppercase"><?php echo $local_row->nombre.' | '.titulo(); ?></h4>
                                <?php endif; ?>
                                <div class="card-text">
                                    
                                    <?php if (isset($local_row->descripcion)): ?>
                                        <p><?php echo $local_row->descripcion; ?></p>
                                    <?php endif; ?>

                                    <div class="text-center mt-2">
                                        <?php if (isset($local_row->url_pagina)): ?>
                                            <a href="//<?php echo $local_row->url_pagina; ?>" target="_blank" class="btn btn-social-icon mr-1 mb-1"><span class="teal lighten-3 fa fa-globe"></span></a>
                                        <?php endif; ?>
                                        <?php if (isset($local_row->url_facebook)): ?>
                                            <a href="<?php echo $local_row->url_facebook; ?>" target="_blank" class="btn btn-social-icon mr-1 mb-1"><span class="teal lighten-3 fa fa-facebook-square"></span></a>
                                        <?php endif; ?>
                                        <?php if (isset($local_row->url_instagram)): ?>
                                            <a href="<?php echo $local_row->url_instagram; ?>" target="_blank" class="btn btn-social-icon mr-1 mb-1"><span class="teal lighten-3 fa fa-instagram"></span></a>
                                        <?php endif; ?>
                                        <?php if (isset($local_row->url_twitter)): ?>
                                            <a href="<?php echo $local_row->url_twitter; ?>" target="_blank" class="btn btn-social-icon mr-1 mb-1"><span class="teal lighten-3 fa fa-twitter-square"></span></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <?php foreach ($imagenes_galeria_list as $imagen_galeria_row): ?>
                                    <img class="img-fluid" src="<?php echo base_url_locales().$local_row->url.'/'.$imagen_galeria_row->url; ?>" alt="<?php echo $imagen_galeria_row->alt; ?>">
                                <?php endforeach; ?>
                            </div>

                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <?php if (isset($imagen_pickup)): ?>
                                    <img class="img-fluid mb-2" src="<?php echo base_url_locales().$local_row->url.'/'.$imagen_pickup->url; ?>" alt="<?php echo $imagen_pickup->alt; ?>" width="250">
                                <?php endif; ?>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <?php if (isset($imagenes_promociones_list)): ?>
                                    <?php foreach ($imagenes_promociones_list as $imagen_promocion_row): ?>
                                        <img class="img-fluid mb-2" src="<?php echo base_url_locales().$local_row->url.'/'.$imagen_promocion_row->url; ?>" alt="<?php echo $imagen_promocion_row->alt; ?>" width="250">
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <?php if (isset($imagenes_eventos_list)): ?>
                                    <?php foreach ($imagenes_eventos_list as $imagen_evento_row): ?>
                                        <img class="img-fluid mb-2" src="<?php echo base_url_locales().$local_row->url.'/'.$imagen_evento_row->url; ?>" alt="<?php echo $imagen_evento_row->alt; ?>" width="250">
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
