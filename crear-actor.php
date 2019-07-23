<?php
	require_once 'autoload.php';

	$genres = DB::getAllActor();

	if ($_POST) {
		$actorToSave = new actor($_POST['nombre'], $_POST['apellido'], $_POST['peliculas']);

		$actorToSave->setID($_POST['id']);

		$saved = DB::saveActor($actorToSave);
	}

	$pageTitle = 'Crear actor';
	require_once 'partials/head.php';
	require_once 'partials/navbar.php';
?>

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-10">
					<h2>Crear actor</h2>
					<form method="post">
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label>Actor:</label>
									<input type="text" class="form-control" placeholder="Ej: Bruce" name="nombre">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Rating:</label>
									<input type="text" class="form-control" placeholder="Ej: Willis" name="Apellido">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Premios:</label>
									<input type="text" class="form-control" placeholder="Ej: Duro De Matar" name="Pelicula">
								</div>
							</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Género:</label>
									<select class="form-control" name="id">
										<option value="">Elegí un género</option>
										<?php foreach ($generos as $genero): ?>
											<option value="<?php echo $genero->getID() ?>"><?php echo $genero->getName() ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
							<div class="col-12 text-center">
								<button type="submit" class="btn btn-primary">GUARDAR</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<?php if (isset($saved)): ?>
				<div
					class="alert <?php echo $saved ? 'alert-success' : 'alert-danger'?>"
				>
					<?php echo $saved ? '¡Actor guardado con éxito!' : '¡No se pudo guardar el Actor!' ?>
				</div>
			<?php endif; ?>
		</div>
	</body>
</html>
