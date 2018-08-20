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
         <title>Prueba KS</title>
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
                    <h2 class='section-heading'>Prueba KS</h2>
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
              <form action='ks.php' method='post' >
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
      $file = fopen("num.txt", "r");
     
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
      	
      //ordenamiento

      for($i=0; $i<$n; $i++)
      {
      	$imin=$i; 
      	for($j=$i+1; $j<$n; $j++)
      	{
      		if($x[$j] < $x[$imin])
      			$imin=$j; 
      	}
      	$aux=$x[$i]; 
      	$x[$i]=$x[$imin]; 
      	$x[$imin] = $aux; 
      }

      echo "<br>"; 
      echo "<br>"; 
	echo "Numeros ri ordenados: </br>"; 
      for($i=0;$i<$n;$i++)
      {
         
        echo $x[$i]."</br>";
      }

      for($i=0;$i<$n;$i++)
      {
         
       $d[$i]= ($i/$n) - $x[$i];
       $dd[$i]= $x[$i] - ($i-1)/$n; 
      }
      $dmax=max($d); 
      $ddmax=max($dd); 
   
 	echo "<br>"; 
    echo "<br>"; 
    echo $dmax;
    echo"<br>"; 
	echo $ddmax; 
	$max=max($ddmax,$dmax);

	  $t[10]='0.40925';
      $t[11]='0.39122';
      $t[12]='0.37543';
      $t[13]='0.36143 ';
      $t[14]='0.34890';
      $t[15]='0.33750';
      $t[16]='0.32733';
      $t[17]='0.31796';
      $t[18]='0.30936';
      $t[19]='0.30143';
      $t[20]='0.29408';
      $t[21]='0.28724';
      $t[22]='0.28087';
      $t[23]='0.2749l';
      $t[24]='0.26931 ';
      $t[25]='0.26404';
		echo "<br>"; 
    	echo "<br>"; 
    	echo "</br>";
      echo  $max.">".$t[$n];
      echo "</br>";
    if($max > $t[$n]){
    	echo " Los números Ri no siguen una distribución uniforme"; 
    }
    else
    {
    	echo " No se puede rechazar que los números Ri  siguan una distribución uniforme"; 
    }



      
  }

  echo "
  <br>
  <br>
  
  <a href='index.php' class='btn btn-primary btn-block btn-md' role='button'> REGRESAR AL INICIO </a>";
body2();
  fin();
  
 

?>
