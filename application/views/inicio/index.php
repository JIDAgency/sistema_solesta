<div class="content center-layout bg-banner-index">
	<div class="content-wrapper">
		<section class="">

			<div style="margin-top:160px;" class="text-center white">
				<h1 class="card-title white" style="font-family:montserrat; font-weight:700; font-size:3em;">¡QUÉ BUENO ES TENERTE DE REGRESO!</h1>
				<p style="font-family:montserrat; font-size:2em;">Shoppping, restaurantes, entretenimiento y más</p>
			</div>

			<style>
				.optionPredetermined {
					color: gray;
				}
				.optionGroup {
					font-weight: bold;
				}
				.optionChild {
				}

				.auto_list {
					position: absolute;
				}

				.carousel-inner img {
				margin: auto;
				}
			</style>

			<div class="row mb-3 mt-2">
				<div class="offset-md-3 col-md-6 col-sm-12">

						<fieldset>
							<div class="input-group">

								<div class="input-group-prepend">
									<input type="text" class="form-control" name="buscador" id="buscador" autocomplete="off" placeholder="Buscar..." aria-describedby="buscador">
								</div>

								<select class="form-control" name="categorias_select" id="categorias_select" onchange="cambiar_seleccion(this)">
									<option value="" class="optionPredetermined">Seleccione una categoría...</option>
									<?php foreach ($categorias_list as $categoria_row): ?>
											<option value="<?php echo $categoria_row->id; ?>" class="optionGroup"><?php echo $categoria_row->nombre; ?></option>
											<?php foreach ($subcategorias_list as $subcategoria_row): ?>
												<?php if ($subcategoria_row->subcategoria_de == $categoria_row->id): ?>
													<option value="<?php echo $subcategoria_row->id; ?>" class="optionChild"><?php echo $subcategoria_row->nombre; ?></option>
												<?php endif; ?>
											<?php endforeach; ?>
									<?php endforeach; ?>
								</select>

								<div class="input-group-append">
									<button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
								</div>

							</div>
							<div id="resultado" class="list-group"></div>
						</fieldset>

				</div>
			</div>

		</section>
	</div>
</div>

<div class="content center-layout">
	<div class="content-wrapper">
		<section class="mt-5">

			<div class="row mb-3 mt-1 text-center">
				<div class="col-md-6">
					<iframe width="100%" height="100%" src="https://www.youtube.com/embed/4yfrhJiFOTg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="col-md-6">
					<a href="<?php echo base_url(); ?>pickup">
						<img src="almacenamiento\inicio\banner-pickpu.jpg" alt="Pide desde Shopping to go en solesta" width="100%">
					</a>
				</div>
			</div>

			<div class="text-center">
				<h1 class="text-center purple darken-3">CONOCE SOLESTA</h1>
			</div>
			<div class="row mt-2 text-center">
				<div class="col-md-4">
					<a href="<?php echo base_url(); ?>categorias/ver/shopping">
						<img src="almacenamiento\inicio\banner-shopping.png" alt="Sección de shopping" width="100%">
					</a>
				</div>
				<div class="col-md-8">
					<a href="<?php echo base_url(); ?>categorias/ver/mercado_solesta">
						<img src="almacenamiento\inicio\banner-mercado-solesta.png" alt="Sección de mercado solesta" width="100%">
					</a>
				</div>
			</div>
			<div class="row mt-1 text-center">
				<div class="col-md-4">
					<a href="<?php echo base_url(); ?>categorias/ver/restaurantes">
						<img src="almacenamiento\inicio\banner-restaurantes.png" alt="Sección de restaurantes" width="100%">
					</a>
				</div>
				<div class="col-md-4">
					<a href="<?php echo base_url(); ?>categorias/ver/fun">
						<img src="almacenamiento\inicio\banner-fun.png" alt="Sección de entretenimiento" width="100%">
					</a>
				</div>
				<div class="col-md-4">
					<a href="<?php echo base_url(); ?>categorias/ver/wellness">
						<img src="almacenamiento\inicio\banner-wellness.png" alt="Sección de wellness" width="100%">
					</a>
				</div>
			</div>
		</section>
	</div>
	<div class="text-center">
		<a class="btn btn-purple btn-darken-3 round btn-min-width mr-1 mb-1" href="<?php echo base_url(); ?>categorias">Ver todo</a>
	</div>
</div>

