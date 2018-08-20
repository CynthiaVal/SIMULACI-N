<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ALGORITMOS</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

</head>
<body id="page-top">

    <section class="bg-primary" >
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">GENERACIÓN DE NÚMEROS PSEUDOALEATORIOS</h2>
                    <!--<hr class="light">-->
                    <!--<i class="fa fa-4x fa-calculator wow bounceIn " data-wow-delay=".3s"></i>-->
                </div>
            </div>
        </div>
    </section>
  

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Algoritmo de Cuadrados Medios</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-sm-6" >
              <form action='lineal.php' method='post' >
                <div class="form-group">
                  <label for='semilla'>Semilla</label>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-star"></span></span>
                      <input type="text" name="semilla" class="form-control" placeholder="" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="form-group">
                  <label for='multiplicativa'>Constante multiplicatia</label>
                    <div class="input-group">
                      <span class="input-group-addon" id="vbasic-addon1"><span class="glyphicon glyphicon-star"></span></span>
                      <input type="text" name="multiplicativa" class="form-control" placeholder="" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="form-group">
                  <label for='aditiva'>Constante aditiva</label>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-star"></span></span>
                      <input type="text" name="aditiva" class="form-control" placeholder="" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="form-group">
                  <label for='modulo'>Módulo</label>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-star"></span></span>
                      <input type="text" name="modulo" class="form-control" placeholder="" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="form-group">
                  <label for='cantidad'>Cantidad de números</label>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-star"></span></span>
                      <input type="text" name="cantidad" class="form-control" placeholder="" aria-describedby="basic-addon1">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-md" value="enviar"> Enviar</button>
              </form>

            </div>
          </div>
          <div class="row">
            
          </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>