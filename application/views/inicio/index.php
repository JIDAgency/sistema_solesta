<section class="banner">
    <div class="container d-none d-sm-block">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="image-container">
                    <img src="assets/images/recursos/banner2.png" alt="banner" class="img-fluid">
                    <a href="<?php echo site_url('directorio'); ?>" class="btn-explora px-4 py-2">Explora las categorías</a>
                    <a href="<?php echo google_maps(); ?>" target="_blank" rel="noopener noreferrer" class="btn-llegar px-5 py-2 me-5">¿Cómo llegar?</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-block d-sm-none">
        <div class="row">
            <div class="col-12 text-center">
                <img src="assets/images/recursos/banner-movil.png" alt="banner" class="img-fluid mb-3">
                <a href="<?php echo site_url('directorio'); ?>" class="btn-explora-movil">Explora las categorías</a>
                <a href="<?php echo google_maps(); ?>" target="_blank" rel="noopener noreferrer" class="btn-llegar-movil">¿Cómo llegar?</a>
            </div>
        </div>
    </div>
</section>

<section class="shop">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-5 col-sm-12">
                <div class="ms-2">
                    <h2>Solesta</h2>
                    <h2>Shop & Fun Puebla</h2>
                    <br>
                    <p>Lo mejor de Puebla converge en un solo <br> lugar. Ubicado en la zona más vibrante de <br>
                        Puebla, te ofrecemos un centro comercial <br> moderno y familiar con una amplia gama de <br>
                        tiendas, restaurantes y entretenimiento para <br> todas las edades.</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="row">
                    <div class="col-6">
                        <img src="assets/images/recursos/bed.png" alt="locales" class="img-fluid mt-5">
                    </div>
                    <div class="col-6">
                        <img src="assets/images/recursos/cinemex.png" alt="locales" class="img-fluid mt-5">
                    </div>
                    <div class="col-6">
                        <img src="assets/images/recursos/alboa.png" alt="locales" class="img-fluid mt-5">
                    </div>
                    <div class="col-6">
                        <img src="assets/images/recursos/smartfit.png" alt="locales" class="img-fluid mt-5">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="d-none d-sm-block">
    <div class="container mt-11 mb-12">
        <div class="row">
            <div class="row col-6">
                <div class="col-6">
                    <a href="<?php echo google_maps(); ?>" target="_blank" rel="noopener noreferrer" class="btn-llegar2 px-5 py-2 float-end">Cómo llegar</a>
                </div>

                <div class="col-6">
                    <div class="social-icons text-center">
                        <span class="text-white me-2">Síguenos: </span>
                        <a href="<?php echo tiktok(); ?>" target="_blank"><img src="assets/images/redes/tiktok.png" alt="tiktok" class="img-fluid" width="13%"></a>
                        <a href="<?php echo facebook(); ?>" target="_blank"><img src="assets/images/redes/facebook.png" alt="facebook" class="img-fluid" width="13%"></a>
                        <a href="<?php echo instagram(); ?>" target="_blank"><img src="assets/images/redes/instagram.png" alt="instagram" class="img-fluid" width="13%"></a>
                    </div>

                </div>
            </div>

            <div class="col-6 d-none d-sm-block text-center">
                <a href="<?php echo site_url('directorio'); ?>" type="button" class="btn-locales px-5 py-2">Explorar todos los locales</a>
            </div>
        </div>
    </div>
</section>

<section class="explora">
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="row col-lg-6 col-md-6 col-sm-12 mt-negativo mb-12">
                <a href="<?php echo base_url('directorio?categoria=restaurantes') ?>" class="text-white col-5 me-2 px-3 pb-5 restaurante">
                    <h2 class="marys">RESTAU <br>RANTES</h2>
                    <p> Ver mas</p>
                </a>
                <a href="<?php echo base_url('directorio?categoria=fun') ?>" class="text-white col-5 me-2 px-3 pb-5 diversion">
                    <h2 class="marys">DIVER <br>SION</h2>
                    <p>Ver mas</p>
                </a>
                <a href="<?php echo base_url('directorio?categoria=wellness') ?>" class="text-white col-5 me-2 px-3 pb-5 wellness">
                    <h2 class="marys">WELL <br>NESS</h2>
                    <p>Ver mas</p>
                </a>
                <a href="<?php echo base_url('directorio?categoria=accesorios') ?>" class="text-white col-5 me-2 px-3 pb-5 accesorios">
                    <h2 class="marys">ACCE <br>SORIOS</h2>
                    <p>Ver mas</p>
                </a>
                <a href="<?php echo base_url('directorio?categoria=servicios') ?>" class="text-white col-5 me-2 px-3 pb-5 servicios">
                    <h2 class="marys">SERVI <br>CIOS</h2>
                    <p>Ver mas</p>
                </a>
                <a href="<?php echo base_url('directorio?categoria=shopping') ?>" class="text-white col-5 me-2 px-3 pb-5 shopping">
                    <h2 class="marys">SHOPP <br>ING</h2>
                    <p>Ver mas</p>
                </a>
                <a href="<?php echo base_url('directorio?categoria=hogar') ?>" class="text-white col-5 me-2 px-3 pb-5 hogar">
                    <h2 class="marys">HO <br>GAR</h2>
                    <p>Ver mas</p>
                </a>
                <div class="col-12 text-center">
                    <a href="<?php echo site_url('directorio'); ?>" type="button" class="btn-locales2 px-5 py-2">Explorar todos los locales</a>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 mt-negativo d-none d-sm-block mb-12">
                <img src="assets/images/recursos/explora.png" alt="locales" class="img-fluid mb-3">

                <h2>Explora Solesta</h2>
                <br>
                <p>Con una arquitectura abierta y moderna, <br> Solesta te invita a recorrer sus amplios <br>
                    espacios llenos de luz. Desde tiendas <br> exclusivas hasta áreas de entretenimiento, <br>
                    cada rincón está diseñado para brindar una <br> experiencia inolvidable a toda la familia</p>
            </div>
        </div>
    </div>
