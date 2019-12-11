<?php 

include '../header.php';
include '../navbar.php';
include '../sidebar.php';

$cod_form = $_GET['cod_form'];

//Llamado a la clase Formato para traer el registro a modificar
$formato = new Formato(new Conexion);
$singleForm = $formato->singleFormato($cod_form);


?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Formatos de Película
    </h1>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">

  <div class="col-md-6">
			  <div class="box">
			    <div class="box-header">
			      <h3 class="box-title">Modificar Formato</h3>
			    </div>
			    <!-- /.box-header -->
			    <div class="box-body">
			      <table id="example2" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Nombre de Formato</th>
						</tr>
					</thead>
					<tbody>

					<form class="form-horizontal" name="modFormato" action="../../functions/formato/updateFormato.php" method="post">
								<input type="hidden" name="cod_form" value="<?php echo $cod_form; ?>">

								<?php
									$numForm = mysqli_num_rows($singleForm);
									if ($numForm > 0) {
										while ($row=mysqli_fetch_array($singleForm)) {
								?>
								<tr>
									<td>
									<div class="box-body">
		                <div class="form-group">
		                  <div class="col-sm-5">
		                  <input class="form-control" type="text" name="nom_form" value="<?php echo $row['nom_form']; ?>" />
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

