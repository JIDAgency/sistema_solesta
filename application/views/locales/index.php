<section class="banner" name="banner" id="banner">
    <div class="container">
        <div class="row pb-5">
            <div class="col-lg-12 col-md-12 mb-sm-20">
                <div class="image-container rounded shadow">
                    <img src="<?php echo base_url_locales() . $local_row->url . '/' . $imagen_banner_principal->url; ?>" alt="Local-banner" class="img-fluid shadow image-zoom">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="branding" name="branding" id="branding">
    <div class="container">

        <div class="row gx-5 align-items-center pb-3">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-6">
                        <h1 class="wow fadeInUp" data-wow-delay=".2s"><?php echo mb_strtoupper($local_row->nombre); ?></h1>
                        <p class="">
                            <?php foreach ($categorias_list as $categoria_row) : ?>
                                <a class="" href="<?php echo site_url("directorio?categoria=" . $categoria_row->url); ?>"><?php echo $categoria_row->nombre; ?></a>
                            <?php endforeach; ?>
                        </p>
                        <p class=""><?php echo 'Solesta Local: ' . ucwords($local_row->planta) . ' #' . $local_row->numero_local; ?></p>
                        <p class="text-justify"><?php echo $local_row->descripcion; ?></p>
                    </div>
                    <div class="col-6 text-center">
                        <?php if (isset($imagen_logotipo)) : ?>
                            <img src="<?php echo base_url_locales() . $local_row->url . '/' . $imagen_logotipo->url; ?>" alt="Local-logo" class="img-fluid rounded shadow" width="300px">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb10 pb-3 wow fadeInRight" data-wow-delay=".2s">
                <div class="de-step-s1 text-dark shadow">

                    <div class="de-icon-text p-4">
                        <img src="<?php echo base_url('assets/images/recursos/local-reloj.png'); ?>" alt="icono-reloj" class="img-fluid">
                        <div class="d-text">
                            <?php foreach ($horarios_list as $horario_row) : ?>
                                <h4><?php echo $horario_row->dia_inicio != $horario_row->dia_fin ? $horario_row->dia_inicio . " - " . $horario_row->dia_fin : $horario_row->dia_inicio; ?></h4>
                                <p class="pb-3">
                                    <span>
                                        <?php echo $horario_row->dia_inicio != $horario_row->dia_fin ? date('g:i a', strtotime($horario_row->hora_inicio)) . " - " . date('g:i a', strtotime($horario_row->hora_fin)) . "" : date('g:i a', strtotime($horario_row->hora_inicio)) . " - " . date('g:i a', strtotime($horario_row->hora_fin)) . ""; ?>
                                    </span>
                                    <br>
                                </p>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb10 pb-3 wow fadeInRight" data-wow-delay=".4s">
                <div class="de-step-s1 text-dark shadow">

                    <div class="de-icon-text p-4">
                        <img src="<?php echo base_url('assets/images/recursos/local-instagram.png'); ?>" alt="icono-instagram" class="img-fluid">
                        <div class="d-text">
                            <?php if (isset($local_row->url_instagram)) : ?>
                                <h4>¿Cómo llegar?</h4>
                                <p class="pb-3">
                                    <?php
                                    $instagram_username = basename($local_row->url_instagram); // Esto obtiene el último segmento de la URL
                                    ?>
                                    <a href="<?php echo $local_row->url_instagram; ?>" target="_blank" rel="noopener noreferrer">
                                        <?php echo '@' . $instagram_username; ?>
                                    </a>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="de-icon-text p-4">
                        <img src="<?php echo base_url('assets/images/recursos/local-facebook.png'); ?>" alt="icono-facebook" class="img-fluid">
                        <div class="d-text">
                            <?php if (isset($local_row->url_facebook)) : ?>
                                <h4>¿Cómo llegar?</h4>
                                <p class="pb-3">
                                    <?php
                                    $facebook_username = basename($local_row->url_facebook); // Esto obtiene el último segmento de la URL
                                    ?>
                                    <a href="<?php echo $local_row->url_facebook; ?>" target="_blank" rel="noopener noreferrer">
                                        <?php echo '@' . $facebook_username; ?>
                                    </a>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="de-icon-text p-4">
                        <img src="<?php echo base_url('assets/images/recursos/local-telefono.png'); ?>" alt="icono-telefono" class="img-fluid">
                        <div class="d-text">
                            <?php if (isset($local_row->ubicacion)) : ?>
                                <h4>¿Cómo llegar?</h4>
                                <p class="pb-3">
                                    <a href="<?php echo $local_row->url_ubicacion; ?>" target="_blank" rel="noopener noreferrer">
                                        <?php echo $local_row->ubicacion; ?>
                                    </a>
                                </p>
                            <?php endif; ?>

                            <?php if (isset($local_row->telefono_1)) : ?>
                                <h4>Teléfono</h4>
                                <p class="pb-3">
                                    <a href="tel:+52<?php echo $local_row->telefono_1; ?>" target="_blank" rel="noopener noreferrer">
                                        +52<?php echo $local_row->telefono_1; ?>
                                    </a>
                                </p>
                            <?php endif; ?>

                            <?php if (isset($local_row->telefono_2)) : ?>
                                <h4>Teléfono secundario</h4>
                                <p class="pb-3">
                                    <a href="tel:+52<?php echo $local_row->telefono_2; ?>" target="_blank" rel="noopener noreferrer">
                                        +52<?php echo $local_row->telefono_2; ?>
                                    </a>
                                </p>
                            <?php endif; ?>

                            <?php if (isset($local_row->whatsapp)) : ?>
                                <h4>Whatsapp</h4>
                                <p class="pb-3">
                                    <a href="https://wa.me/52<?php echo $local_row->whatsapp; ?>" target="_blank" rel="noopener noreferrer">
                                        +52<?php echo $local_row->whatsapp; ?>
                                    </a>
                                </p>
                            <?php endif; ?>

                            <?php if (isset($local_row->correo_electronico)) : ?>
                                <h4>Correo electrónico</h4>
                                <p class="pb-3">
                                    <a href="mailto:<?php echo $local_row->correo_electronico; ?>" target="_blank" rel="noopener noreferrer">
                                        <?php echo $local_row->correo_electronico; ?>
                                    </a>
                                </p>
                            <?php endif; ?>

                            <?php if (isset($local_row->url_pagina)) : ?>
                                <h4>Sitio web</h4>
                                <p class="pb-3">
                                    <a href="<?php echo $local_row->url_pagina; ?>" target="_blank" rel="noopener noreferrer">
                                        <?php echo $local_row->url_pagina; ?>
                                    </a>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="no-top">
    <div class="container">
        <div class="row g-4 pb-5">
            <?php foreach ($imagenes_galeria_list as $imagen_galeria_row) : ?>
                <div class="col-6">
                    <div class="bloglist item">
                        <div class="post-content">

                            <img class="img-fluid rounded shadow" src="<?php echo base_url_locales() . $local_row->url . '/' . $imagen_galeria_row->url; ?>" alt="<?php echo $imagen_galeria_row->alt; ?>" />
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
    .text-shadow {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        /* Desplazamiento x, y, desenfoque, color */
    }

    .image-container {
        width: 100%;
        padding-bottom: 100%;
        /* Mantiene una relación de aspecto 1:1 (cuadrada) */
        overflow: hidden;
        position: relative;
        border-radius: 15px;
        /* Aplica el borde redondeado al contenedor */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Aplica la sombra al contenedor */
    }

    .image-zoom {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* La imagen se ajusta para llenar el contenedor manteniendo la proporción */
        transition: transform 0.3s ease;
        /* Efecto suave de zoom */
    }

    .image-zoom:hover {
        transform: scale(1.2);
        /* Zoom al hacer hover */
    }
</style>

<?php if (isset($local_row->url_facebook)) : ?>
    <a href="<?php echo $local_row->url_facebook; ?>" target="_blank"></a>
<?php endif; ?>
<?php if (isset($local_row->url_instagram)) : ?>
    <a href="<?php echo $local_row->url_instagram; ?>" target="_blank"></a>
<?php endif; ?>