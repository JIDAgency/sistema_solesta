
<div id="carousel-banner" class="carousel slide carousel-multi-item" data-ride="carousel">				
	<!--<ol class="carousel-indicators">
		<li data-target="#carousel-banner" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-banner" data-slide-to="1"></li>
		<li data-target="#carousel-banner" data-slide-to="2"></li>
	</ol>-->
	<div class="carousel-inner" role="listbox">

		<div class="carousel-item active">
			<div class="row text-center">
				<div class="col-md-12">
					<a href="<?php echo base_url(); ?>"><img src="almacenamiento\inicio\banner-index-01.jpg" alt="" width="100%" class="d-none d-xl-block img-fluid"></a>
					<a href="<?php echo base_url(); ?>"><img src="almacenamiento\inicio\banner-index-01-movil.jpg" alt="" width="100%" class="d-block d-sm-none img-flui"></a>
				</div>
			</div>
		</div>

		<!--div class="carousel-item">
			<div class="row text-center">
				<div class="col-md-12">
					<a href="<?php echo base_url(); ?>"><img src="almacenamiento\inicio\banner-index-02.jpg" alt="" width="100%" class="d-none d-xl-block img-fluid"></a>
					<a href="<?php echo base_url(); ?>"><img src="almacenamiento\inicio\banner-index-02-movil.jpg" alt="" width="100%" class="d-block d-sm-none img-flui"></a>
				</div>
			</div>
		</div-->

		<div class="carousel-item">
			<div class="row text-center">
				<div class="col-md-12">
					<a href="<?php echo base_url(); ?>eventos"><img src="almacenamiento\inicio\banner-navidenho.jpg" alt="" width="100%" class="d-none d-xl-block img-fluid"></a>
					<a href="<?php echo base_url(); ?>eventos"><img src="almacenamiento\inicio\banner-navidenho-movil.jpg" alt="" width="100%" class="d-block d-sm-none img-flui"></a>
				</div>
			</div>
		</div>

		
		<div class="carousel-item">
			<div class="row text-center">
				<div class="col-md-12">
					<a href="<?php echo base_url(); ?>categorias/ver/mercado_solesta"><img src="almacenamiento\inicio\banner-index-03.jpg" alt="" width="100%" class="d-none d-xl-block img-fluid"></a>
					<a href="<?php echo base_url(); ?>categorias/ver/mercado_solesta"><img src="almacenamiento\inicio\banner-index-03-movil.jpg" alt="" width="100%" class="d-block d-sm-none img-flui"></a>
				</div>
			</div>
		</div>
	
	</div>
	<a class="carousel-control-prev" href="#carousel-banner" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carousel-banner" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<div class="app-content container center-layout mt-2">

	<div class="content-wrapper">
		<div class="content-body">
		<!-- INICIA CONTENIDO  -->

			<div class="row">
				<div class="col">
					<section class="mt-5">

						<!--div class="row mb-3 mt-1 text-center">
							<div class="col-md-6 mb-2">
								<a href="<?php echo base_url(); ?>info/terminos_y_condiciones_viaje">
									<img class="rounded" src="almacenamiento\inicio\terminos-y-condiciones-viaje.jpg" alt="Pide desde Shopping to go en solesta" width="100%">
								</a>
							</div>
							<div class="col-md-6 mb-2">
								<a href="<?php echo base_url(); ?>eventos">
									<img class="rounded" src="almacenamiento\inicio\banner-eventos.jpg" alt="Pide desde Shopping to go en solesta" width="100%">
								</a>
							</div>
						</div-->
						<!--iframe class="rounded" width="100%" height="100%" src="https://www.youtube.com/embed/lWq07JQuIhQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe-->

						<div class="text-center">
							<h1 class="text-center purple darken-3">CONOCE SOLESTA</h1>
						</div>

						<div class="row mt-2 text-center">
							<div class="col-md-4 mb-2">
								<a href="<?php echo base_url(); ?>categorias/ver/shopping">
									<img src="almacenamiento\inicio\banner-shopping.png" alt="Sección de shopping" width="100%">
								</a>
							</div>
							<div class="col-md-8 mb-2">
								<a href="<?php echo base_url(); ?>categorias/ver/mercado_solesta">
									<img src="almacenamiento\inicio\banner-mercado-solesta.png" alt="Sección de mercado solesta" width="100%">
								</a>
							</div>
						</div>

						<div class="row mt-1 text-center">
							<div class="col-md-4 mb-2">
								<a href="<?php echo base_url(); ?>categorias/ver/restaurantes">
									<img src="almacenamiento\inicio\banner-restaurantes.png" alt="Sección de restaurantes" width="100%">
								</a>
							</div>
							
							<div class="col-md-4 mb-2">
								<a href="<?php echo base_url(); ?>categorias/ver/wellness">
									<img src="almacenamiento\inicio\banner-wellness.png" alt="Sección de wellness" width="100%">
								</a>
							</div>

							<!--
							<div class="col-md-4 mb-2">
								<a href="<?php echo base_url(); ?>categorias/ver/fun">
									<img src="almacenamiento\inicio\banner-fun.png" alt="Sección de entretenimiento" width="100%">
								</a>
							</div>-->
						</div>

						<div class="row text-center mt-5">
							<div class="col">
								<a class="btn btn-purple btn-darken-3 round btn-min-width mr-1 mb-1" href="<?php echo base_url(); ?>categorias">Ver todas las categorías</a>
							</div>
						</div>
					</section>
				</div>
			</div>

			<?php //foreach ($pickups_list as $pickup_row): ?>
				<!--div class="row">
					<div class="col-3">
						<img src="<?php echo base_url(); ?>almacenamiento\locales\<?php echo $pickup_row->local_url?>\pick-up-1.jpg" alt="" width="100%">
					</div>
				</div-->
			<?php //endforeach; ?>

			<div class="row">
				<div class="col">
					<section class="mt-5 d-none d-xl-block">
						<div class="text-center">
							<h1 class="text-center purple darken-3">SOLESTA PICK UP</h1>
						</div>
						<div id="carousel-pick-up" class="carousel slide carousel-multi-item" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carousel-pick-up" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-pick-up" data-slide-to="1"></li>
								<li data-target="#carousel-pick-up" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<div class="row mt-2 text-center">
										
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\locales\ocho30\pick-up-1.jpg" alt="" width="100%">
										</div>
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\locales\la_chicatana\pick-up-1.jpg" alt="" width="100%">
										</div>
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\locales\suntory\pick-up-1.jpg" alt="" width="100%">
										</div>
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\locales\crepe_corner\pick-up-1.jpg" alt="" width="100%">
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row mt-2 text-center">
										
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\locales\sonora_grill\pick-up-1.jpg" alt="" width="100%">
										</div>
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\locales\carbon_central_de_hamburguesas\pick-up-1.jpg" alt="" width="100%">
										</div>
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\locales\seratta\pick-up-1.jpg" alt="" width="100%">
										</div>
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\locales\mochomos\pick-up-1.jpg" alt="" width="100%">
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row mt-2 text-center">
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\locales\suntory\pick-up-1.jpg" alt="" width="100%">
										</div>
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\locales\cabanna\pick-up-1.jpg" alt="" width="100%">
										</div>
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\locales\moyo\pick-up-1.jpg" alt="" width="100%">
										</div>
									</div>
								</div>
							</div>
							<a class="carousel-control-prev" href="#carousel-pick-up" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carousel-pick-up" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>

						<div class="row text-center mt-5">
							<div class="col">
								<a class="btn btn-purple btn-darken-3 round btn-min-width mr-1 mb-1" href="<?php echo site_url("pickup"); ?>">Ver todos las opciones Pickup</a>
							</div>
						</div>
					</section>
				</div>
			</div>

			<!--Inicia carrousel movil de pick up-->
			<div class="row">
				<div class="col">
					<section class="mt-5 d-block d-sm-none">
						<div class="text-center">
							<h1 class="text-center purple darken-3">SOLESTA PICK UP</h1>
						</div>
						<div id="carousel-pick-up-movil" class="carousel slide carousel-multi-item" data-ride="carousel">
							
							<!--<ol class="carousel-indicators">
								<li data-target="#carousel-pick-up-movil" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-pick-up-movil" data-slide-to="1"></li>
								<li data-target="#carousel-pick-up-movil" data-slide-to="2"></li>
							</ol>-->
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<div class="row mt-2 text-center">
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\locales\moyo\pick-up-1.jpg" alt="" width="100%">
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row mt-2 text-center">
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\locales\cabanna\pick-up-1.jpg" alt="" width="100%">
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row mt-2 text-center">
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\locales\el_gran_rosticero\pick-up-1.jpg" alt="" width="100%">
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row mt-2 text-center">
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\locales\mochomos\pick-up-1.jpg" alt="" width="100%">
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row mt-2 text-center">
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\locales\seratta\pick-up-1.jpg" alt="" width="100%">
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row mt-2 text-center">
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\locales\carbon_central_de_hamburguesas\pick-up-1.jpg" alt="" width="100%">
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row mt-2 text-center">
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\locales\sonora_grill\pick-up-1.jpg" alt="" width="100%">
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row mt-2 text-center">
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\locales\crepe_corner\pick-up-1.jpg" alt="" width="100%">
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row mt-2 text-center">
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\locales\suntory\pick-up-1.jpg" alt="" width="100%">
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row mt-2 text-center">
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\locales\la_chicatana\pick-up-1.jpg" alt="" width="100%">
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row mt-2 text-center">
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\locales\ocho30\pick-up-1.jpg" alt="" width="100%">
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row mt-2 text-center">
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\locales\tripoli\pick-up-1.jpg" alt="" width="100%">
										</div>
									</div>
								</div>
							</div>
							<a class="carousel-control-prev" href="#carousel-pick-up-movil" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carousel-pick-up-movil" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>

						<div class="row text-center mt-5">
							<div class="col">
								<a class="btn btn-purple btn-darken-3 round btn-min-width mr-1 mb-1" href="<?php echo site_url("pickup"); ?>">Ver todos las opciones Pickup</a>
							</div>
						</div>
					</section>
				</div>
			</div>
			<!--Termina carrousel movil de pick up-->
			
			<!--

			<div class="row mt-5">
				<div class="col">
					<img class="rounded" src="almacenamiento\inicio\publicidad-1.jpg" alt="" width="100%">
				</div>
			</div>
			
			<div class="row d-none d-xl-block">
				<div class="col">
					<section class="mt-5">
						<div class="text-center">
							<h1 class="text-center purple darken-3">¡PROMOCIONES EN SOLESTA!</h1>
						</div>
						<div id="carousel-promos" class="carousel slide carousel-multi-item" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carousel-promos" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-promos" data-slide-to="1"></li>
							</ol>
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<div class="row mt-2 text-center">
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\promociones\promociones-01.jpg" alt="" width="100%">
										</div>
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\promociones\promociones-02.jpg" alt="" width="100%">
										</div>
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\promociones\promociones-03.jpg" alt="" width="100%">
										</div>
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\promociones\promociones-04.jpg" alt="" width="100%">
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row mt-2 text-center">
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\promociones\promociones-05.jpg" alt="" width="100%">
										</div>
										<div class="col-md-3">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\promociones\promociones-06.jpg" alt="" width="100%">
										</div>
									</div>
								</div>
							</div>
							<a class="carousel-control-prev" href="#carousel-promos" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carousel-promos" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</section>

					<div class="row text-center mt-5">
						<div class="col">
							<a class="btn btn-purple btn-darken-3 round btn-min-width mr-1 mb-1" href="<?php echo site_url("promociones"); ?>">Ver todas las promociones</a>
						</div>
					</div>

				</div>
			</div>

			<!--Inicia carrousel movil de promociones

			<div class="row d-block d-sm-none">
				<div class="col">
					<section class="mt-5 ">
						<div class="text-center">
							<h1 class="text-center purple darken-3">¡PROMOCIONES EN SOLESTA!</h1>
						</div>
						<div id="carousel-promos-movil" class="carousel slide carousel-multi-item" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carousel-promos-movil" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-promos-movil" data-slide-to="1"></li>
								<li data-target="#carousel-promos-movil" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<div class="row mt-2 text-center">
										<div class="col-md-12">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\promociones\promociones-01.jpg" alt="" width="100%">
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row mt-2 text-center">
										<div class="col-md-12">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\promociones\promociones-02.jpg" alt="" width="100%">
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row mt-2 text-center">
										<div class="col-md-12">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\promociones\promociones-03.jpg" alt="" width="100%">
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row mt-2 text-center">
										<div class="col-md-12">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\promociones\promociones-04.jpg" alt="" width="100%">
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row mt-2 text-center">
										<div class="col-md-12">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\promociones\promociones-05.jpg" alt="" width="100%">
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row mt-2 text-center">
										<div class="col-md-12">
											<img class="rounded" src="<?php echo base_url(); ?>almacenamiento\promociones\promociones-06.jpg" alt="" width="100%">
										</div>
									</div>
								</div>
								
							</div>
							<a class="carousel-control-prev" href="#carousel-promos-movil" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carousel-promos-movil" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</section>

					<div class="row text-center mt-5">
						<div class="col">
							<a class="btn btn-purple btn-darken-3 round btn-min-width mr-1 mb-1" href="<?php echo site_url("promociones"); ?>">Ver todas las promociones</a>
						</div>
					</div>

				</div>
			</div>

			<!--Termina carrousel movil de promociones-->
		</div>
	</div>
</div>


<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
        It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader-active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                    <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>
</div>
