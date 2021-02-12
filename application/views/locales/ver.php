<div class="app-content center-layout">
    <div class="container-fluid">
        <div class="content-body">
            <?php if (isset($imagen_banner_principal)): ?>
            <?php endif; ?>
            <div class="row bg-banner-locales-ver" style="background: url(<?php echo base_url_locales().$local_row->url.'/'.$imagen_banner_principal->url; ?>) no-repeat center center; background-size: cover;">

                <?php //if (isset($imagen_banner_principal_movil)): ?>
                    <!--div class="row bg-banner-locales-ver d-block d-sm-none" style="background: url(<?php echo base_url_locales().$local_row->url.'/'.$imagen_banner_principal_movil->url; ?>) no-repeat center center; background-size: cover;"-->
                <?php //endif; ?>

                <div class="container info-principal-local pt-5">
                    <div class="row align-items-end">
                        <div class="col">

                        <div class="contenedor-principal-local">
                <?php foreach ($categorias_list as $categoria_row): ?>
                    <a class="btn btn-primary btn-min-width mr-1 mb-1 bg-purple bg-darken-3" href="<?php echo site_url("categorias/ver/".$categoria_row->url); ?>"><?php echo $categoria_row->nombre; ?></a>
                <?php endforeach; ?>

                <?php if (isset($local_row->nombre)): ?>
                    <h1><?php echo $local_row->nombre; ?></h1>
                <?php endif; ?>

                

                <?php if (isset($local_row->telefono_1)): ?>
                    <a href="tel:+52<?php echo $local_row->telefono_1; ?>">
                        <i class="teal lighten-3 fa fa-phone-square"></i> <?php echo $local_row->telefono_1; ?>
                    </a>
                <?php endif; ?>

                <?php if (isset($local_row->telefono_2)): ?>
                    <a href="tel:+52<?php echo $local_row->telefono_2; ?>">
                        <i class="teal lighten-3 fa fa-phone-square"></i> <?php echo $local_row->telefono_2; ?>
                    </a>
                <?php endif; ?>

                <?php if (isset($local_row->correo_electronico)): ?>
                    <a href="mailto:<?php echo $local_row->correo_electronico; ?>">
                        <i class="teal lighten-3 fa fa-envelope-square"></i> <?php echo $local_row->correo_electronico; ?>
                    </a>
                <?php endif; ?>

                </br>
                <?php if (isset($local_row->ubicacion)): ?>
                    <a href="<?php echo $local_row->url_ubicacion; ?>" target="_blank" rel="noopener noreferrer">
                        <i class="teal lighten-3 fa fa-share-square"></i> <?php echo $local_row->ubicacion; ?>
                    </a>

                <?php endif; ?>

                <p><i class="teal lighten-3 fa fa-clock-o info"></i> Lun - Dom | 10:00am - 18:00pm</p>
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
                                                <li class="breadcrumb-item white"><a href="<?php echo site_url("categorias/ver/".$categoria_row->url); ?>"><strong><?php echo ucwords(mb_strtolower($categoria_row->nombre)); ?></strong></a></li>
                                                <li class="breadcrumb-item white active"><strong><?php echo ucwords(mb_strtolower($local_row->nombre)); ?></strong></li>
                                            </ol>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>

                        <div class="card bg-transparent">
							<div class="card-content">
								<div class="card-body p-0">
                                    <?php foreach ($imagenes_galeria_list as $imagen_galeria_row): ?>
                                        <img class="img-fluid rounded" src="<?php echo base_url_locales().$local_row->url.'/'.$imagen_galeria_row->url; ?>" alt="<?php echo $imagen_galeria_row->alt; ?>">
                                    <?php endforeach; ?>
								</div>
							</div>
						</div>

                        <div class="card bg-transparent">
							<div class="card-content">
								<div class="card-body">
                                    <?php if (isset($local_row->nombre)): ?>
                                        <h4 class="card-title text-uppercase purple"><?php echo $local_row->nombre.' | '.titulo(); ?></h4>
                                    <?php endif; ?>
                                    <?php if (isset($local_row->descripcion)): ?>
                                        <p class="text-justify"><?php echo $local_row->descripcion; ?></p>
                                    <?php endif; ?>
								</div>
							</div>
						</div>

                        <div class="card bg-transparent">
							<div class="card-content">
								<div class="card-body p-0">
                                    <?php foreach ($imagenes_galeria_list as $imagen_galeria_row): ?>
                                        <img class="img-fluid rounded" src="<?php echo base_url_locales().$local_row->url.'/'.$imagen_galeria_row->url; ?>" alt="<?php echo $imagen_galeria_row->alt; ?>">
                                    <?php endforeach; ?>
								</div>
							</div>
						</div>

                        <div class="card bg-transparent">
							<div class="card-content">
								<div class="card-body p-0">
                                    <?php if (isset($imagenes_promociones_list)): ?>
                                        <?php foreach ($imagenes_promociones_list as $imagen_promocion_row): ?>
                                            <img class="img-fluid rounded" src="<?php echo base_url_locales().$local_row->url.'/'.$imagen_promocion_row->url; ?>" alt="<?php echo $imagen_promocion_row->alt; ?>" width="250">
                                        <?php endforeach; ?>
                                    <?php endif; ?>
								</div>
							</div>
						</div>

                        <div class="card bg-transparent">
							<div class="card-content">
								<div class="card-body p-0">
                                    <?php if (isset($imagenes_eventos_list)): ?>
                                        <?php foreach ($imagenes_eventos_list as $imagen_evento_row): ?>
                                            <img class="img-fluid rounded" src="<?php echo base_url_locales().$local_row->url.'/'.$imagen_evento_row->url; ?>" alt="<?php echo $imagen_evento_row->alt; ?>" width="250">
                                        <?php endforeach; ?>
                                    <?php endif; ?>
								</div>
							</div>
						</div>

					</div>

					<div class="col-lg-4 col-md-12">

                        <div class="card bg-transparent">
                            <div class="card-content">
                                <div class="card-body p-0">
                                    <?php if (isset($imagen_logotipo)): ?>
                                        <img class="img-fluid rounded" src="<?php echo base_url_locales().$local_row->url.'/'.$imagen_logotipo->url; ?>" alt="">
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-transparent">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title text-uppercase purple">Rango de precios</h4>
                                    <p>Comida: <span class="teal lighten-3">$150 - $600</span></p>
                                    <p>Bebidas: <span class="teal lighten-3">$60 - $1,000</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-transparent">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title text-uppercase purple">Amenidades</h4>
                                    <p><i class="teal lighten-3 fa fa-check"></i> Bebidas alcohólicas</p>
                                    <p><i class="teal lighten-3 fa fa-check"></i> Reservaciones</p>
                                    <p><i class="teal lighten-3 fa fa-check"></i> Bar</p>
                                    <p><i class="teal lighten-3 fa fa-check"></i> Apto para niños</p>
                                    <p><i class="teal lighten-3 fa fa-check"></i> Comidas gourmet</p>
                                    <p><i class="teal lighten-3 fa fa-check"></i> Precios $100+</p>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-transparent">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title text-uppercase purple">Redes sociales</h4>
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
                        </div>

                        <div class="card bg-transparent">
                            <div class="card-content">
                                <div class="card-body p-0">
                                    <?php if (isset($imagen_pickup)): ?>
                                        <img class="img-fluid rounded" src="<?php echo base_url_locales().$local_row->url.'/'.$imagen_pickup->url; ?>" alt="<?php echo $imagen_pickup->alt; ?>">
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
