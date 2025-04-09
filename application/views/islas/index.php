<section class="bg-beige-solesta">
    <div class="container">
        <div class="row pb-5">
            <div class="col-lg-12 col-md-12 col-sm-12 text-lg-start">
                <img src="<?php echo base_url('assets/images/recursos/banner-islas.jpg') ?>" alt="banner" class="img-fluid d-none d-sm-block" style="border-radius: 30px;">
                <img src="<?php echo base_url('assets/images/recursos/banner-islas.jpg') ?>" alt="banner" class="img-fluid d-block d-sm-none" style="border-radius: 30px;">
                <!-- <h1 class="text-contacto d-none d-sm-block">ISLAS</h1> -->
                <!-- <h1 class="text-contacto-movil d-block d-sm-none">ISLAS</h1> -->
            </div>
        </div>
    </div>
</section>

<section class="no-top no-bottom" id="content-directorio">
    <div class="container" id="directorio">
        <div class="row pb-4">
            <div class="col-md-12">
                <div class="row">
                    <?php foreach ($islas_list as $islas_key => $islas_value) : ?>

                        <div class="col-md-6 col-sm-12 col-12 mb-4 text-center">
                            <a href="<?php echo site_url('locales/' . $islas_value->url); ?>" class="local-link" data-name="<?php echo strtolower(convert_accented_characters($islas_value->nombre)); ?>">
                                <img src="<?php echo base_url('almacenamiento/locales/' . $islas_value->url . '/banner-isla.jpg'); ?>" class="local-image img-fluid" alt="<?php echo htmlspecialchars($islas_value->nombre); ?>" loading="lazy" style="border-radius: 30px;">
                            </a>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>