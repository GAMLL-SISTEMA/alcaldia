<?php

session_start();

require_once("../db.php");
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
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
-->
  <!-- Custom styles for this template -->
  <link href="../css/modern-business.css" rel="stylesheet">

</head>

<body class="p-0">

  <!-- Navigation fixed-top fixed-top-->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
      <img src="../front/Escudo.png" alt="" width="70">
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
            <a class="nav-link" href="noticias.php"><strong>Noticias</strong></a>
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
        <!--para update-->
        <ul class="navbar-nav d-inline-block">
            <li class="nav-item d-inline-block dropdown">
                <a class="btn btn-outline-primary dropdown-toggle mx-1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['usuario'];?></a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a href="profile.php" class="dropdown-item">Profile</a>
                    <a href="" class="dropdown-item" data-toggle="modal" data-target="#updateModal">Update</a>
                    <a href="#" class="dropdown-item">Message</a>
                </div>
            </li>

            <li class="nav-item d-inline-block"> <a class="btn btn-outline-primary" href="../includes/logout.php">Logout</a> </li>

        </ul>
        <!-- para update -->


        <div class="modal fade" role="dialog" id="updateModal">
            <?php $u=DBUserInfo($_SESSION['usuario']);?>
            <div class="modal-dialog">
              <div class="modal-content">

                <div class="modal-header">
                  <h3 class="modal-title">Actualizar</h3>

                  <button type="button" class="close" data-dismiss="modal" name="bu">&times;</button>
                </div>

                <div class="modal-body">
                  <input type="hidden" name="id" id="id" value="<?php if(isset($u)) echo $u["userid"]; ?>">
                  <div class="from-group">
                    <label for="">Usuario:</label><!-- readonly="readonly"-->
                    <input value="<?php if(isset($u)) echo $u["username"]; ?>" type="text" name="username_update" id="username_update" class="form-control" value="" placeholder="Usuario">

                  </div>
                  <br>
                  <div class="from-group">
                    <label for="password_update">Anterior contraseña:</label>
                    <input type="password" name="password_update" id="password_update"class="form-control" value="" placeholder="Password">
                  </div>
                  <br>
                  <div class="from-group">
                    <input type="password" name="newpassword_update" id="newpassword_update"class="form-control" value="" placeholder="Nueva Contraseña">
                  </div>
                  <br>
                  <div class="from-group">
                    <input type="password" name="re_newpassword_update" id="re_newpassword_update"class="form-control" value="" placeholder="Repetir Nueva Contraseña">
                  </div>
                  <br>
                  <div class="from-group">
                    <label for="fullaname">Nombres Y Apellidos:</label>
                    <input value="<?php if(isset($u)) echo $u["userfullname"]; ?>"type="text" name="fullname_update" id="fullname_update" class="form-control" value="" placeholder="Nombres y Apellidos">
                  </div>
                  <br>
                  <div class="from-group">
                      <label for="email">Email:</label>
                    <input value="<?php if(isset($u)) echo $u["useremail"]; ?>"type="email" name="email_update" id="email_update"class="form-control" value="" placeholder="Email">
                  </div>
                  <br>

                </div>

                <div class="modal-footer">

                  <button type="button" class="mx-5 btn btn-danger" data-dismiss="modal" name="cancel_update">Cancelar</button>
                  <button type="submit" class="btn btn-success" id="update_button" name="update_button">Actualizar</button>
                </div>

              </div>

            </div>
          </div>


        </div>
      </div>
    </nav>
