
					<!-- student payment modal -->
					<div id="<?php echo $stud_id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<form method="post" action="save_fee.php">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					
					<h3 id="myModalLabel">Realizar Pago de <?php echo $student_name;?> ?</h3>
					</div>
					<div class="modal-body">
					<div class="">
					
					<p>Nombre Completo: <strong><?php echo $student_name; ?></strong></p>
					<p>Nombre de Curso <strong><?php echo $myclass; ?></strong></p>
					<input type="hidden" name="student_id" value="<?php echo $stud_id;?>"/>
					<p>Cuota de Curso: <strong><?php echo $fee; ?></strong></p>
					<p>Estado Estudiante: <strong><?php echo $status; ?></strong></p>
					<p>Cuota a Pagar: <strong><?php echo $status_fee; ?></strong></p>
					<input type="hidden" name="status_fee" value="<?php echo $status_fee;?>"/>
					<p>Periodo: <strong>
						<select name ="period" required>
						<option ></option>
						<option  value="janmar">Enero-Marzo</option>
						<option value="aprjun">Abril-Junio</option>
						<option value="julsep">Julio-Septiembre</option>
						<option value="octdec">Octubre-Diciembre</option>
						</select>
					</strong><hr></p>
					<p>Nro. RECIBO: <input type="text" name="receipt" required/></p>
					</div>
					</div>
					<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> Cerrar</button>
					<button name="make_payment" class="btn btn-danger"><i class="icon-check icon-large"></i> si</button>
					</div>
					</form>
					</div>
					
				
					