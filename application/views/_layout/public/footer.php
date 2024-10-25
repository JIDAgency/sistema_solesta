<footer class="footer py-5">
    <div class="container">
        <div class="d-none d-sm-block">
            <div class="row">
                <div class="col-6">
                    <div class="footer-logo mb-3">
                        <a href="<?php echo site_url(''); ?>"><img src="<?php echo base_url('assets/images/logos/logo.png'); ?>" alt="logo" width="40%"></a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row col-12">
                        <div class="col-6">
                            <a href="<?php echo site_url('contacto'); ?>" type="button" class="btn-localesdisponibles px-5 py-2 d-none d-sm-block float-end">Locales disponibles</a>
                        </div>

                        <div class="col-6">
                            <div class="social-icons text-center">
                                <span class="text-white">Síguenos: </span>
                                <a href="<?php echo tiktok(); ?>" target="_blank"><img src="<?php echo base_url('assets/images/redes/tiktok.png'); ?>" alt="tiktok" class="img-fluid" width="13%"></a>
                                <a href="<?php echo facebook(); ?>" target="_blank"><img src="<?php echo base_url('assets/images/redes/facebook.png'); ?>" alt="facebook" class="img-fluid" width="13%"></a>
                                <a href="<?php echo instagram(); ?>" target="_blank"><img src="<?php echo base_url('assets/images/redes/instagram.png'); ?>" alt="instagram" class="img-fluid" width="13%"></a>
                            </div>
                        </div>
                    </div>
                    <ul class="list-inline footer-list text-end me-2 my-4">
                        <li class="list-inline-item">
                            <a class="text-white nav-link <?php echo isset($nav_inicio) ? 'active' : ''; ?>" href="<?php echo site_url(''); ?>">Inicio</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-white nav-link <?php echo isset($nav_directorio) ? 'active' : ''; ?>" href="<?php echo site_url('directorio'); ?>">Directorio</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-white nav-link <?php echo isset($nav_mapa) ? 'active' : ''; ?>" href="<?php echo site_url('mapa'); ?>">Mapa</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-white <?php echo isset($nav_nosotros) ? 'active' : ''; ?>" href="<?php echo site_url('nosotros'); ?>">Nosotros</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-white <?php echo isset($nav_contacto) ? 'active' : ''; ?>" href="<?php echo site_url('contacto'); ?>">Contacto</a>
                        </li>
                    </ul>

                    <ul class="list-inline footer-list me-1 mb-4">
                        <li class="list-inline-item"><span class="text-white">&copy; <span id="current-year"></span> Solesta Shop & Fun Puebla. Todos los derechos reservados.</span></li>
                        <li class="list-inline-item"><a class="text-white <?php echo isset($nav_aviso_privacidad) ? 'active' : ''; ?>" href="<?php echo site_url('aviso_privacidad'); ?>">Aviso de privacidad</a></li>
                        <li class="list-inline-item"><a class="text-white <?php echo isset($nav_terminos_y_condiciones) ? 'active' : ''; ?>" href="<?php echo site_url('terminos_y_condiciones'); ?>">Términos y condiciones</a></li>
                    </ul>

                </div>
            </div>


        </div>

        <div class="row d-block d-sm-none">
            <div class="footer-logo mb-3 text-center">
                <a href="<?php echo site_url(''); ?>"><img src="<?php echo base_url('assets/images/logos/logo.png'); ?>" alt="logo" class="img-fluid" width="60%"></a>
            </div>
            <div class="row col-12 my-5">
                <div class="col-6">
                    <a href="<?php echo site_url('contacto'); ?>" type="button" class="btn-localesdisponibles-movil px-4 py-2 d-block d-sm-none text-center">Locales disponibles</a>
                </div>

                <div class="col-6">
                    <div class="social-icons-movil2 text-center">
                        <span class="text-white">Síguenos: </span>
                        <a href="<?php echo tiktok(); ?>" target="_blank"><img src="<?php echo base_url('assets/images/redes/tiktok.png'); ?>" alt="tiktok" class="img-fluid" width="13%"></a>
                        <a href="<?php echo facebook(); ?>" target="_blank"><img src="<?php echo base_url('assets/images/redes/facebook.png'); ?>" alt="facebook" class="img-fluid" width="13%"></a>
                        <a href="<?php echo instagram(); ?>" target="_blank"><img src="<?php echo base_url('assets/images/redes/instagram.png'); ?>" alt="instagram" class="img-fluid" width="13%"></a>
                    </div>
                </div>
            </div>
            <ul class="list-inline footer-list text-center me-4 my-4">
                <li class="list-inline-item">
                    <a class="text-white nav-link <?php echo isset($nav_inicio) ? 'active' : ''; ?>" href="<?php echo site_url(''); ?>">Inicio</a>
                </li>
                <li class="list-inline-item">
                    <a class="text-white nav-link <?php echo isset($nav_directorio) ? 'active' : ''; ?>" href="<?php echo site_url('directorio'); ?>">Directorio</a>
                </li>
                <li class="list-inline-item">
                    <a class="text-white nav-link <?php echo isset($nav_mapa) ? 'active' : ''; ?>" href="<?php echo site_url('mapa'); ?>">Mapa</a>
                </li>
                <li class="list-inline-item">
                    <a class="text-white <?php echo isset($nav_nosotros) ? 'active' : ''; ?>" href="<?php echo site_url('nosotros'); ?>">Nosotros</a>
                </li>
                <li class="list-inline-item">
                    <a class="text-white <?php echo isset($nav_contacto) ? 'active' : ''; ?>" href="<?php echo site_url('contacto'); ?>">Contacto</a>
                </li>
            </ul>

            <ul class="list-inline footer-list text-center me-4 mb-4">
                <li class="list-inline-item"><a class="text-white" href="<?php echo site_url(''); ?>">Solesta shop & fun Puebla</a></li>
                <li class="list-inline-item"><a class="text-white" href="<?php echo site_url(''); ?>">Todos los derechos reservados</a></li>
                <li class="list-inline-item"><a class="text-white <?php echo isset($nav_aviso_privacidad) ? 'active' : ''; ?>" href="<?php echo site_url('aviso_privacidad'); ?>">Aviso de privacidad</a></li>
            </ul>
        </div>
    </div>
</footer>
</div>

<!-- Javascript Files -->
<script src="<?php echo base_url('app-assets/js/plugins.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('app-assets/js/designesia.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('app-assets/js/swiper.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('app-assets/js/custom-marquee.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/main.js'); ?>" type="text/javascript"></script>

<?php if (isset($scripts) && is_array($scripts)) : ?>
    <?php foreach ($scripts as $script) : ?>
        <script type="text/javascript" src="<?php echo !$script['es_rel'] ? $script['src'] : base_url() . 'assets/js/' . $script['src']; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

</body>

</html>