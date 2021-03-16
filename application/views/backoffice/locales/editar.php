<?php echo $local_row->id; ?>
<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-6">

                    <h4 class="card-title" id="basic-layout-form">Editar local</h4>

                    
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

                        <?php echo form_open($controlador, array('class' => 'needs-validation p-2', 'id' => 'forma-'.$controlador, 'novalidate' => '', 'method' => 'post')); ?>

                            <div class="form-body">

                                <div class="form-group">
                                    <label for="userinput5">Nombre del local</label> <span class="red">*</span>
                                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" value="<?php echo set_value('nombre') == false ? $local_row->nombre : set_value('nombre'); ?>"  onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required="">
                                    <input type="hidden" name="local_url" id="local_url" class="form-control" placeholder="Local" value="<?php echo set_value('local_url') == false ? $local_row->url : set_value('local_url'); ?>" required="">
                                    <?php echo form_error('nombre', '<span class="text-danger">','</span>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="userinput5">Número de local</label> <span class="red">*</span>
                                    <input type="text" name="numero_local" id="numero_local" class="form-control" placeholder="Número" value="<?php echo set_value('numero_local') == false ? $local_row->numero_local : set_value('numero_local'); ?>" required="">
                                    <?php echo form_error('numero_local', '<span class="text-danger">','</span>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="userinput5">Descripción</label> <span class="red">*</span>
                                    <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Descripción" value="<?php echo set_value('descripcion') == false ? $local_row->descripcion : set_value('descripcion'); ?>" required="">
                                    <?php echo form_error('descripcion', '<span class="text-danger">','</span>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="userinput5">Teléfono del local</label> <span class="red">*</span>
                                    <input type="text" name="telefono_1" id="telefono_1" class="form-control" placeholder="Teléfono" value="<?php echo set_value('telefono_1') == false ? $local_row->telefono_1 : set_value('telefono_1'); ?>" required="">
                                    <?php echo form_error('telefono_1', '<span class="text-danger">','</span>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="userinput5">Teléfono del local 2</label> <span class="red">*</span>
                                    <input type="text" name="telefono_2" id="telefono_2" class="form-control" placeholder="Teléfono 2" value="<?php echo set_value('telefono_2') == false ? $local_row->telefono_2 : set_value('telefono_2'); ?>" required="">
                                    <?php echo form_error('telefono_2', '<span class="text-danger">','</span>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="userinput5">No. whatsapp del local</label> <span class="red">*</span>
                                    <input type="text" name="whatsapp" id="whatsapp" class="form-control" placeholder="Whatsapp" value="<?php echo set_value('whatsapp') == false ? $local_row->whatsapp : set_value('whatsapp'); ?>" required="">
                                    <?php echo form_error('whatsapp', '<span class="text-danger">','</span>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="userinput5">Teléfono de atención a clientes</label> <span class="red">*</span>
                                    <input type="text" name="telefono_atencion_clientes" id="telefono_atencion_clientes" class="form-control" placeholder="Teléfono" value="<?php echo set_value('telefono_atencion_clientes') == false ? $local_row->telefono_atencion_clientes : set_value('telefono_atencion_clientes'); ?>" required="">
                                    <?php echo form_error('telefono_atencion_clientes', '<span class="text-danger">','</span>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="userinput5">Ubicación</label> <span class="red">*</span>
                                    <input type="text" name="ubicacion" id="ubicacion" class="form-control" placeholder="Ubicación" value="<?php echo set_value('ubicacion') == false ? $local_row->ubicacion : set_value('ubicacion'); ?>" required="">
                                    <?php echo form_error('ubicacion', '<span class="text-danger">','</span>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="userinput8">Bio</label>
                                    <textarea id="userinput8" rows="5" class="form-control border-primary" name="bio" placeholder="Bio"></textarea>
                                </div>

                            </div>

                            <div class="form-actions right">
                                <button type="button" class="btn btn-warning mr-1">
                                    <i class="ft-x"></i> Cancel
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-check-square-o"></i> Save
                                </button>
                            </div>

                        <?php echo form_close(); ?>

                    </div>

                    <div class="col-md-6">
                    </div>
                </div>
            </section>
            <!-- // Basic form layout section end -->
        </div>
    </div>
</div>
