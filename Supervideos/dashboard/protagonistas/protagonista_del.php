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

			<div class="col-md-6">
			  <div class="box">
			    <div class="box-header">
			      <h3 class="box-title">Eliminar Protagonista</h3>
			    </div>
			    <!-- /.box-header -->
			    <div class="box-body">
			      <table id="example2" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>¿Quieres Eliminar este Protagonista?</th>
									</tr>
								</thead>
								<tbody>

								<form class="form-horizontal" name="modProt" action="../../functions/protagonistas/deleteProt.php">
									<input type="hidden" name="cod_prot" value="<?php echo $cod_prot; ?>">

									<?php

										$objProt = new Protagonistas($conect);
										$singleProt = $objProt->singleProt($cod_prot);

											while ($rowProt=$singleProt->fetch_array(MYSQLI_ASSOC)) {
									?>
									<tr>
										<td>
										<div class="box-body">
		                	<div class="form-group">
			                  <div class="col-sm-12">
			                  <input class="form-control" type="text" name="nom_prot" value="<?php echo $rowProt['nom_prot']; ?>" />
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