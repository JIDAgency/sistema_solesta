<div class="app-content container center-layout mt-2">
	<div class="content-wrapper">
		<div class="content-header row">
		</div>
		<div class="content-body">
			<!-- Change Log -->
				<div class="card">

					<div class="card-header">
						<h4 id="v10" class="card-title">Título</h4>
						<p>Subtítulo</p>
						<!--div class="heading-elements">
						</div-->
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

					<div class="card-content" aria-expanded="true">

						<div class="card-body">

							<div class="card-block">

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
							
							<div class="card-text">
							</div>

						</div>
					</div>

				</div>

			<!-- / Change Log -->

		</div>
	</div>
</div>