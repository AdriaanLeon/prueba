<?php 

include '../header.php';
include '../navbar.php';
include '../sidebar.php';

$conect = new Conexion;
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Títulos de Película
    </h1>
  </section>

    <!-- Main content -->
    <section class="content container-fluid">

									<!--  Listado de Peliculas -->


			<div class="col-md-12">
			  <div class="box">
			    <div class="box-header">
			      <h3 class="box-title">Lista de Películas</h3>
			    </div>
			    <!-- /.box-header -->
			    <div class="box-body">
			    	
			      <table id="example2" class="table table-bordered table-hover">
									<thead>
										<tr>
											<th>Nombre de Pelicula</th>
											<th>Nombre de Protagonista</th>
											<th>Género</th>
											<th>Formato</th>
											
										</tr>
									</thead>
									<tbody>

										<?php

										//Instanciamos la clase Peliculas y obtenemos todos los registros
										$objPel = new Peliculas($conect);
										$list_pel = $objPel->getPel();
										
										$numPel = mysqli_num_rows($list_pel);
										if ($numPel > 0) {
											while ($row=mysqli_fetch_array($list_pel)) {
										?>
										<tr>
											<td><?php echo $row['nom_pel']; ?></td>
											<td><?php echo $row['nom_prot']; ?></td>
											<td><?php echo $row['nom_gen']; ?></td>
											<td><?php echo $row['nom_form']; ?></td>
											
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


