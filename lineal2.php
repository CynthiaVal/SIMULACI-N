<?php
 

  function head()
  {
    echo
      "<!DOCTYPE html>
        <html lang='en'>
        <head>
          <meta charset='utf-8'>
          <meta http-equiv='X-UA-Compatible' content='IE=edge'>
          <meta name='viewport' content='width=device-width, initial-scale=1'>
          <meta name='description' content=''>
         <meta name='author' content=''>
         <title>Algoritmo Lineal</title>
          <link rel='stylesheet' href='css/bootstrap.min.css' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
          <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'      rel='stylesheet' type='text/css'>
          <link rel='stylesheet' href='font-awesome/css/font-awesome.min.css' type='text/css'>
          <link rel='stylesheet' href='css/animate.min.css' type='text/css'>
         <link rel='stylesheet' href='css/creative.css' type='text/css'>
        </head>";
      }
  function body1()
  {
    echo "<body id='page-top'>

    <section class='bg-primary'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-8 col-lg-offset-2 text-center'>
                    <h2 class='section-heading'>GENERACIÓN DE NÚMEROS PSEUDOALEATORIOS</h2>
                </div>
            </div>
        </div>
    </section>
  

    <section id='services'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12 text-center'>
                    <h2 class='section-heading'>Algoritmo Lineal</h2>
                    <hr class='primary'>
                </div>
            </div>
        </div>";
  }
  function body2()
  {
    echo "
     
    </div>
        </div> 
        </section>";
  }

  

  function fin()
  {
    echo
    "
     <!--<a href='salir.php'>Salir</a>-->
    <!-- Bootstrap Core JavaScript -->
    <script src=js/bootstrap.min.js'></script>

    <!-- Plugin JavaScript -->
    <script src='js/jquery.easing.min.js'></script>
    <script src='js/jquery.fittext.js'></script>
    <script src='js/wow.min.js'></script>

    <!-- Custom Theme JavaScript -->
    <script src='js/creative.js'></script>
    </body>

    </html>";
 
  }
  head();
  body1();
  echo "
  <div class='container'>
          <div class='row'>
            <div class='col-sm-6' >
              <form action='lineal2.php' method='post' >
                <div class='form-group'>
                  <label for='semilla'>Semilla</label>
                    <div class='input-group'>
                      <span class='input-group-addon' id='basic-addon1'><span class='glyphicon glyphicon-star'></span></span>
                      <input type='text' name='semilla' class='form-control'  aria-describedby='basic-addon1'>
                    </div>
                </div>
                <div class='form-group'>
                  <label for='multiplicativa'>Constante multiplicatia</label>
                    <div class='input-group'>
                      <span class='input-group-addon' id='vbasic-addon1'><span class='glyphicon glyphicon-star'></span></span>
                      <input type='text' name='multiplicativa' class='form-control'  aria-describedby='basic-addon1'>
                    </div>
                </div>
                <div class='form-group'>
                  <label for='aditiva'>Constante aditiva</label>
                    <div class='input-group'>
                      <span class='input-group-addon' id='basic-addon1'><span class='glyphicon glyphicon-star'></span></span>
                      <input type='text' name='aditiva' class='form-control'  aria-describedby='basic-addon1'>
                    </div>
                </div>
                <div class='form-group'>
                  <label for='modulo'>Módulo</label>
                    <div class='input-group'>
                      <span class='input-group-addon' id='basic-addon1'><span class='glyphicon glyphicon-star'></span></span>
                      <input type='text' name='modulo' class='form-control'  aria-describedby='basic-addon1'>
                    </div>
                </div>
                <div class='form-group'>
                  <label for='cantidad'>Cantidad de números</label>
                    <div class='input-group'>
                      <span class='input-group-addon' id='basic-addon1'><span class='glyphicon glyphicon-star'></span></span>
                      <input type='text' name='cantidad' class='form-control'  aria-describedby='basic-addon1'>
                    </div>
                </div>
                
                <button type='submit' class='btn btn-primary btn-block btn-md' value='enviar'> Enviar</button>
              </form>

            </div>
      
           <div class='col-sm-6'>
           <h4 class='section-heading'>El resultado es ....</h4>";

    if (isset($_POST['semilla']) and isset($_POST['multiplicativa'])and isset($_POST['aditiva'])and isset($_POST['modulo']) and isset($_POST['cantidad'])) 
  {
    $xo=$_POST['semilla'];
    $a=$_POST['multiplicativa'];
    $c=$_POST['aditiva'];
    $m=$_POST['modulo'];
    $n=$_POST['cantidad'];
    $x[0]=$xo;
    
    for($i=1;$i<=$n; $i++)
    {
      $x[$i]=(($a * $x[$i-1] + $c) % $m);
      $r[$i]=($x[$i])/($m-1);
    }
    
    echo "<br>";
    for ($i=1; $i < $n; $i++) { 
      echo "x.$i = $x[$i] &nbsp &nbsp r.$i = $r[$i] <br>";
    }
  }
  echo "
  <br>
  <br>
  
  <a href='index.php' class='btn btn-primary btn-block btn-sm' role='button'> <h4> REGRESAR AL INICIO </h4></a>";
        
  body2();
  fin();
  
 

?>