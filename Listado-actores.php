<?php
	require_once 'autoload.php';

	$actors = DB::getAllActors();

	$pageTitle = 'Listado de Actores';
	require_once 'partials/head.php';
	require_once 'partials/navbar.php';
?>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<table class="table table-striped">
						<thead class="thead-dark">
			    			<tr>
								<th scope="col">Nombre</th>
								<th scope="col">Apellido</th>
								<th scope="col">Edad</th>
								<th scope="col">Pelicula preferida</th>
			    			</tr>
			  			</thead>
			  			<tbody>
							<?php foreach ($actors as $actor): ?>
								<tr>
									<th scope="row"><?php echo $actor->getNombre(); ?></th>
									<td><?php echo $actor->getApellido(); ?></td>
									<td><?php echo $actor->getPeliculas(); ?></td>
									<td><?php echo $actor->getEdad(); ?></td>
								</tr>
							<?php endforeach; ?>
			  			</tbody>
					</table>
				</div>
			</div>
		</div>

	</body>
</html>
