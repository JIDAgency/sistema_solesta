<?php
// Función para crear slugs amigables para las URLs
function createSlug($string)
{
    $string = strtolower(trim($string));
    $string = preg_replace('/[^a-z0-9-]/', '-', $string);
    $string = preg_replace('/-+/', "-", $string);
    return $string;
}

// Agrupar locales por letra inicial y ordenar alfabéticamente
$locales_por_letra = [];
foreach ($locales_list as $local_row) {
    $letra_inicial = strtoupper(mb_substr($local_row->nombre, 0, 1, 'UTF-8'));
    if (!isset($locales_por_letra[$letra_inicial])) {
        $locales_por_letra[$letra_inicial] = [];
    }
    $locales_por_letra[$letra_inicial][] = $local_row;
}

// Ordenar las letras
ksort($locales_por_letra, SORT_STRING);

// Obtener las letras que tienen locales
$letras_con_locales = array_keys($locales_por_letra);
?>

<section class="container my-5">
    <!-- Filtros de Búsqueda y Categorías -->
    <div class="row mb-4">
        <div class="col-md-6">
            <input type="text" id="searchBar" class="form-control" placeholder="Buscar locales...">
        </div>
        <div class="col-md-6">
            <select id="categoryFilter" class="form-select">
                <option value="all">Todas las categorías</option>
                <?php foreach ($categorias_list as $categoria_row) : ?>
                    <option value="<?php echo createSlug($categoria_row->nombre); ?>"><?php echo $categoria_row->nombre; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <!-- Navegación Alfabética -->
    <div class="alphabet-navigation mb-4 text-center">
        <?php foreach ($letras_con_locales as $letra) : ?>
            <a href="#letter-<?php echo $letra; ?>" class="btn btn-outline-primary btn-sm m-1"><?php echo $letra; ?></a>
        <?php endforeach; ?>
    </div>

    <!-- Lista de Locales Agrupados y Ordenados -->
    <?php foreach ($letras_con_locales as $letra) : ?>
        <?php
        // Ordenar los locales dentro de cada letra
        usort($locales_por_letra[$letra], function ($a, $b) {
            return strcmp($a->nombre, $b->nombre);
        });
        ?>
        <h5 id="letter-<?php echo $letra; ?>" class="mt-4"><?php echo $letra; ?></h5>
        <div class="row">
            <?php foreach ($locales_por_letra[$letra] as $local_row) : ?>
                <div class="col-md-2 col-sm-4 col-6 mb-4 text-center">
                    <a href="<?php echo site_url("locales/ver/" . $local_row->url); ?>" class="local-link" data-name="<?php echo strtolower($local_row->nombre); ?>" data-category="<?php echo createSlug($local_row->categorias_nombre); ?>">
                        <div class="local-image-container position-relative">
                            <img src="<?php echo base_url_locales() . $local_row->url; ?>/logotipo.jpg" class="local-image img-fluid" alt="<?php echo $local_row->nombre; ?>">
                            <div class="overlay d-flex align-items-center justify-content-center">
                                <span class="local-name text-white px-2"><?php echo $local_row->nombre; ?></span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</section>