<img class="img-fluid" src="<?php echo base_url(); ?>almacenamiento\pickup\banner.jpg" alt="Banner de la sección Pick Up">

<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- INICIA CONTENIDO  -->

            <?php $this->load->view('_templates/mensajes_alerta.tpl.php');?>

            <section id="">
                <div class="row mt-5 mb-2">
                    <div class="col-xl-6 col-md-6 col-sm-12 mb-2">
                        <div class="row mb-2">
                            <div class="col-xl-10 col-md-6 col-sm-12">
                                <h1 class="text-bold-700 purple darken-3 mb-1"><strong>¡Conoce nuestro punto pick up!</strong></h1>
                                <p class="text-justify">Tenemos sólo 1 punto pick up en la plaza para que puedas recoger todos los pedidos de tus tiendas favoritas. Encuéntranos en Motor Lobby <strong>frente a Suntory & Forever 21.</strong> Recuerda que sólo tienes que llamar a tu tienda, pedir lo que más te guste y ¡recoger en nuestras instalaciones!</p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-xl-3 col-md-6 col-sm-12 ">
                                <img src="<?php echo base_url(); ?>almacenamiento\pickup\llama.png" alt="Llama para agendar tu pick up" height="50" class="mb-1">
                                <h1 class="text-bold-700 font-large-1 teal lighten-1"><strong>LLAMA</strong></h1>
                                <p class="card-text">a tu tienda favorita</p>
                            </div>
                            <div class="col-xl-3 col-md-6 col-sm-12">
                                <img src="<?php echo base_url(); ?>almacenamiento\pickup\pide.png" alt="Pide lo que más te guste" height="50" class="mb-1">
                                <h1 class="text-bold-700 font-large-1 teal lighten-1"><strong>PIDE</strong></h1>
                                <p class="card-text">lo que más te gusta</p>
                            </div>
                            <div class="col-xl-3 col-md-6 col-sm-12">
                                <img src="<?php echo base_url(); ?>almacenamiento\pickup\recoge.png" alt="Recoge tu pedido en nuestro punto pick up" height="50" class="mb-1">
                                <h1 class="text-bold-700 font-large-1 teal lighten-1"><strong>RECOGE</strong></h1>
                                <p class="card-text">en nuestro punto Pick Up</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12 mb-2">
                        <img class="img-fluid" src="<?php echo base_url(); ?>almacenamiento\pickup\mapa.jpg" alt="Zona de Pick Up en Plaza Solesta" />
                    </div>
                </div>
            </section>

            <section id="">
                <div class="text-center mt-5 mb-5">
                    <h1 class="text-bold-700 purple darken-3 mb-1 mt-3"><strong>Restaurantes y Mercado Solesta Pick Up</strong></h1>
                </div>
                <div class="row">
                    <?php foreach ($pickups_restaurantes_list as $pickup_restautante_row): ?>
                        <div class="col-xl-3 col-md-6 col-sm-12 mb-2">
                            <a href="<?php echo base_url().'locales/ver/'.$pickup_restautante_row->local_url; ?>">
                                <img class="img-fluid" src="<?php echo base_url()."almacenamiento/locales/".$pickup_restautante_row->local_url."/".$pickup_restautante_row->url; ?>" alt="<?php echo $pickup_restautante_row->alt; ?>" />
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <section id="">
                <div class="text-center mt-5 mb-5">
                    <h1 class="text-bold-700 purple darken-3 mb-1"><strong>Shopping, Accesorios, Hogar y Wellness Pick Up</strong></h1>
                </div>
                <div class="row mt-3">
                    <?php foreach ($pickups_shopping_list as $pickup_shopping_row): ?>
                        <div class="col-xl-3 col-md-6 col-sm-12 mb-2">
                            <a href="<?php echo base_url().'locales/ver/'.$pickup_shopping_row->local_url; ?>">
                                <img class="img-fluid" src="<?php echo base_url()."almacenamiento/locales/".$pickup_shopping_row->local_url."/".$pickup_shopping_row->url; ?>" alt="<?php echo $pickup_shopping_row->alt; ?>" />
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

        </div>
    </div>
</div>