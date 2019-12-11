	<?php include('dbcon.php'); ?>
	<form action="" method="post">
	<center><table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<div class="pull-right">
	 <a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Imprimir Lista</a> 
	 
	</div>
<br><br>
		<thead>
		<tr>
					<th>Nombre del Estudiante</th>
					<th>Curso</th>
					<th>Cuota</th>
					<th>Estado</th>
					<th>Cuota a Pagar</th>
				
					<th class="empty"></th>
		</tr>
		</thead>
		<tbody>
		<?php
		$query2 = mysqli_query($connection,"select * from students where status != 'exonerado' ")or die(mysql_error());
		while($row2= mysqli_fetch_array($query2)){
		$student_name = $row2['firstname'].' '.$row2['middlename'].' '.$row2['lastname'];
		$stud_id =$row2['student_id'];
		$status =$row2['status']; 
		$myclass =$row2['class'];
		
		$query3 = mysqli_query($connection,"select * from class where class_name='$myclass' ")or die(mysql_error());
		while($row3= mysqli_fetch_array($query3)){
		$fee = $row3['fee'];
		}		
		if($status=='pagado'){
			$status_fee =$fee;
		}else
		if($status=='exonerado'){
			$status_fee =0;
		}else
		if($status=='media'){
			$status_fee =$fee/2;
		}else
		if($status=='cuarta'){
			$status_fee =$fee/4;
		}
		
		?>
		<tr>
		<td><?php echo $student_name; ?></td> 
		<td><?php echo $myclass ; ?></td> 
		<td><?php echo $fee; ?></td> 
		<td><?php echo $status; ?></td> 
		<td><?php echo $status_fee; ?></td> 
	
		<td class="empty" width="250">
		<a data-toggle="modal" href="#<?php echo $stud_id; ?>" id="#<?php echo $stud_id; ?>"class="btn btn-inverse" name=""><i class="icon-money icon-large"></i> Pagar</a>
		<?php include('modal_pay.php'); ?>
		<a data-placement="top" title="Click para ver detalles" id="view<?php echo $stud_id; ?>" href="view_pay.php<?php echo '?id='.$stud_id; ?>" class="btn btn-warning"><i class="icon-search icon-large"></i> Ver Pagos</a>
			
		</td>
		</tr>
	  <?php }?>  
	
		</tbody>
	</table></center>
	</form>