<?php
include 'header.php';
?>
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">SUB-ALCALDIA 22 DE DICIEMBRE
      <small></small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Inicio</a>
      </li>
      <li class="breadcrumb-item active">Subalcaldia 22 de diciembre</li>
    </ol>

    <div class="row">
      <div class="col-lg-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="front/villa.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Información</a>
            </h4>
            <p class="card-text">El distrito 22 de diciembre comprende varias zonas de la ciudad de Llallagua, la cual muestra un progreso exponencial para el desarrollo del departamento de Potosí.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="front/hos.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Hospital Madre Obrera</a>
            </h4>
            <p class="card-text">Hubicado en la Av. Norte Potosí, carretera a Uncia.</p>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->

    <!-- Pagination -->
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">1</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>

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
