<?php include('header.php'); ?>
<?php include('session.php'); ?>

  <body id="login">
  	
    <div class="container">
		

      <form id="change_password" class="form-signin" method="post" action="pay_report.php">
		<a href="fees.php"><i class="icon-arrow-left icon-large"></i> Volver</a>
        <h3 class="form-signin-heading"><i class="icon-search"></i>     FILTRAR BUSQUEDA</h3>
		<div class="control-group">
                                          <div class="controls">
										  <label>Periodo</label>
										  <select name="period" onchange="document.myform.formVar.value=this.value" required>
												<option></option>
												<option value ="janmar">Enero-Marzo </option>
												<option value ="aprjun">Abril-Junio </option>
												<option value ="julsep">Julio-Septiembre </option>
												<option value ="octdec">Octubre-Diciembre </option>
												
											</select>
                                            
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
											
										  <label>Curso</label>
										  <select name="class"onchange="document.myform.formVar.value=this.value" required>
										  <option></option>
										  <?php 
												$query = mysqlI_query($connection,"select * from class")or die(mysql_error());
												while($row =mysqlI_fetch_array($query)){
												$class_name = $row['class_name'];
						
											?>
												
												<option value ="<?php echo $class_name;?>"><?php echo $class_name;?></option>
												<?php }?>
												</select>
                                            
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
										  <label>Criterio</label>
										  <select name="criteria" onchange="document.myform.formVar.value=this.value" required>
												<option></option>
												<option value ="paid">Pago </option>
												<option value ="no_paid">No Pago</option>

											</select>
                                            
                                          </div>
                                        </div>
									
										
										
											<div class="control-group">
                                          <div class="controls">
												<button  data-placement="right" title="Click para Buscar" id="search" name="search" class="btn btn-inverse"><i class="icon-search icon-large"></i> Buscar</button>
												
												
                                          </div>
                                        </div>
			</form>
					

			
    </div> <!-- /container -->
<?php include('footer.php'); ?>
<?php include('script.php'); ?>
  </body>
</html>