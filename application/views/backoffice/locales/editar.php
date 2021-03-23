<?php echo $local_row->id; ?>
<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">

                <?php echo form_open($controlador, array('class' => 'needs-validation p-2', 'id' => 'forma-'.$controlador, 'novalidate' => '', 'method' => 'post')); ?>


                    <?php $this->load->view('_templates/mensajes_alerta.tpl.php');?>

                    <?php if (validation_errors()): ?>
                        <div class="alert bg-danger alert-icon-left alert-dismissible mb-2 font-small-3" role="alert">
                            <span class="alert-icon"><i class="fa fa-thumbs-o-down"></i></span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <?php echo validation_errors(); ?>
                        </div>
                    <?php endif?>

                    <div class="row match-height">

                        <div class="col-md-6">

                            <h4 class="card-title" id="basic-layout-form">Editar local</h4>

                                <div class="form-body">

                                    <div class="form-group">
                                        <label for="nombre">Nombre del local</label> <span class="red">*</span>
                                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" value="<?php echo set_value('nombre') == false ? $local_row->nombre : set_value('nombre'); ?>"  onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required="">
                                        <input type="hidden" name="local_url" id="local_url" class="form-control" placeholder="Local" value="<?php echo set_value('local_url') == false ? $local_row->url : set_value('local_url'); ?>" required="">
                                        <?php echo form_error('nombre', '<span class="text-danger">','</span>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="planta">Planta del local</label> <span class="red">*</span>
                                        <input type="text" name="planta" id="planta" class="form-control" placeholder="Planta" value="<?php echo set_value('planta') == false ? $local_row->planta : set_value('planta'); ?>" required="">
                                        <?php echo form_error('planta', '<span class="text-danger">','</span>'); ?>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="numero_local">Número de local</label>
                                        <input type="text" name="numero_local" id="numero_local" class="form-control" placeholder="Número" value="<?php echo set_value('numero_local') == false ? $local_row->numero_local : set_value('numero_local'); ?>">
                                        <?php echo form_error('numero_local', '<span class="text-danger">','</span>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="descripcion">Descripción</label>
                                        <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Descripción" value="<?php echo set_value('descripcion') == false ? $local_row->descripcion : set_value('descripcion'); ?>" required="">
                                        <?php echo form_error('descripcion', '<span class="text-danger">','</span>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="telefono_1">Teléfono del local</label>
                                        <input type="text" name="telefono_1" id="telefono_1" class="form-control" placeholder="Teléfono" value="<?php echo set_value('telefono_1') == false ? $local_row->telefono_1 : set_value('telefono_1'); ?>">
                                        <?php echo form_error('telefono_1', '<span class="text-danger">','</span>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="telefono_2">Teléfono del local 2</label>
                                        <input type="text" name="telefono_2" id="telefono_2" class="form-control" placeholder="Teléfono 2" value="<?php echo set_value('telefono_2') == false ? $local_row->telefono_2 : set_value('telefono_2'); ?>">
                                        <?php echo form_error('telefono_2', '<span class="text-danger">','</span>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="whatsapp">No. whatsapp del local</label>
                                        <input type="text" name="whatsapp" id="whatsapp" class="form-control" placeholder="Whatsapp" value="<?php echo set_value('whatsapp') == false ? $local_row->whatsapp : set_value('whatsapp'); ?>">
                                        <?php echo form_error('whatsapp', '<span class="text-danger">','</span>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="telefono_atencion_clientes">Teléfono de atención a clientes</label>
                                        <input type="text" name="telefono_atencion_clientes" id="telefono_atencion_clientes" class="form-control" placeholder="Teléfono" value="<?php echo set_value('telefono_atencion_clientes') == false ? $local_row->telefono_atencion_clientes : set_value('telefono_atencion_clientes'); ?>">
                                        <?php echo form_error('telefono_atencion_clientes', '<span class="text-danger">','</span>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="correo_electronico">Correo electrónico de contacto</label>
                                        <input type="text" name="correo_electronico" id="correo_electronico" class="form-control" placeholder="Correo" value="<?php echo set_value('correo_electronico') == false ? $local_row->correo_electronico : set_value('correo_electronico'); ?>">
                                        <?php echo form_error('correo_electronico', '<span class="text-danger">','</span>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="ubicacion">Ubicación</label> <span class="red">*</span>
                                        <input type="text" name="ubicacion" id="ubicacion" class="form-control" placeholder="Ubicación" value="<?php echo set_value('ubicacion') == false ? $local_row->ubicacion : set_value('ubicacion'); ?>" required="">
                                        <?php echo form_error('ubicacion', '<span class="text-danger">','</span>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="url_ubicacion">Ubicación de Google Maps</label> <span class="red">*</span>
                                        <input type="text" name="url_ubicacion" id="url_ubicacion" class="form-control" placeholder="URL Google Maps" value="<?php echo set_value('url_ubicacion') == false ? $local_row->url_ubicacion : set_value('url_ubicacion'); ?>" required="">
                                        <?php echo form_error('url_ubicacion', '<span class="text-danger">','</span>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="url_pagina">Página Web</label> <span class="red">*</span>
                                        <input type="text" name="url_pagina" id="url_pagina" class="form-control" placeholder="Página Web" value="<?php echo set_value('url_pagina') == false ? $local_row->url_pagina : set_value('url_pagina'); ?>" required="">
                                        <?php echo form_error('url_pagina', '<span class="text-danger">','</span>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="url_facebook">Página de Facebook</label> <span class="red">*</span>
                                        <input type="text" name="url_facebook" id="url_facebook" class="form-control" placeholder="URL Facebook" value="<?php echo set_value('url_facebook') == false ? $local_row->url_facebook : set_value('url_facebook'); ?>" required="">
                                        <?php echo form_error('url_facebook', '<span class="text-danger">','</span>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="url_instagram">Página de Instagram</label> <span class="red">*</span>
                                        <input type="text" name="url_instagram" id="url_instagram" class="form-control" placeholder="URL Instagram" value="<?php echo set_value('url_instagram') == false ? $local_row->url_instagram : set_value('url_instagram'); ?>" required="">
                                        <?php echo form_error('url_instagram', '<span class="text-danger">','</span>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="url_twitter">Página de Twitter</label> <span class="red">*</span>
                                        <input type="text" name="url_twitter" id="url_twitter" class="form-control" placeholder="URL Twitter" value="<?php echo set_value('url_twitter') == false ? $local_row->url_twitter : set_value('url_twitter'); ?>" required="">
                                        <?php echo form_error('url_twitter', '<span class="text-danger">','</span>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="url">Carpeta de imágenes</label> <span class="red">*</span>
                                        <input type="text" name="url" id="url" class="form-control" placeholder="Carpeta" value="<?php echo set_value('url') == false ? $local_row->url : set_value('url'); ?>" required="">
                                        <?php echo form_error('url', '<span class="text-danger">','</span>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="estatus">Estatus</label> <span class="red">*</span>
                                        <input type="text" name="estatus" id="estatus" class="form-control" placeholder="Estatus" value="<?php echo set_value('estatus') == false ? $local_row->estatus : set_value('estatus'); ?>" required="">
                                        <?php echo form_error('estatus', '<span class="text-danger">','</span>'); ?>
                                    </div>
                                    
                                    <!--div class="form-group">
                                        <label for="userinput8">Bio</label>
                                        <textarea id="userinput8" rows="5" class="form-control border-primary" name="bio" placeholder="Bio"></textarea>
                                    </div-->

                                </div>

                        </div>

                        <div class="col-md-6">
                        </div>

                    </div>

                    <div class="form-actions right">
                        <button type="button" class="btn btn-secondary mr-1">
                            <i class="ft-x"></i> Regresar
                        </button>
                        <button type="submit" class="btn btn-secondary">
                            <i class="fa fa-check-square-o"></i> Guardar
                        </button>
                    </div>

                <?php echo form_close(); ?>

            </section>
            <!-- // Basic form layout section end -->
        </div>
    </div>
</div>
