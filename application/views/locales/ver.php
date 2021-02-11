<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
        <div class="content-header row">
            <!--div class="content-header-left col-md-6 col-12 mb-2">
            </div>
            <div class="content-header-right col-md-6 col-12">
            </div-->
        </div>
        <div class="content-body">


            <section id="categorias-gallery" class="card">
                <?php if (isset($imagen_banner_principal)): ?>
                    <img class="card-img-top img-fluid mb-1 d-none d-sm-block" src="<?php echo base_url_locales().$local_row->url.'/'.$imagen_banner_principal->url; ?>" alt="Bienvenida">
                <?php endif; ?>
                <?php if (isset($imagen_banner_principal_movil)): ?>
                    <img class="card-img-top img-fluid mb-1 d-block d-sm-none" src="<?php echo base_url_locales().$local_row->url.'/'.$imagen_banner_principal_movil->url; ?>" alt="Bienvenida">
                <?php endif; ?>
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
                                    <?php if (isset($local_row->nombre)): ?>
                                        <p><?php echo $local_row->nombre; ?></p>
                                    <?php endif; ?>
                                    <?php if (isset($local_row->descripcion)): ?>
                                        <p><?php echo $local_row->descripcion; ?></p>
                                    <?php endif; ?>
                                    <?php if (isset($local_row->telefono_1)): ?>
                                        <p><?php echo $local_row->telefono_1; ?></p>
                                    <?php endif; ?>
                                    <?php if (isset($local_row->telefono_2)): ?>
                                        <p><?php echo $local_row->telefono_2; ?></p>
                                    <?php endif; ?>
                                    <?php if (isset($local_row->ubicacion)): ?>
                                        <p><?php if (isset($local_row->url_ubicacion)): ?><a href="<?php echo $local_row->url_ubicacion; ?>" target="_blank" class="btn btn-social-icon"><span class="fa fa-location-arrow"></span></a><?php endif; ?><?php echo $local_row->ubicacion; ?></p>
                                    <?php endif; ?>
                                    <?php if (isset($local_row->correo_electronico)): ?>
                                        <p><?php echo $local_row->correo_electronico; ?></p>
                                    <?php endif; ?>
                                    <div class="text-center mt-2">
                                        <?php if (isset($local_row->url_pagina)): ?>
                                            <a href="//<?php echo $local_row->url_pagina; ?>" target="_blank" class="btn btn-social-icon mr-1 mb-1"><span class="fa fa-globe"></span></a>
                                        <?php endif; ?>
                                        <?php if (isset($local_row->url_facebook)): ?>
                                            <a href="<?php echo $local_row->url_facebook; ?>" target="_blank" class="btn btn-social-icon mr-1 mb-1"><span class="fa fa-facebook-square"></span></a>
                                        <?php endif; ?>
                                        <?php if (isset($local_row->url_instagram)): ?>
                                            <a href="<?php echo $local_row->url_instagram; ?>" target="_blank" class="btn btn-social-icon mr-1 mb-1"><span class="fa fa-instagram"></span></a>
                                        <?php endif; ?>
                                        <?php if (isset($local_row->url_twitter)): ?>
                                            <a href="<?php echo $local_row->url_twitter; ?>" target="_blank" class="btn btn-social-icon mr-1 mb-1"><span class="fa fa-twitter-square"></span></a>
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
