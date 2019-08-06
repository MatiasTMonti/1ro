<?php
	require_once 'autoload.php';

	if ($_POST) {
		$actorToSave = new actor($_POST['name'], $_POST['lastName'], $_POST['age'], $_POST['bestMovie']);

		$saved = DB::saveActor($actorToSave);
	}

	$pageTitle = 'Agregar actor';
	require_once 'partials/head.php';
	require_once 'partials/navbar.php';
?>

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-10">
					<h2>Agregar actor</h2>
					<form method="post">
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label>Nombre:</label>
									<input type="text" class="form-control" placeholder="Ej: Franco" name="name">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Apellido:</label>
									<input type="text" class="form-control" placeholder="Ej: Armani" name="lastName">
								</div>
							</div>
              <div class="col-6">
								<div class="form-group">
									<label>Edad:</label>
									<input type="text" class="form-control" placeholder="Ej: 31 años" name="age">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Pelicula preferida del actor:</label>
									<input type="text" class="form-control" placeholder="Ej: The lord of Ring" name="bestMovie">
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
					<?php echo $saved ? '¡Actor agregado con éxito!' : '¡No se pudo agregar el actor!' ?>
				</div>
			<?php endif; ?>
		</div>
	</body>
</html>
