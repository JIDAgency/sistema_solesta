<section class="no-top no-bottom" id="content">
    <div class="container my-5" id="directorio">
        <!-- Filtros de Búsqueda y Categorías -->
        <div class="row mb-4">
            <div class="col-md-12">
                <input type="text" id="searchBar" class="form-control mb-3" placeholder="Buscar locales...">
            </div>
            <div class="col-md-12">
                <div class="category-buttons text-center">
                    <a href="javascript:void(0);" class="btn-main m-1 category-link directory-category-btn" data-category="all">Todas</a>
                    <?php foreach ($categorias_list as $categoria_row) : ?>
                        <a href="javascript:void(0);" class="btn-main m-1 category-link directory-category-btn" data-category="<?php echo $categoria_row->slug; ?>"><?php echo $categoria_row->nombre; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Navegación Alfabética -->
        <div class="alphabet-navigation mb-4 text-center">
            <?php foreach ($letras_con_locales as $letra) : ?>
                <a href="javascript:void(0);" class="btn-line btn-sm m-1 alphabet-link directory-alphabet-btn"><?php echo $letra; ?></a>
            <?php endforeach; ?>
        </div>

        <!-- Mensaje de No Resultados -->
        <div id="no-results" style="display: none;">
            <p>No se encontraron locales que coincidan con tu búsqueda.</p>
        </div>

        <!-- Lista de Locales Agrupados y Ordenados -->
        <?php foreach ($letras_con_locales as $letra) : ?>
            <h5 id="letter-<?php echo $letra; ?>" data-letter="<?php echo $letra; ?>" class="mt-4"><?php echo $letra; ?></h5>
            <div class="row">
                <?php foreach ($locales_por_letra[$letra] as $local_row) : ?>
                    <div class="col-md-2 col-sm-4 col-6 mb-4 text-center">
                        <a href="<?php echo site_url('locales/ver/' . $local_row->url); ?>" class="local-link" data-name="<?php echo strtolower(convert_accented_characters($local_row->nombre)); ?>" data-category="<?php echo $local_row->categoria_slug; ?>" aria-label="Ver <?php echo htmlspecialchars($local_row->nombre); ?>">
                            <div class="locales-image-container position-relative">
                                <img src="<?php echo base_url('almacenamiento/locales/' . $local_row->url . '/logotipo.jpg'); ?>" class="local-image img-fluid" alt="<?php echo htmlspecialchars($local_row->nombre); ?>" loading="lazy">
                                <div class="overlay d-flex align-items-center justify-content-center">
                                    <span class="local-name text-white px-2"><?php echo $local_row->nombre; ?></span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>