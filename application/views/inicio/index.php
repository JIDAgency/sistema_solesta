<div class="app-content container center-layout mt-2">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-12 mb-2">
				<div class="row breadcrumbs-top">
					<div class="breadcrumb-wrapper col-12">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a>
							</li>
							<li class="breadcrumb-item active">Inicio
							</li>
						</ol>
					</div>
				</div>
				<h3 class="content-header-title mb-0">(Prueba Buscador)</h3>
			</div>
			<!--div class="content-header-right col-md-6 col-12">
				<div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">   
					<button class="btn btn-info round dropdown-toggle dropdown-menu-right px-2" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
					<div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons</a></div>
				</div>
			</div-->
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
					</style>

					<div class="card-content" aria-expanded="true">

						<div class="card-body">

							<div class="card-block">

								<fieldset>
									<div class="input-group">

										<div class="input-group-prepend">
											<input type="text" class="form-control" name="buscador" id="buscador" placeholder="Buscar..." aria-describedby="buscador">
										</div>

										<select class="form-control" name="categorias_select" id="categorias_select" onchange="cambiar_seleccion(this)">
											<option value="" class="optionPredetermined">Seleccione una categoría...</option>
											<?php foreach ($categorias_list as $categoria_row): ?>
													<option value="<?php echo $categoria_row->id; ?>" class="optionGroup"><?php echo $categoria_row->nombre; ?></option>
													<?php foreach ($subcategorias_list as $subcategoria_row): ?>
														<option value="<?php echo $subcategoria_row->id; ?>" class="optionChild"><?php echo $subcategoria_row->nombre; ?></option>
													<?php endforeach; ?>
											<?php endforeach; ?>
										</select>

										<div class="input-group-append">
											<button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
										</div>

									</div>
									<div id="resultado"></div>
								</fieldset>

							</div>
							
							<div class="card-text">
								<p>Hola</p>
							</div>

						</div>
					</div>

				</div>

			<!-- / Change Log -->

		</div>
	</div>
</div>