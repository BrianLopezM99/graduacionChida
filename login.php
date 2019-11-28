<?php

    session_start();
    session_destroy();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="scss/main.scss">
    <title>Login</title>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script>
      $(function() {
        $boton = $("button");
        $spin = $(".fa-spinner");
        $boton.on("click", function(evento) {
          evento.preventDefault();

          $boton.prop("disabled", true);
          $spin.fadeIn();

          var usuario = $('[name="usuario"]').val();
          var contrasena = $('[name="password"]').val();

          $.ajax({
            url: "resultado.php",
            method: "POST",
            dataType: "json",
            data: {
              usuario: usuario,
              password: contrasena
            }
          }).done(function(informacion) {
            var json = informacion;

            console.log(json);
            $boton.prop("disabled", false);
            $spin.fadeOut();
            if (json.codigo == "0") {
              $("#masaje").html(json.mensaje);
            } else if (json.codigo == "1") {
              window.location.href = "vip.php";
            }
          });
        });
      });
    </script>

    <style>
      .fa-spinner {
        display: none;
      }
    </style>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="http://www.unipolidgo.edu.mx/sitio/"><img src="img/cintillo-web.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>      
          </ul>
          <form class="form-inline my-2 my-lg-0">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/BrianGraduacion/graduacion.html">Cancelar</a>
            </li>      
          </ul>
          </form>
        </div>
      </nav>    

      <section class="container">
        <div class="jumbotron">
          <section class="row">
            <div class="col-md-6">
              <form action="resultado.php" method="POST">
                <div class="form-group">
                  <label for="">Usuario</label>
                  <input type="text" class="form-control" name="usuario" />
                </div>
                <div class="form-group">
                  <label for="">Contraseña</label>
                  <input type="password" class="form-control" name="password" />
                </div>
                <button class="btn btn-primary">Enviar datos</button>

                <i class="fas fa-spinner fa-pulse"></i>
                <div id="masaje"></div>
              </form>
            </div>
          </section>
        </div>
      </section>
    </section>
  </body>
</html>
