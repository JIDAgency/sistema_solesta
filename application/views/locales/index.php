<img class="img-fluid" src="almacenamiento\locales\banner-locales.jpg" alt="">
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
                <div class="card-header">
                    <h4 class="card-title text-uppercase">Locales Solesta</h4>
                </div>
                <div class="card-content">
                    <?php $this->load->view('_templates/mensajes_alerta.tpl.php');?>

                    <div class="card-body">
                        <div class="card-text">
                            <p>Texto complementario. Texto complementario. Texto complementario. Texto complementario. Texto complementario.</p>
                        </div>

                        <form class="form">
							<div class="form-body">
                            
                                <div class="card-body  my-gallery" itemscope itemtype="http://schema.org/ImageGallery">

                                    <?php foreach ($categorias_list as $categoria_row): ?>
                                            <h5 class="form-section"><?php echo $categoria_row->nombre; ?></h5>

                                            <div class="row">

                                                <?php foreach ($locales_list as $local_row): ?>

                                                    <?php if ($categoria_row->nombre == $local_row->categorias_nombre): ?>

                                                        <div class="col-lg-3 col-md-6 col-12 mb-2">
                                                            <a href="<?php echo site_url("locales/ver/".$local_row->url); ?>" itemprop="" data-size="480x360">
                                                                <img class="img-fluid" src="<?php echo base_url_locales().$local_row->url; ?>/logotipo.jpg" itemprop="" alt="Imagen de <?php echo strtolower($local_row->nombre); ?>" />
                                                            </a>
                                                            <span><?php echo $local_row->nombre; ?></span>
                                                        </div>

                                                    <?php endif; ?>

                                                <?php endforeach; ?>
                                                
                                            </div>

                                    <?php endforeach; ?>

                                </div>

                            </div>
						</form>

                    </div>

                    
                </div>
            </section>

        </div>
    </div>
</div>
