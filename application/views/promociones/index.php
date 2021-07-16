<img class="img-fluid" src="almacenamiento\promociones\banner-promociones.jpg" alt="">


<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- INICIA CONTENIDO  -->
            <?php $this->load->view('_templates/mensajes_alerta.tpl.php');?>
            <section id="">
                <form class="form">
                    <div class="form-body text-center mt-5">
                        <h1 class="text-bold-700 purple darken-3 mb-3"><strong>Promociones Solesta en las mejores tiendas</strong></h1>

                        <div class="row match-height">
                            
                            <?php foreach ($promociones_list as $promocion_row) : ?>
                                <div class="col-md-3 col-6">
                                    <div class="card">
                                        <div class="card-content">
                                            <img class="img-fluid rounded" src="<?php echo base_url_locales().$promocion_row->local_url.'/'.$promocion_row->url; ?>" alt="<?php echo $promocion_row->alt; ?>" width="250">
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            
                            <div class="col-md-3 col-6">
                                <div class="card">
                                    <div class="card-content">
                                        <img class="img-fluid rounded" src="<?php echo base_url(); ?>almacenamiento\promociones\index\promocion-4.jpg" itemprop="" alt="Promocion Sunglass Hut"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-6">
                                <div class="card">
                                    <div class="card-content">
                                        <img class="img-fluid rounded" src="<?php echo base_url(); ?>almacenamiento\locales\dentalia\promocion-1.jpg" itemprop="" alt="Promocion Sunglass Hut"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-6">
                                <div class="card">
                                    <div class="card-content">
                                        <img class="img-fluid rounded" src="<?php echo base_url(); ?>almacenamiento\locales\dentalia\promocion-2.jpg" itemprop="" alt="Promocion Sunglass Hut"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-6">
                                <div class="card">
                                    <div class="card-content">
                                        <img class="img-fluid rounded" src="<?php echo base_url(); ?>almacenamiento\locales\dentalia\promocion-3.jpg" itemprop="" alt="Promocion Sunglass Hut"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-6">
                                <div class="card">
                                    <div class="card-content">
                                        <img class="img-fluid rounded" src="<?php echo base_url(); ?>almacenamiento\locales\dentalia\promocion-4.jpg" itemprop="" alt="Promocion Sunglass Hut"/>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <!--div class="row match-height">
                            <div class="col-md-3 col-6">
                                <div class="card">
                                    <div class="card-content">
                                        <img class="img-fluid rounded" src="<?php echo base_url(); ?>almacenamiento\locales\biancolatte\promocion-1.jpg" itemprop="" alt="Promocion Biancolatte"/>
                                    </div>
                                </div>
                            </div>
                        </div-->

                    </div>
                </form>
            </section>
        </div>
    </div>
</div>