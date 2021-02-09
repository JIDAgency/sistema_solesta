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
                <img class="card-img-top img-fluid mb-1" src="<?php echo base_url_locales().$local_row->url.'/'.$imagen_banner_principal->url; ?>" alt="Bienvenida">
                <div class="card-header">
                    <?php $this->load->view('_templates/mensajes_alerta.tpl.php');?>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <img class="img-fluid mb-2" src="<?php echo base_url_locales().$local_row->url.'/'.$imagen_logotipo->url; ?>" alt="" width="250">
                                <h4 class="card-title text-uppercase"><?php echo $local_row->nombre.' | '.titulo(); ?></h4>
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
                                    <img src="<?php echo base_url_locales().$local_row->url.'/'.$imagen_galeria_row->url; ?>" alt="<?php echo $imagen_galeria_row->alt; ?>" width="20%">
                                <?php endforeach; ?>
                                <div id="carousel-example-caption" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-caption" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-caption" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-caption" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img src="<?php echo base_url(); ?>app-assets/images/carousel/06.jpg" alt="First slide" width="100%">
                                            <div class="carousel-caption">
                                                <h3>First Slide Label</h3>
                                                <p>Donut jujubes I love topping I love sweet. Jujubes I love brownie gummi bears I love donut sweet chocolate. Tart chocolate marshmallow.Tart carrot cake muffin.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?php echo base_url(); ?>app-assets/images/carousel/08.jpg" alt="Second slide" width="100%">
                                            <div class="carousel-caption">
                                                <h3>Second Slide Label</h3>
                                                <p>Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies. Cupcake cake I love cake danish carrot cake.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?php echo base_url(); ?>app-assets/images/carousel/05.jpg" alt="Third slide" width="100%">
                                            <div class="carousel-caption">
                                                <h3>Third Slide Label</h3>
                                                <p>Pudding sweet pie gummies. Chocolate bar sweet tiramisu cheesecake chocolate cotton candy pastry muffin. Marshmallow cake powder icing.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carousel-example-caption" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-example-caption" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>

                            </div>

                            <div class="col-xl-6 col-md-6 col-sm-12">

                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
