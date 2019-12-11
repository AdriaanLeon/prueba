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
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Añadir Protagonista:</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="../../functions/protagonistas/newProt.php">
							<div class="box-body">
              	<div class="form-group">
                  <div class="col-sm-12">
									<label>Nombre:</label>
									<input class="form-control" type="text" name="nom_prot">
									
									<label>Nacionalidad:</label>
									<input class="form-control" type="text" name="nal_prot">
									
									<label>Género</label>
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
									?>
								</select>
									</div>
                </div>
              </div>
              <!-- /.box-body -->
								<div class="box-footer">
                <button type="submit" class="btn btn-info">Guardar</button>
              </div>
							</form>
					</div>
          <!-- /.box -->
        </div> 



 </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include '../footer.php'; ?>