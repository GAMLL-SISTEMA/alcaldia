<?php
include 'header.php';
?>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mb-4">
        <h3>Publicar Nueva Noticia</h3>
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="control-group form-group">
            <div class="controls">
              <label>Titulo</label>
              <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div>

          <div class="control-group form-group">
            <div class="controls">
              <label>descripcion:</label>
              <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label for="">Foto:</label>
              <input type="file" class="form-control" id="archivo" name="archivo">
            </div>
          </div>
          <div id="success"></div>
          <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Publicar</button>
        </form>
      </div>

    </div>
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
        background:url('../front/covid-19.jpg');
        background-size: cover;

        }

    </style>
    <div class="card-img-top p-5" style="background-image: url('../front/covid-19.jpg');background-repeat: no-repeat;">
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
            <img src="../front/calacala.jpg" style="width: 100%; height: 100%;" alt="">
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
            <img src="../front/not2.jpg" style="width: 100%; height: 100%;" alt="">
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
            <img src="../front/not3.jpg" style="width: 100%; height: 100%;" alt="">
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
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>


<script>
//jquery
$(document).ready(function(){



     //update
     $('#update_button').click(function(){

          var id = $('#id').val();
          var username_update = $('#username_update').val();
          var password_update = $('#password_update').val();
          var newpassword_update = $('#newpassword_update').val();
          var re_newpassword_update = $('#re_newpassword_update').val();
          var fullname_update = $('#fullname_update').val();
          var email_update = $('#email_update').val();

          //newpassword_update
          if(username_update != '' && username_update != '' && password_update != '' && newpassword_update != '' && re_newpassword_update != '' && fullname_update !='' && email_update != ''){
              //alert("entro");
              $.ajax({

                   url:"../includes/i_user.php",
                   method:"POST",
                   data: {id:id, username_update:username_update, password_update:password_update, newpassword_update:newpassword_update, fullname_update:fullname_update, email_update:email_update},

                   success:function(data)
                   {
                        //alert(data);
                        if(data == 'Nopass')
                        {
                             alert("anterior password incorreto");
                        }
                        else
                        {
                            if (data == 'yes') {
                                alert('Actualizaste tu datos');
                                $('#updateModal').hide();
                                location.reload();
                                //location.href="index.php";
                            }else{
                                alert(data);
                            }
                             //$('#loginModal').hide();
                             //location.reload();

                             //alert(data);


                        }

                   }
              });


          }
          else
          {
               alert("Debe llenar todos los campos");
          }
     });


});
//register

</script>
