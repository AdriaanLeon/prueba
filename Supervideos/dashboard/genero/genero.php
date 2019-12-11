<?php

include '../header.php';
include '../navbar.php';
include '../sidebar.php';

//Llamado a la clase Genero para traer todos los registros
$genero = new Genero(new Conexion);
$list_genero = $genero->getGenero();

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Géneros de Película
    </h1>
  </section>

    <!-- Main content -->
    <section class="content container-fluid">

			
			 <!-- Lista de Géneros -->

			<div class="col-md-12">
			  <div class="box">
			    <div class="box-header">
			      <h3 class="box-title">Lista de Géneros</h3>
			    </div>
			    <!-- /.box-header -->
			    <div class="box-body">
			    <a href="genero_new.php" class="btn btn-success">Añadir Género</a>
			      <table id="example2" class="table table-bordered table-hover">

						<thead>
							<tr>
								<th>Nombre de Género</th>
								<th colspan="2" align="center">Acciones</th>
							</tr>
						</thead>
						<tbody>

							<?php
							$numGen = mysqli_num_rows($list_genero);
							if ($numGen > 0) {
								while ($row=mysqli_fetch_array($list_genero)) {
							?>
							<tr>
								<td><?php echo $row['nom_gen']; ?></td>
								<td><a href='genero_mod.php?cod_gen=<?php echo $row['cod_gen']; ?>'>Modificar</a></td>
								<td><a href='genero_del.php?cod_gen=<?php echo $row['cod_gen']; ?>'>Eliminar</a></td>
							</tr>

							<?php			
									}
								}
							?>

						</tbody>
							
						</table>

				</div>
			  <!-- /.box-body -->
			</div>
			<!-- /.box -->	



 </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include '../footer.php'; ?>


