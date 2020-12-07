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
                    <h4 class="card-title text-uppercase"><?php echo $local_row->nombre.' | '.titulo(); ?></h4>
                </div>
                <div class="card-content">
                    <?php $this->load->view('_templates/mensajes_alerta.tpl.php');?>

                    <div class="card-body">
                        <div class="card-text">
                            <p>Texto complementario. Texto complementario. Texto complementario. Texto complementario. Texto complementario.</p>
                        </div>
                        <p><?php echo $local_row->nombre; ?></p>
                        <p><?php echo $local_row->descripcion; ?></p>
                        <p><?php echo $local_row->telefono_1; ?></p>
                        <p><?php echo $local_row->telefono_2; ?></p>
                        <p><?php echo $local_row->ubicacion; ?></p>
                        <p><?php echo $local_row->url_ubicacion; ?></p>
                        <p><?php echo $local_row->correo_electronico; ?></p>
                        <p><?php echo $local_row->url_pagina; ?></p>
                        <p><?php echo $local_row->url_facebook; ?></p>
                        <p><?php echo $local_row->url_instagram; ?></p>
                        <p><?php echo $local_row->url_twitter; ?></p>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
