<?php
include 'header.php';
?>
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Noticias
      <small>Declaratoria de emergencia municipal por el rebrote Covid-19</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Inicio</a>
      </li>
      <li class="breadcrumb-item active">Noticias</li>
    </ol>

    <!-- Image Header http://placehold.it/1200x300-->
    <style media="screen">
      .img{
        margin:10px auto;
        border-radius:5px;
        border: 1px solid #999;
        padding:13px;
        width:100%;
        height:100%;
        background-size: 100% 100%;
        background-repeat:no-repeat;
        background:url('front/covid-19.jpg');
        background-size: cover;

        }

    </style>
    <div class="card-img-top p-5" style="background-image: url('front/covid-19.jpg');background-repeat: no-repeat;">
      <div class="">
        <p class="card-text text-right text-black"><strong>Ley 251/2021 <br>Declaratoria de emergencia <br> municipal por el rebrote <br> del covid-19 dentro la jurisdiccion <br> territorial del <br> municipio de Llallagua </strong></p>
      </div>

    </div>
    <strong>OTRAS NOTICIAS</strong>
    <br>
    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Apertura nuevo SEGIP en el distrito de Calacala</h4>

          <div class="card-body px-0 py-0">
            <img src="front/calacala.jpg" style="width: 100%; height: 100%;" alt="">
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Ver Mas</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Concluyen proyecto de exploración minera en Potosí</h4>
          <div class="card-body">
            <img src="front/not2.jpg" style="width: 100%; height: 100%;" alt="">
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Ver Mas</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">El Segip emite 980 licencias en Llallagua</h4>
          <div class="card-body">
            <img src="front/not3.jpg" style="width: 100%; height: 100%;" alt="">
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Ver Mas</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Gobierno Autónomo Municipal de Llallagua &copy;Todos los derechos Reservados.</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
<script type="text/javascript">
$(document).ready(function(){
    $('#login_button').click(function(){

        var username=$('#username').val();
        var password=$('#lpassword').val();

        if(username != '' && password != ''){

            $.ajax({
            url:"includes/i_user.php",
            method:"POST",
            data:{username:username, password:password},
            success:function(data){
              if(data == 'No'){
                alert("Nombre de usuario y/o password incorrecto");
              }else{
                $('#loginModal').hide();
                location.reload();
              }
            }
          });
        }else{
          alert('Debe llenar los campos');
        }
    });
    $('#register_button').click(function(){
        var usuario=$('#usuario').val();
        var password=$('#contrasena').val();
        var repassword=$('#repassword').val();
        var nombres_apellidos=$('#nombres_apellidos').val();
        var email=$('#email').val();

        if(usuario !='' && password != '' && repassword != '' && nombres_apellidos != '', email != ''){

          if(password == repassword){
            $.ajax({
              url:"includes/i_user.php",
              method:"POST",
              data: {usuario:usuario, password:password, repassword:repassword, nombres_apellidos:nombres_apellidos, email:email},
              success:function(data)
              {
                if(data == 'existuser'){
                  alert("El USUARIO YA EXISTE");
                }else{
                  if(data=='yes'){
                    alert("TE REGISTRASTE!");
                    $('#registerModal').hide();
                    location.reload();
                  }else{
                      alert(data);
                  }
                }
              }
            });

          }else{
            alert("password not match");
          }

        }else{
          alert("debe llenar todos los campos");
        }
    })
});

</script>
