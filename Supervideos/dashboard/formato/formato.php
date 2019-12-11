<?php
include '../header.php';
include '../navbar.php';
include '../sidebar.php';

//Llamado a la clase Formato para traer todos los registros
$formato = new Formato(new Conexion);
$list_formato = $formato->getFormato();

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



			<div class="col-md-12">
			  <div class="box">
			    <div class="box-header">
			      <h3 class="box-title">Lista de Formatos</h3>
			    </div>
			    <!-- /.box-header -->
			    <div class="box-body">
			    <a href="formato_new.php" class="btn btn-success">Añadir Formato</a>
			      <table id="example2" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Nombre de Formato</th>
								<th colspan="2">Acciones</th>
							</tr>
						</thead>
						<tbody>

							<?php
							$numForm = mysqli_num_rows($list_formato);
							if ($numForm > 0) {
								while ($row=mysqli_fetch_array($list_formato)) {
							?>
							<tr>
								<td><?php echo $row['nom_form']; ?></td>
								<td><a href='formato_mod.php?cod_form=<?php echo $row['cod_form']; ?>'>Modificar</a></td>
								<td><a href='formato_del.php?cod_form=<?php echo $row['cod_form']; ?>'>Eliminar</a></td>
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


