<img class="img-fluid" src="almacenamiento\locales\banner-locales.jpg" alt="">

<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
        <div class="content-body">
            <h4 class="card-title text-uppercase">Locales Solesta</h4>

            <?php $this->load->view('_templates/mensajes_alerta.tpl.php');?>

            <div class="card-text">
                <p>Texto complementario. Texto complementario. Texto complementario. Texto complementario. Texto complementario.</p>
            </div>

            <!-- Basic example section start -->
            <section id="">
                <form class="form">
                    <div class="form-body">
                        <?php foreach ($categorias_list as $categoria_row): ?>
                            <h5 class="form-section"><?php echo $categoria_row->nombre; ?></h5>

                            <div class="row match-height">
                                <?php foreach ($locales_list as $local_row): ?>

                                    <?php if ($categoria_row->nombre == $local_row->categorias_nombre): ?>

                                        <div class="col-xl-3 col-md-6 col-sm-12">

                                            <a href="<?php echo site_url("locales/ver/".$local_row->url); ?>" itemprop="" data-size="480x360">

                                                <div class="card">
                                                    <div class="card-content">
                                                        <img class="img-fluid" src="<?php echo base_url_locales().$local_row->url; ?>/logotipo.jpg" itemprop="" alt="Imagen de <?php echo strtolower($local_row->nombre); ?>" />
                                                        <div class="card-body text-center mt-1">
                                                            <h4 class="card-title"><strong><?php echo $local_row->nombre; ?></strong></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>

                                    <?php endif; ?>

                                <?php endforeach; ?>

                            </div>

                        <?php endforeach; ?>
                    </div>
                </form>
            </section>
            <!-- // Basic example section end -->
        </div>
    </div>
</div>