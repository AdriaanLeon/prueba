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
      Protagonistas de Película
    </h1>
  </section>

    <!-- Main content -->
    <section class="content container-fluid">

			
			 
        
							<!--  Listado de Protagonistas -->
			<div class="col-md-12">
			  <div class="box">
			    <div class="box-header">
			      <h3 class="box-title">Lista de Protagonistas</h3>
			    </div>
			    <!-- /.box-header -->
			    <div class="box-body">
			    <a class="btn btn-success" href="protagonistas_new.php"> Añadir Protagonista</a>
			      <table id="example2" class="table table-bordered table-hover">

							<thead>
								<tr>
									<th>Nombre de Protagonista</th>
									<th>Nacionalidad</th>
									<th>Género</th>
									<th colspan="2">Acciones</th>
								</tr>
							</thead>
							<tbody>

								<?php

								//Instanciamos la clase Protagonistas y obtenemos todos los registros
								$objProt = new Protagonistas($conect);
								$list_prot = $objProt->getProt();
								
								$numProt = mysqli_num_rows($list_prot);
								if ($numProt > 0) {
									while ($row=mysqli_fetch_array($list_prot)) {
								?>
								<tr>
									<td><?php echo $row['nom_prot']; ?></td>
									<td><?php echo $row['nal_prot']; ?></td>
									<td><?php echo $row['nom_gen']; ?></td>
									<td><a href='protagonista_mod.php?cod_prot=<?php echo $row['cod_prot']; ?>'>Modificar</a></td>
									<td><a href='protagonista_del.php?cod_prot=<?php echo $row['cod_prot']; ?>'>Eliminar</a></td>
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

