<img class="img-fluid" src="almacenamiento\locales\banner-locales.jpg" alt="">

<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- INICIA CONTENIDO  -->
        
            <?php $this->load->view('_templates/mensajes_alerta.tpl.php');?>

            <section id="">
                <form class="form">

                    <ul class="list-inline">
                        <?php foreach ($categorias_list as $categoria_row): ?>
                            <li>
                                <a class="btn btn-outline-secondary btn-min-width mr-1 mb-1" href="#<?php echo $categoria_row->url; ?>"><?php echo ucwords(mb_strtolower($categoria_row->nombre)); ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="form-body mt-5">
                        <?php foreach ($categorias_list as $categoria_row): ?>
                            <h5 class="form-section" id="<?php echo $categoria_row->url; ?>"><?php echo $categoria_row->nombre; ?></h5>
                            <div class="row match-height">
                                <?php foreach ($locales_list as $local_row): ?>

                                    <?php if ($categoria_row->nombre == $local_row->categorias_nombre): ?>

                                        <div class="col-md-3 col-6">
                                            <a href="<?php echo site_url("locales/ver/".$local_row->url); ?>" itemprop="" data-size="480x360">
                                                <div class="card">
                                                    <div class="card-content">
                                                        <img class="img-fluid rounded" src="<?php echo base_url_locales().$local_row->url; ?>/logotipo.jpg" itemprop="" alt="Imagen de <?php echo strtolower($local_row->nombre); ?>" />
                                                        <!--img class="card-img-top img-fluid rounded" src="<?php //echo base_url_locales().$local_row->url; ?>/logotipo.jpg" itemprop="" alt="Imagen de <?php //echo strtolower($local_row->nombre); ?>" /-->
                                                        <!--div class="card-body text-center mt-1">
                                                            <h4 class="card-title"><strong><?php //echo $local_row->nombre; ?></strong></h4>
                                                        </div-->
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
            
        </div>
    </div>
</div>
