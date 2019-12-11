   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"></i> Agregar Curso</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post" id="add_class1">
										<div class="control-group">
                                          <div class="controls">
										  <label>Categoria de Curso</label>
										  <select name="category" placeholder = "Category">
												<option></option>
												<option value ="Inicial">Inicial </option>
												<option value ="Primaria">Primaria </option>
												<option value ="Secundaria Basica">Basica /Secundaria</option>
												<option value ="Secundaria Avanzada">Avanzada /Secundaria</option>
											</select>
                                            
                                          </div>
                                        </div>
										 
										<div class="control-group">
                                          <div class="controls">
										  <label>Curso</label>
                                           <input class="input focused"  name="class_name" id="focusedInput" type="text" placeholder = "Nombre de Curso" required>
                                          </div>
                                        </div>
										
											<div class="control-group">
                                          <div class="controls">
										  <label>Cuota por 03 meses</label>
                                            <input class="input focused"  name="fee" id="focusedInput" type="text" placeholder = "Cuota" required>
                                          </div>
                                        </div>
										
										
										
											<div class="control-group">
                                          <div class="controls">
												<button  data-placement="right" title="Click para Salvar" id="save" name="save" class="btn btn-inverse"><i class="icon-save icon-large"></i> Guardar</button>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#save').tooltip('show');
															$('#save').tooltip('hide');
														});
														</script>
                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
		<script>
			jQuery(document).ready(function($){
				$("#add_class1").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "save_class.php",
						data: formData,
						success: function(html){
							$.jGrowl("Class Successfully  Added", { header: 'Class Added' });
							window.location = 'add_class.php';  
						}
					});
				});
			});
			</script>
					