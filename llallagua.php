<?php
include 'header.php';
?>




      <!-- Page Content -->
      <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">LLALLAGUA
          <small>Ciudad Minera</small>
        </h1>

        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Inicio</a>
          </li>
          <li class="breadcrumb-item active">Llallagua</li>
        </ol>

        <!-- Intro Content -->
        <div class="row">
          <div class="col-lg-6"><!--http://placehold.it/750x450-->
            <img class="img-fluid rounded mb-4" src="front/llallagua.jpg" alt="">
          </div>
          <div class="col-lg-6">
            <h2>Historia-Biografia</h2>
            <p class="text-justify">Llallagua es una ciudad y municipio de Bolivia, ubicado en la provincia de Rafael Bustillo del departamento de Potosí. Tiene una población de 40.865 habitantes, según el Censo INE realizado en el año 2012. Está a 3 901 m s. n. m.. Se encuentra 101 km al sudeste de la ciudad de Oruro, 9 km al norte del Uncía, capital de provincia.</p>
            <p class="text-justify">Llallagua (en su forma más usual) o Llallawa (como se escribe en los diccionarios del idioma quechua) es el nombre que dan los indígenas de los Andes a un espíritu benigno que trae abundancia en las cosechas de la papa, el producto más importante para su subsistencia. Se presenta en los cultivos en la forma de un tubérculo un poco más grande de lo normal y de forma un tanto irregular, como de dos papas unidas entre sí.</p>

          </div>
        </div>
        <!-- /.row -->

        <!-- Team Members -->
        <h2>Distritos</h2>

        <div class="row">
          <div class="col-lg-4 mb-4">
            <div class="card h-100 text-center"><!--http://placehold.it/750x450-->
              <img class="card-img-top" src="front/sigloxx.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title">Siglo XX</h4>
                <h6 class="card-subtitle mb-2 text-muted">Distrito 1</h6>
                <p class="card-text text-justify">Siglo XX es una pequeña localidad de Bolivia, dentro del municipio de Llallagua, en el Departamento de Potosí. Se encuentra 100 km al sudeste de la ciudad de Potosí, 8 km al norte del Uncía, capital de provincia.</p>
              </div>
              <div class="card-footer">
                <a href="#">Ver Mas</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card h-100 text-center">
              <img class="card-img-top" src="front/catavi.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title">Catavi</h4>
                <h6 class="card-subtitle mb-2 text-muted">Distrito 2</h6>
                <p class="card-text text-justify">Catavi es una localidad boliviana perteneciente al Municipio de Llallagua, ubicado en la Provincia Rafael Bustillo del Departamento de Potosí. En cuanto a distancia, Catavi se encuentra a 95 km de la ciudad de Oruro y a 245 km de la ciudad de Potosí.</p>
              </div>
              <div class="card-footer">
                <a href="#">Ver Mas</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card h-100 text-center">
              <img class="card-img-top" src="front/sakamarca.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title">Sakamarca</h4>
                <h6 class="card-subtitle mb-2 text-muted">Distrito 3</h6>
                <p class="card-text text-justify">Sakamarca es un distrito de Llallagua ubicado al sur-este de la cuidad de Llallagua, caracterizada por que su poblacion proviene de los sectores rurales del departamento de potosí, que tuvó un gran crecimiento a lo algo de los ultimos 5 años.</p>
              </div>
              <div class="card-footer">
                <a href="#">Ver Mas</a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->

        <!-- Our Customers -->
        <!--<h2>Our Customers</h2>
        <div class="row">
          <div class="col-lg-2 col-sm-4 mb-4">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </div>
          <div class="col-lg-2 col-sm-4 mb-4">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </div>
          <div class="col-lg-2 col-sm-4 mb-4">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </div>
          <div class="col-lg-2 col-sm-4 mb-4">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </div>
          <div class="col-lg-2 col-sm-4 mb-4">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </div>
          <div class="col-lg-2 col-sm-4 mb-4">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </div>
        </div>-->
        <!-- /.row -->

      </div>
      <!-- /.container -->

      <!-- Footer -->
      <footer class="py-5 bg-dark">
        <div class="container">
          <p class="m-0 text-center text-white">Copyright &copy; Alcaldia 2021</p>
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
