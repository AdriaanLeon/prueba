<?php 

include '../header.php';
include '../navbar.php';
include '../sidebar.php';

$cod_gen = $_GET['cod_gen'];

//Llamado a la clase Genero para traer el registro a modificar
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
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Añadir Género</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="../../functions/genero/newGenero.php">
              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-12">
                    <input class="form-control" type="text" class="form-control" name="nom_gen" id="nom_gen" placeholder="Genero a insertar...!" maxlength="15">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
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

