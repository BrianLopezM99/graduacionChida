<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
$session=$_SESSION["usuario"];


if(isset($session)){
    
}
else{
    header("Location: login.php");
}

?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
        $(function(){
            $paquetes = $("#paquete1, #paquete2, #paquete3");
            $paquetes.on("change", function(){
                var numero = $(this).val();
                var $precioCaja = $(this).next("h4");
                var precio = "$" + ($precioCaja.attr("data-precio")*numero);

                $precioCaja.text(precio);
            });
            $("#modalConfirmar").modal({
                show: false
            });

            $("#btnConfirmar").on("click", function(){
                var total = 0;
                $("#modalConfirmar").modal("show");
                $paquetes.each(function(){
                    var numero = $(this).val();
                    var $precioCaja = $(this).next("h4");
                    var precio = ($precioCaja.attr("data-precio")*numero);

                    total += parseInt(precio);
                });
                $("#precioFinal").text("El total es: $"+total);
            });
            $("#btnAceptar").on("click", function(){

                $(this).prop("disabled",true);

                var lugaresPaquete1 = $("#paquete1").val();
                var lugaresPaquete2 = $("#paquete2").val();
                var lugaresPaquete3 = $("#paquete3").val();

                $.ajax({
                    url: "comprar.php",
                    method: "POST",
                    data: {
                        paquete1: lugaresPaquete1,
                        paquete2: lugaresPaquete2,
                        paquete3: lugaresPaquete3
                    }
                })
                .done(function(){
                    $(this).prop("disabled",false);
                    $("#modalConfirmar").modal("hide");
                });
            });

            $.ajax({
                url: "indicadores.php",
                method: "GET",
                dataType: "json"
            })
            .done(function(indicadores){
                console.log(indicadores);
                $("#indicador1 p").text(indicadores[0].lugares);
                $("#indicador2 p").text(indicadores[1].lugares);
                $("#indicador3 p").text(indicadores[2].lugares);
            });
        });
    </script>
    <style>
        img{
            width: 50%;
        }
        aside.indicadores{
            text-align: center;
            position: fixed;
            top: 1;
            left: 0;

        }
        aside.indicadores img{
            width: 30px;
        }
    </style>
    <title>VIP</title>
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
              <a class="nav-link" href="http://localhost/BrianGraduacion/reservaciones.php">Reservar Asientos</a>
            </li>      
          </ul>
          <form class="form-inline my-2 my-lg-0">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/BrianGraduacion/graduacion.html">Salir</a>
            </li>      
          </ul>
          </form>
        </div>
      </nav>
    
    <section class="container-fluid">
        <section class="row text-center">
            <div class="col-md-12">
            <h3> Selecciona el paquete para la cena</h3>
            </div>
            
            <div class="col-md-4">
                <h4>Basico</h4>
                <img src="Imagenes/comida1.png" alt="platillo1">
                <input type="number" id="paquete1" value="0" min="0" max="10">
                <h4 data-precio="100">$0</h4>
            </div>
            <div class="col-md-4">
                <h4>Medio</h4>
                <img src="Imagenes/comida2.png" alt="platillo2">
                <input type="number" id="paquete2" value="0" min="0" max="10">
                <h4 data-precio="500">$0</h4>
            </div>
            <div class="col-md-4">
                <h4>Premium</h4>
                <img src="Imagenes/comida3.png" alt="platillo3">
                <input type="number" id="paquete3" value="0" min="0" max="10">
                <h4 data-precio="1000">$0</h4>
            </div>
            <div class="col-md-12">
                <button id="btnConfirmar" class="btn btn-primary">Confirmar</button>
            </div>
        </section>
    </section>

    <div class="modal" tabindex="-1" role="dialog" id="modalConfirmar">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Desea confirmar su seleccion?</p>
        <p id="precioFinal"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btnAceptar">Aceptar</button>
      </div>
    </div>
  </div>
</div>

<aside class="indicadores">
        <div id="indicador1">
            <img src="Imagenes/comida1.png" alt="paquete1">
            <p class="badge badge-danger">0</p>
        </div>
        <div id="indicador2">
            <img src="Imagenes/comida2.png" alt="paquete2">
            <p class="badge badge-danger">0</p>
        </div>
        <div id="indicador3">
            <img src="Imagenes/comida3.png" alt="paquete3">
            <p class="badge badge-danger">0</p>
        </div>
</aside>
</body>
</html>
