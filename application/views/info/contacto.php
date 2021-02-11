<img class="img-fluid" src="<?php echo base_url(); ?>almacenamiento\contacto\banner-contacto.jpg" alt="">


<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- INICIA CONTENIDO  -->

            <section id="sizing">

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">

                            <div class="card-header">
                                <h4 class="card-title"><strong>Contactanos</strong></h4>
                            </div>

                            <div class="card-content collpase show">
                                <div class="card-body">

                                    <?php echo form_open($controlador, array('class' => 'needs-validation', 'id' => 'forma-'.$controlador, 'novalidate' => '', 'method' => 'post')); ?>
                                        
                                        <div class="form-body">

                                            <?php $this->load->view('_templates/mensajes_alerta.tpl.php');?>

                                            <div class="form-group">
                                                <input type="text" class="form-control" name="contacto_nombre" id="" placeholder="Nombre completo *" value="<?php echo set_value('contacto_nombre') == false ? $this->session->flashdata('contacto_nombre') : set_value('contacto_nombre'); ?>"/>
                                                <?php echo form_error('contacto_nombre', '<span class="text-danger">','</span>'); ?>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" name="contacto_correo_electronico" id="contacto_correo_electronico" placeholder="Correo electrónico *" value="<?php echo set_value('contacto_correo_electronico') == false ? $this->session->flashdata('contacto_correo_electronico') : set_value('contacto_correo_electronico'); ?>"/>
                                                <?php echo form_error('contacto_correo_electronico', '<span class="text-danger">','</span>'); ?>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" name="contacto_no_telefono" id="contacto_no_telefono" placeholder="Número de contacto" value="<?php echo set_value('contacto_no_telefono') == false ? $this->session->flashdata('contacto_no_telefono') : set_value('contacto_no_telefono'); ?>" minlength="10" maxlength="10" onkeypress="allowNumbersOnly(event)"/>
                                                <?php echo form_error('contacto_no_telefono', '<span class="text-danger">','</span>'); ?>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" name="contacto_asunto" id="contacto_asunto" placeholder="Asunto" value="<?php echo set_value('contacto_asunto') == false ? $this->session->flashdata('contacto_asunto') : set_value('contacto_asunto'); ?>"/>
                                            </div>
                                            
                                            <div class="form-group">
                                                <textarea class="form-control" name="contacto_mensaje" id="contacto_mensaje" rows="4" placeholder="Mensaje: ¿Cómo podemos ayudarte? *"><?php echo set_value('contacto_mensaje') == false ? $this->session->flashdata('contacto_mensaje') : set_value('contacto_mensaje'); ?></textarea>
                                                <?php echo form_error('contacto_mensaje', '<span class="text-danger">','</span>'); ?>
                                            </div>

                                            <div class="form-group">
                                            
                                                <fieldset>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="validar_captcha" id="validar_captcha" placeholder="Captcha *" value="<?php echo set_value('validar_captcha'); ?>" aria-describedby="basic-captcha">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text unselectable" name="captcha" id="captcha"><strong><em><?php echo $codigo; ?></em></strong></span>
                                                        </div>
                                                    </div>
                                                </fieldset>

                                                <input type="hidden" class="input-group-text unselectable" name="verificacion_captcha" id="verificacion_captcha" value="<?php echo $codigo; ?>" readonly></input>
                                                <?php echo form_error('validar_captcha', '<span class="text-danger">','</span>'); ?>

                                            </div>

                                        </div>

                                        <div class="form-actions">
                                            <button name="submit" id="submit" type="submit" class="btn btn-info btn-purple btn-darken-3"/>Enviar</button>
                                        </div>

                                    <?php echo form_close(); ?>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><strong>Nos ubicamos en</strong></h4>
                            </div>
                            <div class="card-content collpase show">
                                <div class="card-body">

                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.6678442665034!2d-98.23146918529508!3d19.0343526871118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc730cc904b2b%3A0xb530f1deb31d3a3b!2sSolesta%20Shop%20%26%20Fun!5e0!3m2!1ses-419!2smx!4v1609803866956!5m2!1ses-419!2smx" width="100%" height="493" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </div>
</div>