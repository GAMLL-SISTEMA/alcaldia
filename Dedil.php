<?php
include 'header.php';
?>
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">GACETA MUNICIPAL
      <small>En esta sección usted podrá encontrar Decretos Municipales, Decretos Ediles y Decretos Ejecutivos</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Inicio</a>
      </li>
      <li class="breadcrumb-item active">Gaceta Municipal</li>
    </ol>

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="front/leyes.jpg" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Leyes municipales</h2>
            <p class="card-text">Disposiciones de todas las leyes vigentes de la ciudad de Llallagua</p>
            <a href="#" class="btn btn-primary">Ver mas leyes &rarr;</a>
          </div>
          <div class="card-footer text-muted">

            <a href="#"></a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="front/resolu.jpg" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Resoluciones Municipales</h2>
            <p class="card-text">Las Resoluciones son notas de gestión administrativa emitida por el Concejo Municipal. Las resoluciones a diferencia de las ordenanzas, son normas de gestión administrativa del Concejo municipal y de cumplimiento obligatorio.</p>
            <a href="#" class="btn btn-primary">Ver mas Resoluciones &rarr;</a>
          </div>
          <div class="card-footer text-muted">

            <a href="#"></a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="front/decreto.jpg" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Decretos Ediles</h2>
            <p class="card-text">Dependiendo de la legislación de cada país, un decreto puede ser emanado directamente por el presidente, por el primer ministro o por el Consejo de Estado.</p>
            <a href="#" class="btn btn-primary">Ver mas decretos &rarr;</a>
          </div>
          <div class="card-footer text-muted">

            <a href="#"></a>
          </div>
        </div>

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; anterior</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">siguiente &rarr;</a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card mb-4">
          <h5 class="card-header">Buscar</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Buscar!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categorias</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Leyes</a>
                  </li>
                  <li>
                    <a href="#">Resoluciones Municipales</a>
                  </li>
                  <li>
                    <a href="#">Decretos Ediles</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Informe de Gestión</a>
                  </li>
                  <li>
                    <a href="#">Auditoría Interna</a>
                  </li>
                  <li>
                    <a href="#">Documentos Importantes</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->


      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
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
