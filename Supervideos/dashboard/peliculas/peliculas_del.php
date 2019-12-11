<?php  
include '../header.php';
include '../navbar.php';
include '../sidebar.php';

	$conect = new Conexion;
	$cod_pel = $_GET['cod_pel'];

	
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


		<div class="col-md-6">
			  <div class="box">
			    <div class="box-header">
			      <h3 class="box-title">Eliminar Película</h3>
			    </div>
			    <!-- /.box-header -->
			    <div class="box-body">
			      <table id="example2" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>¿Quieres Eliminar esta Película?</th>
						</tr>
					</thead>
					<tbody>

					<form class="form-horizontal" name="modPel" action="../../functions/peliculas/deletePel.php">
										<input type="hidden" name="cod_pel" value="<?php echo $cod_pel; ?>">

										<?php

											$objPel = new Peliculas($conect);
											$singlePel = $objPel->singlePel($cod_pel);

												while ($rowPel=$singlePel->fetch_array(MYSQLI_ASSOC)) {
										?>
										<tr>
											<td>
											<div class="box-body">
				                <div class="form-group">
				                  <div class="col-sm-12">
				                  <input type="text" name="nom_pel" value="<?php echo $rowPel['nom_pel']; ?>" />
												</div>
				                </div>
				              </div>
											</td>
										</tr>

										<?php			
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

