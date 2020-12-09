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
                    <h4 class="card-title text-uppercase"><?php echo $categoria_row->nombre.' | '.titulo(); ?></h4>
                </div>
                <div class="card-content">
                    <?php $this->load->view('_templates/mensajes_alerta.tpl.php');?>

                    <div class="card-body">
                        <div class="card-text">
                            <p>Texto complementario. Texto complementario. Texto complementario. Texto complementario. Texto complementario.</p>
                        </div>
                    </div>
                    <div class="card-body  my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                        <div class="row">

                            <?php foreach ($locales_list as $local_row): ?>

                                <div class="col-lg-3 col-md-6 col-12 mb-2">
                                    <a href="<?php echo site_url("locales/ver/".$local_row->url); ?>" itemprop="" data-size="480x360">
                                        <img class="img-fluid" src="<?php echo base_url_locales().$local_row->url; ?>/logotipo.jpg" itemprop="" alt="Imagen de <?php echo strtolower($local_row->nombre); ?>" />
                                    </a>
                                </div>

                            <?php endforeach; ?>
                            
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