</section>

<section class="petfrien">
    <div class="container">
        <div class="row justify-content-center mt-negativopet">
            <div class="col-12">
                <img src="<?php echo base_url('assets/images/recursos/petfriendly.png') ?>" alt="petfriend" class="img-fluid d-none d-sm-block">
                <img src="<?php echo base_url('assets/images/recursos/petfriendly-movil.png') ?>" alt="petfriend" class="img-fluid d-block d-sm-none mt-neg">
            </div>
            <div class="row col-lg-5 col-md-5 col-sm-12 mt-5">
                <h2>¡Tus mascotas <br>
                    son bienvenidas!</h2>
            </div>
            <div class="row col-lg-6 col-md-6 col-sm-12 mt-5">
                <p>En Solesta Shop & Fun Puebla, sabemos que tu mascota es <br> parte de la familia. Por eso, somos un espacio Pet Friendly, <br>
                    donde puedes disfrutar de un día de compras, paseos y <br> diversión sin dejar a tu mejor amigo en casa. Ven con tu <br>
                    mascota y vive juntos la experiencia Solesta.</p>

                <div class="row col-12 mt-5">
                    <div class="col-6 text-center">
                        <a href="<?php echo google_maps(); ?>" target="_blank" class="btn-llegar2 px-5 py-2 d-none d-sm-block">Cómo llegar</a>
                        <a href="<?php echo google_maps(); ?>" target="_blank" class="btn-llegar2 px-4 py-2 d-block d-sm-none">Cómo llegar</a>
                    </div>

                    <div class="col-6 d-none d-sm-block">
                        <div class="social-icons2 text-center">
                            <span class="text-white me-2">Síguenos: </span>
                            <a href="<?php echo tiktok(); ?>" target="_blank"><img src="assets/images/redes/tiktok.png" alt="tiktok" class="img-fluid" width="13%"></a>
                            <a href="<?php echo facebook(); ?>" target="_blank"><img src="assets/images/redes/facebook.png" alt="facebook" class="img-fluid" width="13%"></a>
                            <a href="<?php echo instagram(); ?>" target="_blank"><img src="assets/images/redes/instagram.png" alt="instagram" class="img-fluid" width="13%"></a>
                        </div>
                    </div>
                    <div class="col-6 d-block d-sm-none">
                        <div class="social-icons-movil2">
                            <span class="text-white me-2">Síguenos: </span>
                            <a href="<?php echo tiktok(); ?>" target="_blank"><img src="assets/images/redes/tiktok.png" alt="tiktok" class="img-fluid" width="13%"></a>
                            <a href="<?php echo facebook(); ?>" target="_blank"><img src="assets/images/redes/facebook.png" alt="facebook" class="img-fluid" width="13%"></a>
                            <a href="<?php echo instagram(); ?>" target="_blank"><img src="assets/images/redes/instagram.png" alt="instagram" class="img-fluid" width="13%"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ubicacion">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
            </div>
            <div class="row col-lg-5 col-md-5 col-sm-12">
                <div class="mb-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5449.204147781762!2d-98.22845251274519!3d19.033874520507364!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc730cc904b2b%3A0xb530f1deb31d3a3b!2sSolesta!5e0!3m2!1ses-419!2smx!4v1729790315014!5m2!1ses-419!2smx" width="100%" height="100%" style="border: 0; border-radius: 7px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="row col-lg-6 col-md-6 col-sm-12 bg-ubicacion">
                <h2>¡Estamos en el corazón <br>
                    de Puebla!</h2>
                <p>Solesta Shop & Fun Puebla se encuentra en <br> la mejor zona turística y comercial de la <br>
                    ciudad, cerca de la Estrella de Puebla y <br> vialidades principales como la Vía Atlixcáyotl <br>
                    y el Boulevard del Niño Poblano. Ven y <br> disfruta de un día lleno de compras, <br> diversión y sabores.</p>
            </div>
        </div>
    </div>
</section>

<section class="lugar">
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="row col-lg-5 col-md-5 col-sm-12 mb-4 d-block d-sm-none">
                <img src="<?php echo base_url('assets/images/recursos/lugar.png') ?>" alt="lugar" class="img-fluid">
            </div>
            <div class="row col-lg-5 col-md-5 col-sm-12 bg-lugar">
                <h2>Todo lo que buscas <br>
                    en un solo lugar</h2>
                <p>Más que un centro comercial, Solesta es una <br> experiencia. Saborea la diversidad culinaria <br>
                    de nuestros restaurantes, disfruta del <br> entretenimiento en nuestros cines y boliche, <br>
                    y recorre espacios llenos de estilo y <br> comodidad.</p>
            </div>
            <div class="row col-lg-6 col-md-6 col-sm-12 d-none d-sm-block">
                <img src="<?php echo base_url('assets/images/recursos/lugar.png') ?>" alt="lugar" class="img-fluid">
            </div>
        </div>
    </div>
</section>