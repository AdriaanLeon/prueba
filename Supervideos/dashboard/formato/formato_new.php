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
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Añadir Formato</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="../../functions/formato/newFormato.php">
							<div class="box-body">
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="nom_form" id="nom_form" placeholder="Formato a insertar...!" maxlength="15">
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


 </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include '../footer.php'; ?>

