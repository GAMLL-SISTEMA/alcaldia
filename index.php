<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Llallagua</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
-->
  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body class="p-0">

  <!-- Navigation fixed-top fixed-top-->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
      <img src="front/Escudo.png" alt="" width="70">
      <a class="navbar-brand font-italic" href="index.html">G.M.LL.<br>Esfuerzo y Desarrollo</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="text-dark navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="about.html"><strong> Llallagua</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html"><strong>Noticias</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html"><strong>Contactos</strong></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <strong>Sub-Alcadias</strong>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="portfolio-1-col.html">Siglo XX</a>
              <a class="dropdown-item" href="portfolio-2-col.html">22 de Diciembre</a>
              <a class="dropdown-item" href="portfolio-3-col.html">Catavi</a>
              <a class="dropdown-item" href="portfolio-4-col.html">Chullpa</a>
              <a class="dropdown-item" href="portfolio-item.html">Sikuya</a>
              <a class="dropdown-item" href="portfolio2-item.html">Sakamarca</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <strong>Gaceta municipal</strong>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="blog-home-1.html">Decreto Municipal</a>
              <a class="dropdown-item" href="blog-home-2.html">Decreto Edil</a>
              <a class="dropdown-item" href="blog-post.html">Decreto Ejecutivo</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <strong>Otros</strong>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPages">
              <a class="dropdown-item" href="full-width.html">Dirección de Cultura</a>
              <a class="dropdown-item" href="sidebar.html">Dirección de Turismo</a>

            </div>
          </li>

        </ul>
        <!--para login ann register-->

        <button type="button" class="btn btn-outline-primary mx-1" data-toggle="modal"data-target="#loginModal" id="buttonlogin "name="buttonlogin">Ingresar</button>
        <button type="button" class="btn btn-outline-primary" data-toggle="modal"data-target="#registerModal"name="button">Registro</button>


        <!--PARA LOGIN-->



          <div class="modal fade" role="dialog" id="loginModal">
              <div class="modal-dialog">
                <div class="modal-content">

                  <div class="modal-header">
                    <h3 class="modal-title">Ingresar</h3>
                    <button type="button" class="close" data-dismiss="modal" name="bu">&times;</button>
                  </div>

                  <div class="modal-body">

                    <div class="from-group">
                      <input type="text" name="username" id="username" class="form-control" value="" placeholder="Nombre o Email">
                    </div>
                    <br>
                    <div class="from-group">
                      <input type="password" name="password" id="password" class="form-control" value="" placeholder="Contraseña">
                    </div>

                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-warning" name="forpassword">¿Olvidó su contraceña?</button>
                    <button type="button" class="mx-5 btn btn-danger" data-dismiss="modal" name="cancel">Cancelar</button>
                    <button type="submit" class="btn btn-success" id="login_button" name="login_button">Ingresar</button>
                  </div>

                </div>
              </div>

          </div>




        <!-- para registro -->
        <div class="modal fade" role="dialog" id="registerModal">

            <div class="modal-dialog">
              <div class="modal-content">

                <div class="modal-header">
                  <h3 class="modal-title">Registrarse</h3>
                  <button type="button" class="close" data-dismiss="modal" name="bu">&times;</button>
                </div>

                <div class="modal-body">

                  <div class="from-group">

                    <input type="text" name="usuario" id="usuario" class="form-control" value="" placeholder="Nombre de Usuario">

                  </div>
                  <br>
                  <div class="from-group">
                    <input type="password" name="password" id="password"class="form-control" value="" placeholder="Contraseña">
                    <!---<div class="input-group">
                        <input type="password" name="password_registerc" id="password_registerc" class="form-control" value="" placeholder="Password" data-toggle="password">
                        <div class="input-group-append">
                            <div class="input-group-text"><i class="fa fa-eye"></i></div>
                        </div>
                    </div>-->
                  </div>
                  <br>
                  <div class="from-group">
                    <input type="password" name="repassword" id="repassword"class="form-control" value="" placeholder="Repetir contraseña">
                  </div>
                  <br>
                  <div class="from-group">
                    <input type="text" name="nombres_apellidos" id="nombres_apellidos" class="form-control" value="" placeholder="Nombres y Apellidos">
                  </div>
                  <br>
                  <div class="from-group">
                    <input type="email" name="email" id="email"class="form-control" value="" placeholder="Email">
                  </div>


                </div>

                <div class="modal-footer">

                  <button type="button" class="mx-5 btn btn-danger" data-dismiss="modal" name="cancel_register">Cancelar</button>
                  <button type="submit" class="btn btn-success" id="register_button" name="register_button">Registrarse</button>
                </div>

              </div>

              </div>
            </div>


      </div>
    </div>
  </nav>



  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below
        .contenedor:hover .imagen {-webkit-transform:scale(1.3);transform:scale(1.3);}
  .contenedor {overflow:hidden;}
