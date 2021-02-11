<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
        <div class="content-body">

            <ul class="list-inline">
                <?php foreach ($categorias_list as $categoria_row): ?>
                    <li>
                        <a class="btn btn-outline-secondary btn-min-width mr-1 mb-1" href="<?php echo site_url("categorias/ver/".$categoria_row->url); ?>"><?php echo ucwords(mb_strtolower($categoria_row->nombre)); ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <h4 class="card-title text-uppercase"><?php echo $categoria_actual->nombre.' | '.titulo(); ?></h4>

            <?php $this->load->view('_templates/mensajes_alerta.tpl.php');?>
            
            <section id="">
                <div class="row match-height">
                    <?php foreach ($locales_list as $local_row): ?>
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <a href="<?php echo site_url("locales/ver/".$local_row->url); ?>" itemprop="" data-size="480x360">
                                <div class="card">
                                    <div class="card-content">
                                        <img class="card-img-top img-fluid" src="<?php echo base_url_locales().$local_row->url; ?>/logotipo.jpg" itemprop="" alt="Imagen de <?php echo strtolower($local_row->nombre); ?>">
                                        <!--div class="card-body text-center mt-1">
                                            <h4 class="card-title"><strong><?php //echo $local_row->nombre; ?></strong></h4>
                                        </div-->
                                    </div>
                                </div>
                            </a>

                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

        </div>
    </div>
</div>