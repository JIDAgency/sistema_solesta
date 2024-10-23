<section class="no-top no-bottom" id="content">
    <div class="container my-5" id="directorio">
        <!-- Filtros de Búsqueda y Categorías -->
        <div class="row mb-4">
            <div class="col-md-12">
                <input type="text" id="searchBar" class="form-control mb-3" placeholder="Buscar locales...">
            </div>
            <div class="col-md-12">
                <div class="category-buttons text-center">
                    <a href="javascript:void(0);" class="btn-main m-1 category-link directory-category-btn" data-category="all" style="background-color: <?php echo $colores[$color_index % count($colores)]; ?>;">Todas</a>
                    <?php $color_index++; ?>
                    <?php foreach ($categorias_list as $categoria_row) : ?>
                        <a href="javascript:void(0);" class="btn-main m-1 category-link directory-category-btn" data-category="<?php echo $categoria_row->slug; ?>" style="background-color: <?php echo $colores[$color_index % count($colores)]; ?>;"><?php echo strtoupper($categoria_row->nombre); ?></a>
                        <?php $color_index++; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <hr>

        <!-- Navegación Alfabética -->
        <div class="alphabet-navigation mb-4 text-center">
            <?php $color_index = 0; // Reiniciar el índice de color para las letras 
            ?>
            <a href="javascript:void(0);" class="btn-line btn-sm m-1 alphabet-link directory-alphabet-btn" data-letter="all" style="background-color: <?php echo $colores[$color_index % count($colores)]; ?>;">Todas</a>
            <?php $color_index++; ?>
            <?php foreach ($letras_con_locales as $letra_item) : ?>
                <a href="javascript:void(0);" class="btn-line btn-sm m-1 alphabet-link directory-alphabet-btn" data-letter="<?php echo $letra_item; ?>" style="background-color: <?php echo $colores[$color_index % count($colores)]; ?>;"><?php echo $letra_item; ?></a>
                <?php $color_index++; ?>
            <?php endforeach; ?>
        </div>


        <!-- Mensaje de No Resultados -->
        <div id="no-results" style="display: none;">
            <p>No se encontraron locales que coincidan con tu búsqueda.</p>
        </div>

        <!-- Lista de Locales Agrupados y Ordenados -->
        <?php foreach ($letras_con_locales as $letra_item) : ?>
            <div class="letter-section">
                <h2 id="letter-<?php echo $letra_item; ?>" data-letter="<?php echo $letra_item; ?>" class="text-center mt-4"><?php echo $letra_item; ?></h2>
                <hr>
                <div class="row">
                    <?php foreach ($locales_por_letra[$letra_item] as $local_row) : ?>
                        <div class="col-md-2 col-sm-4 col-6 mb-4 text-center">
                            <a href="<?php echo site_url('locales/ver/' . $local_row->url); ?>" class="local-link" data-name="<?php echo strtolower(convert_accented_characters($local_row->nombre)); ?>" data-category="<?php echo $local_row->categoria_slug; ?>" aria-label="Ver <?php echo htmlspecialchars($local_row->nombre); ?>">
                                <div class="locales-image-container position-relative">
                                    <img src="<?php echo base_url('almacenamiento/locales/' . $local_row->url . '/logotipo.jpg'); ?>" class="local-image img-fluid" alt="<?php echo htmlspecialchars($local_row->nombre); ?>" loading="lazy">
                                    <div class="overlay d-flex align-items-center justify-content-center">
                                        <span class="local-name text-white px-2"><?php echo $local_row->nombre; ?></span>
                                    </div>
                                </div>
                                <p class="text-muted"><?php echo $local_row->nombre; ?></p>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Variables para inicializar los filtros -->
<script>
    var selectedCategory = '<?php echo isset($categoria_slug) && !empty($categoria_slug) ? $categoria_slug : 'all'; ?>';
    var selectedLetter = '<?php echo isset($letra) && !empty($letra) ? $letra : null; ?>';
</script>