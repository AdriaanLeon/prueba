<?php  
include '../header.php';
include '../navbar.php';
include '../sidebar.php';

	$conect = new Conexion;
	$cod_prot = $_GET['cod_prot'];

	
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


		<div class="col-md-10">
			  <div class="box">
			    <div class="box-header">
			      <h3 class="box-title">Modificar Género</h3>
			    </div>
			    <!-- /.box-header -->
			    <div class="box-body">
			      <table id="example2" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Nombre de Género</th>
						</tr>
					</thead>
					<tbody>

					<form class="form-horizontal" method="post" action="../../functions/protagonistas/updateProt.php">
							<input type="hidden" name="cod_prot" value="<?php echo $cod_prot; ?>">
								<h2>Añadir Protagonista:</h2>
							<table>
								<thead>
									<tr>
										<td><label>Nombre:</label></td>
										<td><label>Nacionalidad:</label></td>
										<td><label>Género</label></td>
									</tr>
								</thead>
								<tbody>
									<tr>

									<?php
									$objProt = new Protagonistas($conect);
									$singleProt = $objProt->singleProt($cod_prot);
										while ($rowProt=$singleProt->fetch_array(MYSQLI_ASSOC)) {
									?>
										<td>
										<div class="box-body">
			                <div class="form-group">
			                  <div class="col-sm-12">
			                  <input class="form-control" type="text" name="nom_prot" value="<?php echo $rowProt['nom_prot'] ?>">
			                  </div>
			                </div>
			              </div>
										</td>
										<td>
										<div class="box-body">
			                <div class="form-group">
			                  <div class="col-sm-12">
			                  <input class="form-control" type="text" name="nal_prot" value="<?php echo $rowProt['nal_prot'] ?>">
			                  </div>
			                </div>
			              </div>
										</td>
										<td>
										<div class="box-body">
			                <div class="form-group">
			                  <div class="col-sm-12">
			                  <select class="form-control" type="text" name="gen_prot">
											
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