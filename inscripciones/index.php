<?php include('header.php'); ?>
  <body id="login">
    <div class="container">
  <?php include('navbar_index.php'); ?>
<br/><br/><br/><br/>
       <center><form>
              <img width="20%" src="default/img/1.png"/>
        <h1 style="font-size: 35px; color: white;"><a href="https://platea21.blogspot.com/"> Unacar </a>, Sistema de Registro y Control de pagos</h1>
        <h1 style="font-size: 80px; color: white;">SISTEMA DE INSCRIPCION</h1>
       </form></center>
         
    <form id="login_form" class="form-signin" method="post">
        <h3 class="form-signin-heading"><i class="icon-lock"></i> Iniciar Sesi&#243;n</h3>
        <input type="text" class="input-block-level" id="usernmae" name="username" placeholder="Usuario" required>
        <input type="password" class="input-block-level" id="password" name="password" placeholder="Contrase&#241;a" required>
        <button data-placement="top" title="Click para iniciar sesion" id="login1" name="login" class="btn btn-success" type="submit"><i class="icon-signin icon-large"></i> Ingresar</button>
                                <script type="text/javascript">
                    $(document).ready(function(){
                      $('#login1').tooltip('show');
                      $('#login1').tooltip('hide');
                    });
                  </script>
  </form>
                  <script>
                        jQuery(document).ready(function(){
                        jQuery("#login_form").submit(function(e){
                            e.preventDefault();
                            var formData = jQuery(this).serialize();
                            $.ajax({
                              type: "POST",
                              url: "login.php",
                              data: formData,
                              success: function(html){
                               if (html == 'true_admin'){
                                $.jGrowl("Cargando por favor espere......", { sticky: true });
                                $.jGrowl("bienvenido al Sistema de Inscripciones - Platea21 ", { header: 'Acceso Permitido' });
                              var delay = 1000;
                                setTimeout(function(){ window.location = 'dashboard.php'  }, delay);  
                              }else
                              if (html == 'true_user'){
                                $.jGrowl("Cargando por favor espere......", { sticky: true });
                                $.jGrowl("Bienvenido al Sistema de Inscripciones -  Platea21 ", { header: 'Acceso Permitido' });
                              var delay = 1000;
                                setTimeout(function(){ window.location = 'normal/dashboard.php'  }, delay);  
                              }else
                              {
                              $.jGrowl("Por favor revise su Usuario y Contrase&#241", { header: 'Inicio de Sesion fallido' });
                              }
                              }
                            });
                            return false;
                          });
                  });
                  </script>
                  <div class="s-background animated fadeIn">

  <!-- Gradient Effect
  ============================================= -->
  <div class="gradients">
        <div class="blue"></div>
  </div>
      <img class="slider" src="default/img/2.jpg">
    <img class="slider" src="default/img/3.jpg">
    <img class="slider" src="default/img/4.jpg">
    <img class="slider" src="default/img/5.jpg">
  <img class="slider" src="default/img/6.jpg">
</div>
<?php include('footer_index.php'); ?>
    </div> <!-- /container -->
<?php include('script.php'); ?>
  </body>
</html>