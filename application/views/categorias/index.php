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
                    <h4 class="card-title text-uppercase">Categorías Solesta</h4>
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

                            <?php foreach ($categorias_list as $categoria_row): ?>

                                <div class="col-lg-3 col-md-6 col-12 mb-2">
                                    <a href="<?php echo site_url("categorias/ver/".$categoria_row->url); ?>" itemprop="" data-size="480x360">
                                        <img class="img-fluid" src="<?php echo base_url_categorias().$categoria_row->url_imagen; ?>" itemprop="" alt="Imagen de <?php echo strtolower($categoria_row->nombre); ?>" />
                                    </a>
                                    <span><?php echo $categoria_row->nombre; ?></span>
                                </div>

                            <?php endforeach; ?>
                            
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
