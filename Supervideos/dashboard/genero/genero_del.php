<?php 
include '../header.php';
include '../navbar.php';
include '../sidebar.php';

$cod_gen = $_GET['cod_gen'];

//Llamado a la clase Genero para traer el registro a eliminar
$genero = new Genero(new Conexion);
$singleGen = $genero->singleGenero($cod_gen);


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

			<div class="col-md-6">
			  <div class="box">
			    <div class="box-header">
			      <h3 class="box-title">Eliminar Género</h3>
			    </div>
			    <!-- /.box-header -->
			    <div class="box-body">
			      <table id="example2" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>¿Quieres Eliminar este Género?</th>
							</tr>
						</thead>
						<tbody>

						<form class="form-horizontal" name="modGenero" action="../../functions/genero/deleteGenero.php">
							<input type="hidden" name="cod_gen" value="<?php echo $cod_gen; ?>">

							<?php
								$numGen = mysqli_num_rows($singleGen);
								if ($numGen > 0) {
									while ($row=mysqli_fetch_array($singleGen)) {
							?>
							<tr>
								<td>
								<div class="box-body">
                	<div class="form-group">
	                  <div class="col-sm-5">
	                  <input class="form-control" type="text" name="nom_gen" value="<?php echo $row['nom_gen']; ?>" />
	                  </div>
	                </div>
	              </div>
              	</td>
							</tr>

							<?php			
									}
								}
							?>

						</tbody>
						<tfoot>
						    <tr>
						    <td align="center">
						    <div class="box-footer">
						      <button type="submit" class="btn btn-info">Eliminar</button>
						    </div>
						    </td>
						    </tr>
						</tfoot>	
						</table>
						</form>

			</div>
		  <!-- /.box-body -->
		</div>
		<!-- /.box -->


 </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include '../footer.php'; ?>

