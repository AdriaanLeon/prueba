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


		<div class="col-md-10">
			  <div class="box">
			    <div class="box-header">
			      <h3 class="box-title">Modificar Película</h3>
			    </div>
			    <!-- /.box-header -->
			    <div class="box-body">
			      <table id="example2" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Nombre de Película</th>
						</tr>
					</thead>
					<tbody>

					<form class="form-horizontal" method="post" action="../../functions/peliculas/updatePel.php">
					<input type="hidden" name="cod_pel" value="<?php echo $cod_pel; ?>">
									<h2>Actualizar Película:</h2>
								<table>
									<thead>
										<tr>
											<td><label>Nombre:</label></td>
											<td><label>Protagonista:</label></td>
											<td><label>Género:</label></td>
											<td><label>Formato:</label></td>
										</tr>
									</thead>
									<tbody>
										<tr>

										<?php
										//Llamado a la clase Peliculas para traer el registro a modificar
										$pelicula = new Peliculas($conect);
										$singlePel = $pelicula->singlePel($cod_pel);
											while ($rowPel=$singlePel->fetch_array(MYSQLI_ASSOC)) {
										?>
											<td>
											<div class="box-body">
				                <div class="form-group">
				                  <div class="col-sm-12">
													<input class="form-control" type="text" name="nom_pel" value="<?php echo $rowPel['nom_pel'] ?>">
													</div>
				                </div>
				              </div>
											</td>
											<td>
											<div class="box-body">
				                <div class="form-group">
				                  <div class="col-sm-12">
												<select class="form-control" type="text" name="prot_pel">
													<option value=""></option>
													<?php  
													//Instanciamos la clase Protagonistas y obtenemos todos los registros
													$objProt = new Protagonistas($conect);
													$protag = $objProt->getProt();

														while ($rowProt = $protag->fetch_array(MYSQLI_ASSOC)) {
															
													?>
														<option value="<?php echo $rowProt['cod_prot']; ?>"><?php echo $rowProt['nom_prot']; ?></option>
													<?php
														}
													?>
												</select>
												</div>
				                </div>
				              </div>
												</td>

											<td>
											<div class="box-body">
				                <div class="form-group">
				                  <div class="col-sm-12">
												<select class="form-control" type="text" name="gen_pel">
													<option value=""></option>
													<?php  
													//Instanciamos la clase Genero y obtenemos todos los registros
													$objGen = new Genero($conect);
													$genero = $objGen->getGenero();

														while ($rowGen = $genero->fetch_array(MYSQLI_ASSOC)) {
															
													?>
														<option value="<?php echo $rowGen['cod_gen']; ?>"><?php echo $rowGen['nom_gen']; ?></option>
													<?php
														}
													?>
												</select>
												</div>
				                </div>
				              </div>
												</td>

											<td>
											<div class="box-body">
				                <div class="form-group">
				                  <div class="col-sm-12">
												<select class="form-control" type="text" name="form_pel">
													<option value=""></option>
													<?php  
													//Instanciamos la clase Formato y obtenemos todos los registros
													$objForm = new Formato($conect);
													$formato = $objForm->getFormato();

														while ($rowForm = $formato->fetch_array(MYSQLI_ASSOC)) {
															
													?>
														<option value="<?php echo $rowForm['cod_form']; ?>"><?php echo $rowForm['nom_form']; ?></option>
													<?php
														}
													}
													?>
												</select>
												</div>
				                </div>
				              </div>
											</td>
										</tr>
									</tbody>

									<tfoot>
					    <tr>
					    <td align="center">
					    <div class="box-footer">
                <button type="submit" class="btn btn-info">Actualizar</button>
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

