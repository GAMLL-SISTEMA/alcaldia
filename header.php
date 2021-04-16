<?php
require_once('globals.php');
session_start();

?>
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
        <?php
        if(isset($_SESSION['usuario'])){
            //echo $_SESSION["tipo"];
            ForceLoad($_SESSION['tipo']."/"."index.php");
        }else{
        ?>
        <button type="button" class="btn btn-outline-primary mx-1" data-toggle="modal"data-target="#loginModal" id="buttonlogin "name="buttonlogin">Ingresar</button>
        <button type="button" class="btn btn-outline-primary" data-toggle="modal"data-target="#registerModal"name="button">Registro</button>
        <?php
        }
        ?>

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
                      <input type="password" name="lpassword" id="lpassword" class="form-control" value="" placeholder="Contraseña">
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
                    <input type="password" name="contrasena" id="contrasena"class="form-control" value="" placeholder="Contraseña">
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
