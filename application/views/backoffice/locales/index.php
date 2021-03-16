<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
        <div class="content-body">
            <section id="configuration">
                <div class="row">
                    <div class="col-12">

                        <div class="row mt-2">
                            <div class="col-12">
                                <div class="form-group float-md-right">
                                    <div id="buttons"></div>
                                </div>
                            </div>
                        </div>

                        <table name="tabla" id="tabla" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>No. Local</th>
                                    <th>Estatus</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($locales_list as $local_row): ?>
                                    <tr>
                                        <td><?php echo $local_row->id; ?></td>
                                        <td><?php echo $local_row->nombre; ?></td>
                                        <td><?php echo $local_row->numero_local; ?></td>
                                        <td><?php echo ucfirst($local_row->estatus); ?></td>
                                        <td><?php echo '<a href="'.site_url('locales/ver/'.$local_row->url).'" target="_blank" rel="noopener noreferrer"><i class="fa fa-eye"></i></a>'; ?> | <?php echo '<a href="'.site_url('backoffice/locales/editar/'.$local_row->url).'"><i class="fa fa-pencil-square-o"></i></a>'; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>No. Local</th>
                                    <th>Estatus</th>
                                    <th>Opciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
