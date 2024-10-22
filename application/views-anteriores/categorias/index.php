<img class="img-fluid" src="almacenamiento\categorias\banner-categorias.jpg" alt="">


<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- INICIA CONTENIDO  -->

            <?php $this->load->view('_templates/mensajes_alerta.tpl.php');?>

            <section id="">
                <form class="form">

                    <div class="form-body mt-5">
                        <h5 class="form-section">Categorías</h5>
                        <div class="row match-height">
                            <?php foreach ($categorias_list as $categoria_row): ?>
                                <div class="col-md-3 col-6">
                                    <a href="<?php echo site_url("categorias/ver/".$categoria_row->url); ?>" itemprop="" data-size="480x360">
                                        <div class="card no-border">
                                            <div class="card-content">
                                                <img class="img-fluid rounded" src="<?php echo base_url_categorias().$categoria_row->url_imagen; ?>" alt="Imagen de <?php echo strtolower($categoria_row->nombre); ?>">
                                                <!--img class="card-img-top img-fluid" src="<?php //echo base_url_categorias().$categoria_row->url_imagen; ?>" alt="Imagen de <?php //echo strtolower($categoria_row->nombre); ?>"-->
                                                <!--div class="card-body text-center mt-1">
                                                    <h4 class="card-title"><strong><?php //echo $categoria_row->nombre; ?></strong></h4>
                                                </div-->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </form>
            </section>
            
        </div>
    </div>
</div>
