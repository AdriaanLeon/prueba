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
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Añadir Película</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="../../functions/peliculas/newPel.php">
							<div class="box-body">
                <div class="form-group">
                  <div class="col-sm-12">
										<label>Nombre de Pelicula:</label>
										<input class="form-control" type="text" name="nom_pel">

										<label>Protagonista:</label>
										<select class="form-control select2" type="text" name="prot_pel">
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
										
										<label>Género</label>
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

										<label>Formato</label>
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
											?>
										</select>
									</div>
                </div>
              </div>
							<div class="box-footer">
                <button type="submit" class="btn btn-info">Guardar</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
        </div>  


 </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include '../footer.php'; ?>

