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
         <title>Chi Cuadrado</title>
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
                    <h2 class='section-heading'>PRUEBA DE UNIFORMIDAD</h2>
                </div>
            </div>
        </div>
    </section>
  

    <section id='services'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12 text-center'>
                    <h2 class='section-heading'>Prueba Chi - Cuadrado</h2>
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
              <form action='chi.php' method='post' >
                <div class='form-group'>
                  <label for='cant'>Cantidad de numeros n : </label>
                    <div class='input-group'>
                      <span class='input-group-addon' id='basic-addon1'><span class='glyphicon glyphicon-star'></span></span>
                      <input type='text' name='n' class='form-control'  aria-describedby='basic-addon1'>
                    </div>
                </div>
                
                
                <button type='submit' class='btn btn-primary btn-block btn-md' value='enviar'> Enviar</button>
              </form>

            </div>
      
           <div class='col-sm-6'>
           <h4 class='section-heading'>El resultado es ....</h4>";
    

if (isset($_POST['n']) ) 
  {
      $n=$_POST['n'];
      $file = fopen("numero.txt", "r");
     
      $i=0;
      while(!feof($file)) {
      $x[$i] = fgets($file);
      $i=$i+1;
      
      }

      fclose($file);
      $m=sqrt($n);
      echo "Numeros ri: </br>"; 
      for($i=0;$i<$n;$i++)
      {
         
        echo $x[$i]."</br>";
      }
      $in=1/$m;
      $a1=0;
      $a2=$in;
      for ($j=0;$j<$m;$j++){
      $s=0;
        for($i=0;$i<$n;$i++){
          
          if($x[$i]>$a1 and $x[$i]<$a2)
          {
            $s=$s+1;
          }
        } 
        $a1=$a2;
          $a2=$a2+$in;
          $f[$j] = $s;
        
      }
      $xx=0;
      $fe=$n/$m;
      for ($j=0;$j<$m;$j++){
        $xx= pow($fe - $f[$j], 2)/$fe;
      }

      $t[2]='5,9915';
      $t[3]='7,8147';
      $t[4]='9,4877';
      $t[5]='11,0705';
      $t[6]='12,5916';

      echo "</br>";
      echo "Cantidad de numeros por intervalo: </br>";
      for($j=0;$j<$m;$j++)
      {
        
        echo $f[$j]."</br>";
      }
      echo "</br>";
      echo  $xx."<".$t[$m-1];
      echo "</br>";
      if ($xx<$t[$m-1]){
        echo "No se puede rechazar que el conjunto ri siga una distribución uniforme.";
      }

      
  }

  echo "
  <br>
  <br>
  
  <a href='index.php' class='btn btn-primary btn-block btn-md' role='button'> REGRESAR AL INICIO </a>";
body2();
  fin();
  
 

?>
