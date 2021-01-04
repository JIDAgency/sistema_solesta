<div class="content center-layout bg-banner-index">
	<div class="content-wrapper">
		<section class="">

			<div class="text-center white">
				<h1 class="card-title white">¡QUÉ BUENO ES TENERTE DE REGRESO!</h1>
				<p>Shoppping, restaurantes, entretenimiento y más</p>
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
		<section class="">
			<div class="text-center">
				<h1 class="text-center primary">CONOCE SOLESTA</h1>
				<p>Jdcjnd kmskcmpw pokowhc joxck po psix oijn dcnkn oikjd kcpr jdns</p>
			</div>
			<div class="row mt-2 text-center">
				<div class="col-md-4">
					<img src="almacenamiento\inicio\mosaico-shopping.jpg" alt="" width="100%">
				</div>
				<div class="col-md-8">
					<img src="almacenamiento\inicio\mosaico-mercado.jpg" alt="" width="100%">
				</div>
			</div>
			<div class="row mt-1 text-center">
				<div class="col-md-4">
					<img src="almacenamiento\inicio\mosaico-restaurantes.jpg" alt="" width="100%">
				</div>
				<div class="col-md-4">
					<img src="almacenamiento\inicio\mosaico-entretenimiento.jpg" alt="" width="100%">
				</div>
				<div class="col-md-4">
					<img src="almacenamiento\inicio\mosaico-wellness.jpg" alt="" width="100%">
				</div>
			</div>
		</section>
	</div>
	<div class="text-center">
		<button type="button" class="btn btn-purple btn-darken-3 round btn-min-width mr-1 mb-1">Ver todo</button>
	</div>
</div>

<div class="content center-layout">
	<div class="content-wrapper">
		<section class="">
			<div class="text-center">
				<h1 class="text-center primary">CONOCE SOLESTA</h1>
				<p>Jdcjnd kmskcmpw pokowhc joxck po psix oijn dcnkn oikjd kcpr jdns</p>
			</div>
			<div class="row mt-2 text-center">
				<div class="col-md-4">
					<img src="almacenamiento\inicio\mosaico-shopping.jpg" alt="" width="100%">
				</div>
				<div class="col-md-8">
					<img src="almacenamiento\inicio\mosaico-mercado.jpg" alt="" width="100%">
				</div>
			</div>
			<div class="row mt-1 text-center">
				<div class="col-md-4">
					<img src="almacenamiento\inicio\mosaico-restaurantes.jpg" alt="" width="100%">
				</div>
				<div class="col-md-4">
					<img src="almacenamiento\inicio\mosaico-entretenimiento.jpg" alt="" width="100%">
				</div>
				<div class="col-md-4">
					<img src="almacenamiento\inicio\mosaico-wellness.jpg" alt="" width="100%">
				</div>
			</div>
		</section>
	</div>
	<div class="text-center">
		<button type="button" class="btn btn-purple btn-darken-3 round btn-min-width mr-1 mb-1">Ver todo</button>
	</div>
</div>