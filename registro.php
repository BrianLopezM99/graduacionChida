<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="css/main.css">
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

    <section class="col-md-6 col-sm-12" id="Info">
                <div class="jumbotron">
                <div class="container">
        <section class="row">
            <form action="registroProceso.php" method="POST">
                <div class="form-group">
                    <label for="">Usuario</label>
                    <input type="text" class="form-control" name="usuario">
                </div>
                <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="password" class="form-control" name="contrasena">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <button class="btn btn-primary">Registrarse</button>
            </form>
        </section>
    </div>
                </div>
            </section>
</body>
</html>