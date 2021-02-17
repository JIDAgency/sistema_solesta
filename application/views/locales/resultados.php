<style>
.app-content {
    min-height: 800px;
}
</style>
<img class="img-fluid" src="<?php echo base_url(); ?>almacenamiento\locales\banner-locales.jpg" alt="">

<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
        <div class="content-body">
        
            <?php $this->load->view('_templates/mensajes_alerta.tpl.php');?>

            <section id="">

                    <div class=mt-5">
                        <div class="pb-0">
                            <fieldset class="form-group position-relative mb-0">                
                                <input type="text" name="buscador" id="buscador" class="form-control form-control-xl input-xl" placeholder="Buscar...">
                                <div class="form-control-position">
                                    <i class="ft-mic font-medium-4"></i>
                                </div>
                            </fieldset>
                        </div>
                        <br>
                        <div class="row match-height" name="resultados" id="resultados">

                        </div>
                    </div>

            </section>
            
        </div>
    </div>
</div>