<div class="content center-layout">
	<div class="content-wrapper">
		<section class="mt-5">
			<div class="text-center">
				<h1 class="text-center purple darken-3">SOLESTA PICK UP</h1>
			</div>
			<div id="carousel-pick-up" class="carousel slide carousel-multi-item" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<div class="row mt-2 text-center">
							<div class="col-md-3">
								<img src="<?php echo base_url(); ?>almacenamiento\locales\mochomos\pick-up-1.jpg" alt="" width="100%">
							</div>
							<div class="col-md-3">
								<img src="<?php echo base_url(); ?>almacenamiento\locales\mochomos\pick-up-1.jpg" alt="" width="100%">
							</div>
							<div class="col-md-3">
								<img src="<?php echo base_url(); ?>almacenamiento\locales\mochomos\pick-up-1.jpg" alt="" width="100%">
							</div>
							<div class="col-md-3">
								<img src="<?php echo base_url(); ?>almacenamiento\locales\mochomos\pick-up-1.jpg" alt="" width="100%">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row mt-2 text-center">
							<div class="col-md-3">
								<img src="<?php echo base_url(); ?>almacenamiento\locales\mochomos\pick-up-1.jpg" alt="" width="100%">
							</div>
							<div class="col-md-3">
								<img src="<?php echo base_url(); ?>almacenamiento\locales\mochomos\pick-up-1.jpg" alt="" width="100%">
							</div>
							<div class="col-md-3">
								<img src="<?php echo base_url(); ?>almacenamiento\locales\mochomos\pick-up-1.jpg" alt="" width="100%">
							</div>
							<div class="col-md-3">
								<img src="<?php echo base_url(); ?>almacenamiento\locales\mochomos\pick-up-1.jpg" alt="" width="100%">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row mt-2 text-center">
							<div class="col-md-3">
								<img src="<?php echo base_url(); ?>almacenamiento\locales\mochomos\pick-up-1.jpg" alt="" width="100%">
							</div>
							<div class="col-md-3">
								<img src="<?php echo base_url(); ?>almacenamiento\locales\mochomos\pick-up-1.jpg" alt="" width="100%">
							</div>
							<div class="col-md-3">
								<img src="<?php echo base_url(); ?>almacenamiento\locales\mochomos\pick-up-1.jpg" alt="" width="100%">
							</div>
							<div class="col-md-3">
								<img src="<?php echo base_url(); ?>almacenamiento\locales\mochomos\pick-up-1.jpg" alt="" width="100%">
							</div>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</section>
	</div>
	<div class="text-center">
		<button type="button" class="btn btn-purple btn-darken-3 round btn-min-width mr-1 mb-1">Ver todo</button>
	</div>
</div>

<img src="almacenamiento\inicio\publicidad-1.jpg" alt="" width="100%">

<div class="content center-layout">
	<div class="content-wrapper">
		<section class="mt-5">
			<div class="text-center">
				<h1 class="text-center purple darken-3">¡PROMOCIONES EN SOLESTA!</h1>
			</div>
			<div id="carousel-promos" class="carousel slide carousel-multi-item" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<div class="row mt-2 text-center">
							<div class="col-md-3">
								<img src="<?php echo base_url(); ?>almacenamiento\promociones\promociones-02.jpg" alt="" width="100%">
							</div>
							<div class="col-md-3">
								<img src="<?php echo base_url(); ?>almacenamiento\promociones\promociones-03.jpg" alt="" width="100%">
							</div>
							<div class="col-md-3">
								<img src="<?php echo base_url(); ?>almacenamiento\promociones\promociones-04.jpg" alt="" width="100%">
							</div>
							<div class="col-md-3">
								<img src="<?php echo base_url(); ?>almacenamiento\promociones\promociones-05.jpg" alt="" width="100%">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row mt-2 text-center">
							<div class="col-md-3">
								<img src="<?php echo base_url(); ?>almacenamiento\promociones\promociones-06.jpg" alt="" width="100%">
							</div>
							<div class="col-md-3">
								<img src="<?php echo base_url(); ?>almacenamiento\promociones\promociones-07.jpg" alt="" width="100%">
							</div>
							<div class="col-md-3">
								<img src="<?php echo base_url(); ?>almacenamiento\promociones\promociones-08.jpg" alt="" width="100%">
							</div>
							<div class="col-md-3">
								<img src="<?php echo base_url(); ?>almacenamiento\promociones\promociones-09.jpg" alt="" width="100%">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row mt-2 text-center">
							<div class="col-md-3">
								<img src="<?php echo base_url(); ?>almacenamiento\promociones\promociones-10.jpg" alt="" width="100%">
							</div>
							<div class="col-md-3">
								<img src="<?php echo base_url(); ?>almacenamiento\promociones\promociones-11.png" alt="" width="100%">
							</div>
							<div class="col-md-3">
								<img src="<?php echo base_url(); ?>almacenamiento\promociones\promociones-12.png" alt="" width="100%">
							</div>
							<div class="col-md-3">
								<img src="<?php echo base_url(); ?>almacenamiento\promociones\promociones-13.jpg" alt="" width="100%">
							</div>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</section>
	</div>
	<div class="text-center">
		<button type="button" class="btn btn-purple btn-darken-3 round btn-min-width mr-1 mb-1">Ver todo</button>
	</div>
</div>