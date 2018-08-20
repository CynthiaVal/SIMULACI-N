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

  

  function fin()
  {
    echo
    "
     <a href='salir.php'>Salir</a>
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
  echo "ALGORITMO DE MULTIPLICADOR CONSTANTE ";
  echo "<br>";
  echo "************************************";
  echo "<br>";

  $x  = array( );
  $r = array();

  echo "
    <form action='multi_co.php' method='post' >
        <div class='form-group'>
          <label for='semilla'>Semilla</label>
            <div class='input-group'>
              <input class='form-control'  type='text'  name='semilla'>
              <br>
            </div>
        </div>
        <div class='form-group'>
          <label for='constante'>Constante</label>
            <div class='input-group'>
              <input class='form-control'  type='text'  name='constante'>
              <br>
            </div>
        </div>
        <div class='form-group'>
         <label for='cantidad'>Cantidad de numeros </label>
            <div class='input-group'>
              <input class='form-control'  type='text'  name='cantidad'>
              <br>
            </div>
        </div>
        <br>
        <input type='submit' value='enviar'>

      </form>";
  if (isset($_POST['semilla'])and isset($_POST['cantidad']) and isset($_POST['constante']) ) 
  {
    $xo=$_POST['semilla'];
    $n=$_POST['cantidad'];
    $c=$_POST['constante'];
    $x[0]=$xo;
    $d=strlen($xo);
    echo "El resultado es ..." ;
    for($i=1;$i<=$n; $i++)
    {
      $y=$c * $x[$i-1]; 
      $dy=strlen($y);
      $dd=$dy-$d;
      $z=$dd/2;
      if($z%2==0)
      {
        $x[$i] = substr($y, $z,$d);
        $w = $z;
      }
      else{
        $z=$w-1;
      
        $x[$i] = substr($y, $z,$d);
      }
      $dx=strlen($x[$i]);
      $r[$i]=$x[$i]/pow(10, $dx);
    }
  
    echo "<br>";
    for ($i=1; $i <= $n; $i++) { 
      echo "x.$i = $x[$i] &nbsp &nbsp r.$i = $r[$i] <br>";
    }
  }
  
  echo "
  <br>
  <br>
  
  <a href='index.php' class='btn btn-primary btn-block btn-sm' role='button'> <h4> REGRESAR AL INICIO </h4></a>";
  echo " 
  <section id='services'>
    <div class='col-lg-6 col-md-6 text-center'>
                    <div class='service-box'>
                        <a href='index.php' class='btn btn-primary btn-block btn-sm' role='button'> <h4>REGRESAR AL INICIO</h4></a>                 
    </div>
  </section>  ";


?>