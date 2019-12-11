<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
		        <center><img src="images/titulo.png"></center>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_fees.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-right">
										<a href="fees.php"><i class="icon-arrow-left icon-large"></i> Volver</a>
								</div>
                            </div>
                            <div class="block-content collapse in">
												<?php
						$query = mysqli_query($connection,"select * from students where student_id = '$get_id'")or die(mysqli_error());
						$row = mysqli_fetch_array($query);
						$cl = $row['class'];
						$status = $row['status'];
						?>
						<div class="alert alert-success">DETALLE DE PAGO</div>
						<div class="span6">
						Nombre Completo: <strong><?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname']; ?></strong><hr>
						Nombre de Curso <strong><?php echo $cl; ?></strong><hr>
						
						<?php 
						$query3 = mysqli_query($connection,"select * from class where class_name = '$cl'")or die(mysqli_error());
						while ($row3=mysqli_fetch_array($query3)){
						$fee = $row3['fee'];
						
						if($status=='pagado'){
									$status_fee =$fee;
								}else
								if($status=='exonerado'){
									$status_fee ='0';
								}else
								if($status=='media'){
								$status_fee =$fee/2;
								}else
								if($status=='cuarta'){
									$status_fee =$fee/4;
								}
											
						}?>
												
						Cuota de Curso: <strong><?php echo $fee; ?></strong><hr>
						Estado Estudiante: <strong><?php echo $status; ?></strong><hr>
						Cuota a Pagar: <strong><?php echo $status_fee; ?></strong><hr>
						</div>
						
						
						
						
						<div class="span5">
						<?php 
						$query2 = mysqli_query($connection,"select * from janmar where student_id = '$get_id'")or die(mysqli_error());
						while ($row1=mysqli_fetch_array($query2)){
						$myfee1 = $row1['fee'];
						}?>
						Enero - Marzo: <strong><?php echo $myfee1; ?></strong><hr>
						
						<?php 
						$query4 = mysqli_query($connection,"select * from aprjun where student_id = '$get_id'")or die(mysqli_error());
						while ($row4=mysqli_fetch_array($query4)){
						$myfee2 = $row4['fee'];
						}?>
						
						Abril - Junio: <strong><?php echo $myfee2; ?></strong><hr>
						
						
						<?php 
						$query5 = mysqli_query($connection,"select * from julsep where student_id = '$get_id'")or die(mysqli_error());
						while ($row5=mysqli_fetch_array($query5)){
						$myfee5 = $row5['fee'];
						}?>
						
						Julio - Septiembre: <strong><?php echo $myfee5; ?></strong><hr>
						
						<?php 
						$query6 = mysqli_query($connection,"select * from octdec where student_id = '$get_id'")or die(mysqli_error());
						while ($row6=mysqli_fetch_array($query6)){
						$myfee6 = $row6['fee'];
						}?>
						
						Octubre - Diciembre: <strong><?php echo $myfee6; ?></strong><hr>
						
					
						</div>
<div class="span12">
	
						<div ></div>
	

</div>
							

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