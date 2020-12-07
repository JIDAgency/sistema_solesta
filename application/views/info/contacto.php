<div class="container">
    <h2>Contacto</h2>
    <div class="row">
        <div class="col-lg-6">
        

            <?php echo form_open($controlador, array('class' => 'needs-validation p-2', 'id' => 'forma-'.$controlador, 'novalidate' => '', 'method' => 'post')); ?>

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

                <button name="submit" id="submit" type="submit" class="btn btn-info"/>Send</button>

            <?php echo form_close(); ?>

        </div>
    </div>
</div>