-->
        <div class="carousel-item active" style="background-image: url('front/alcaldiaaa.jpeg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>INFRAESTRUCTURA</h3>
            <p>GAMLL</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('front/madre_obrera.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>INFRAESTRUCTURA</h3>
            <p>SALUD</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below http://placehold.it/1900x1080-->
        <div class="carousel-item" style="background-image: url('front/adalidalcalde.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>NUESTRO ALCALDE</h3>
            <p>Adalid Gorge Aguilar</p>
            <a href="#" class="btn btn-outline-warning">ver bibliografia</a>
            <a href="https://www.facebook.com/adalid.jorgeaguilar.9" class="btn btn-outline-primary">facebook</a>
            <a href="#" class="btn btn-outline-primary">twiter</a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4 text-center bg-secondary text-white">GOBIERNO MUNICIPAL</h1>

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header bg-success text-center">NOTICIAS</h4>
          <div class="card-body">
            <p class="card-text text-justify">Declaratoria de emergencia municipal por el rebrote del coronavirus Covid-19 dentro la jurisdicción territorial del municipio de Llallagua. El municipio de llallagua entra en emergencia luego de que subieran los casos de Covid-19. Solo se permite circular de 5am a 11pm .</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Ver mas</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header text-center bg-success">BIENES Y SERVICIOS REQUERIDOS POR EL GAMLL</h4>
          <div class="card-body">
            <p class="card-text">-Listado de items requeridos</p>-Convocatorias</p>-Contratación de bienes y servicios requeridos por el GAMLL</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Ver mas</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header bg-success text-center">INFORME DE GESTIÓN</h4>
          <div class="card-body">
            <p class="card-text text-justify"></p>-Rendición pública de cuentas </p>-Informes de Gestión del Gobierno Autónomo Municipal de Llallagua. </p>-Actividad independiente y objetiva de supervisión, una consultoría diseñada para agregar valor y mejorar las operaciones de una organización.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Ver mas</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <!-- Portfolio Section -->
    <h2 class="text-center bg-secondary text-white">PROYECTOS EN EJECUCION</h2>

    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100"><!--http://placehold.it/700x400-->
          <a href="#"><img class="card-img-top" src="front/estadium.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Estadium Irineo Pimentel Rojas</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="front/ayacucho.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">U.E. Ayacucho</a>
            </h4>
            <p class="card-text text-justify"> Se prevee que para mediados del año 2021 el colegio ayacucho estara en funcionamiento gracias a la rapida ejecucion del proyecto COLEGIO PARA TODOS</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="front/carlos medinaceli.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Colegio Carlos Medinaceli</a>
            </h4>
            <p class="card-text text-justify">La nueva infraestructura del colegio Carlos Medinaceli esta en ejecución y se prevee que estara concluido para el año 2022</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="front/junin.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Colegio Junin</a>
            </h4>
            <p class="card-text text-justify">Colegio junin hubicado en el distrito de Catavi en la cual se hizo la apertura del nuevo colegio con la presencia del ex presidente Evo Morales.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="front/itpioxii.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Instituto Tecnico Pio XII</a>
            </h4>
            <p class="card-text text-justify">Luego de un arduo trabajo por parte del plantel docente/estudiante se pudo conseguir la nueva infraestructura del instituto técnico Pio XII prevista para el año 2023.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="front/campoferial.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Campo Ferial Norte Potosí</a>
            </h4>
            <p class="card-text text-justify">Este mega proyecto tendra un alcance nacional y sera una gran relevancia para que los productores (pequeño y mediano) de la Ciudad de Llallagua muestren al interior del pais lo que se produce en el norte de Potosí.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <!-- Features Section -->
    <div class="row">
      <div class="col-lg-6 bg-success text-white">
        <h2>Proyectos Finalizados</p>Hospital de Llallagua</h2>
        <p>Nuevo hospital de segundo nivel que cuenta con:</p>
        <ul>
          <li>
            <strong>Medicina Interna</strong>
          </li>
          <li><strong>Ginecología y Obstetricia</strong></li>
          <li><strong>Cirugía General</strong></li>
          <li><strong>Pediatría</strong></li>
          <li><strong>Anestesiología</strong></li>
        </ul>
        <p>El proyecto está elaborado a partir de una demanda de salud que se advierte en el municipio de la ciudad de El Alto, por la baja cobertura centros de salud y además por los índices elevados mortalidad materno infantil.</p>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="front/hospitalnuevo.jpg" alt="">
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="row mb-4">
      <div class="col-md-8">
        <p></p>
      </div>
      <div class="col-md-4">
        <a class="btn btn-lg btn-secondary btn-block" href="#">Mas información</a>
      </div>
    </div>

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
<!--
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
-->


</body>

</html>



<script type="text/javascript">
$(document).ready(function(){
    $('#register_button').click(function(){
        var usuario=$('#usuario').val();
        var password=$('#password').val();
        var repassword=$('#repassword').val();
        var nombres_apellidos=$('#nombres_apellidos').val();
        var email=$('#email').val();
        if(usuario !='' && password != '' && repassword != '' && nombres_apellidos != '' && email != ''){
          if(password == repassword){
            $.ajax({
              url:"includes/i_user.php",
              method:"POST",
              data: {usuario:usuario, password:password, repassword:repassword, nombres_apellidos:nombres_apellidos, email:email},
              success:function(data)
              {
                if(data == 'yes'){
                  alert("se registro!");
                }else{
                  alert(data);
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
