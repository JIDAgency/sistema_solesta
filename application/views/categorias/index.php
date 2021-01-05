<img class="img-fluid" src="almacenamiento\categorias\banner-categorias.jpg" alt="">
<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic example section start -->
            <section id="">
                <div class="row match-height">
                    <?php foreach ($categorias_list as $categoria_row): ?>

                    <div class="col-xl-3 col-md-6 col-sm-12">
                    <a href="<?php echo site_url("categorias/ver/".$categoria_row->url); ?>" itemprop="" data-size="480x360">

                        <div class="card">
                            <div class="card-content">
                                <!--img class="card-img-top img-fluid" src="<?php echo base_url_categorias().$categoria_row->url_imagen; ?>" alt="Imagen de <?php echo strtolower($categoria_row->nombre); ?>"-->
                                <div class="card-body text-center mt-1">
                                    <h4 class="card-title"><strong><?php echo $categoria_row->nombre; ?></strong></h4>
                                </div>
                            </div>
                        </div>
                    </a>

                    </div>

                    <?php endforeach; ?>

                </div>
            </section>
            <!-- // Basic example section end -->
        </div>
    </div>
</div>