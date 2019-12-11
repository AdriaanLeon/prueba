<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_dashboard.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"></i> Agregar Estudiante</div>
                                <div class="muted pull-right"><a id="return" data-placement="left" title="Click para volver" href="students.php"><i class="icon-arrow-left icon-large"></i> Volver</a></div>
																<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script>                          
						    </div>
                            <div class="block-content collapse in">						
						<form id="add_student" class="form-signin" method="post">
						<!-- span 4 -->
										<div class="span4">
										
											<label>Estado de Pago:</label>
											<select name="status" class="span5" required>
													<option></option>
													<option value="pagado">Pagado</option>
													<option value ="exonerado">Excluido</option>
													<option value="media">Media</option>
													<option value="cuarta">Cuarta</option>
												</select>
											<label>Primer Nombre:</label>
											<input type="text" class="input-block-level"  name="fname" placeholder="Primer Nombre" required>
											<label>Segundo Nombre:</label>
											<input type="text" class="input-block-level"  name="mname"     placeholder="Segundo Nombre"     required>
											<label>Apellidos:</label>
											<input type="text" class="input-block-level"  name="lname"  placeholder="Apellidos"  required>
											<label>Genero:</label>
												<select name="gender" class="span5" required>
													<option></option>
													<option>Masculino</option>
													<option>Femenino</option>
												</select>								
										</div>
						<!-- span 4 -->				
						<!-- span 4 -->				
						<div class="span4">
											
											<label>Fecha de Nacimiento:</label>
											<input type="date" class="input-block-level"  name="dob" placeholder="Fecha de Nacimiento">
											<label>Direccion:</label>
											<input type="text" Placeholder="Permanent Address" name="direccion" class="my_message" required>
											<label>Curso:</label>		
											<select name="student_class" class="span5" required>
											<option></option>
											<?php 
											$result = mysqli_query($connection,"select * from class ")or die(mysql_error());
											while($row = mysqli_fetch_array($result)){
											$myclass = $row['class_name'];			
									?>
								<option value="<?php echo $myclass;?>"> <?php echo $myclass;?> </option>
									<?php }?>
							</select>
							
									<dt><label>Transporte:</label></dt>
											<dd><label class="radio-inline"><input type="radio" name="transport" value="yes" checked='true'> Si </label></dd>
											<dd><label class="radio-inline"><input type="radio" name="transport" value="no"> No</label></dd>
										
									<label>Ruta:</label>
											<input type="text" Placeholder="Nombre de Ruta" name="route" class="my_message">
									<br>
									<br>
									<button class="btn btn-success" name="save"><i class="icon-save icon-large"></i> Guardar </button>	
											
						</div>
						<!--end span 4 -->	
						<!-- span 4 -->	
						<div class="span4">
									
							<label>Primer Nombre Apoderado:</label>
							<input type="text" class="input-block-level"  name="gfname" placeholder="Primer Nombre" required>
							<label>Segundo Nombre Apoderado:</label>
							<input type="text" class="input-block-level"  name="gmname" placeholder="Segundo Nombre" required>
							<label>Apellidos Apoderado:</label>
							<input type="text" class="input-block-level"  name="glname" placeholder="Apellidos" required>
							<label>Parentezco:</label>
							<input type="text" class="input-block-level"  name="rship" placeholder="Parentezco" required>
							<label>Telefono:</label>
							<input type="text" class="input-block-level"  name="tel" placeholder="Nro Telefono" onkeydown='return(event.which >= 48 && event.which <= 57)
											|| event.which ==8 || event.which == 46' maxlength ="10" required>
						</div>
						<!--end span 4 -->
						</form>						
			<script>
			jQuery(document).ready(function($){
				$("#add_student").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "save_stud.php",
						data: formData,
						success: function(html){
							$.jGrowl("Student Successfully  Added", { header: 'Student Added' });
							window.location = 'students.php';  
						}
					});
				});
			});
			</script>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>	
</html>