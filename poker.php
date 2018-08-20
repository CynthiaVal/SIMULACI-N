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
         <title>Poker</title>
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
                    <h2 class='section-heading'>PRUEBA DE INDEPENDENCIA</h2>
                </div>
            </div>
        </div>
    </section>
  

    <section id='services'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12 text-center'>
                    <h2 class='section-heading'>Prueba de Poker</h2>
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
              <form action='poker.php' method='post' >
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
      $file = fopen("cifra.txt", "r");
     
      $i=0;
      while(!feof($file)) {
      $x[$i] = fgets($file);
      $i=$i+1;
      
      }
    
      fclose($file);
      
      echo "Numeros ri: </br>"; 
      for($i=0;$i<$n;$i++)
      {
         
        echo $x[$i]."</br>";
      }
      $d=strlen($x[0]) -4; 
     
      for($i=0;$i<$n;$i++)
      {
        $r[$i]= $x[$i] * pow(10, $d);

      }

      for($i=0;$i<$n;$i++)
      {
        $k=$d-1;
        $num=$r[$i]; 
        for($j=0;$j<$d;$j++)
        {
 
           $c[$i][$j]  = floor($num/(pow(10, $k)));
         
          $num=$num-((pow(10, $k))*$c[$i][$j]);
          $k=$k-1;
        }
      }
      
        $o[0]=0; 
       $o[1]=0;
       $o[2]=0;
       $o[3]=0;
       $o[4]=0;
      for($i=0;$i<$n;$i++)
      {
        $b=0; 
        for($j=0;$j<$d-1;$j++)
        {
          
          $t=$d-1-$j; 
          for($y=1;$y<=$t;$y++)
          {
            if($c[$i][$j] == $c[$i][$j+$y])
              $b=$b+1;
            else
              $b=$b + 0;
          } 
          if(($j==0)and ($b==2))
            $b=4; 
          if($b>1)
          
            $j=$d;   

        }
          if($b==0)
                  $o[0]=$o[0]+1; 
                  else
                    if($b==1)
                      $o[1]=$o[1]+1; 
                    else 
                      if($b==2)
                        $o[2]=$o[2]+1; 
                      else
                        if($b==3)
                          $o[3]=$o[3]+1; 
                        else
                          if($b==4)
                            $o[4]=$o[4]+1; 
       //o[i] 
      //td=0
      //par=1
      //dpar=2
      //pok = 3;
      //ter=4;
    
      }
    echo " Categorias : ";
    for($i=0;$i<=4;$i++)
    {
      echo "<br>";
      echo "Cat [$i] =" . $o[$i];
    }
    $p[0]= 0.5040;
    $p[1]= 0.4320;
    $p[2]= 0.0270;
    $p[4]= 0.0360; 
    $p[3] =0.0010; 
    $s=0;
    for($i=0;$i<=4;$i++)
    {
      $e[$i]=$p[$i] * $n;

    }
        for($i=0;$i<=4;$i++)
    {
     
      $f[$i]=pow(($e[$i]-$o[$i]), 2) /$e[$i];
      $s=$s+$f[$i];
      echo "<br>";
      echo $f[$i];
      echo "<br>";

    }
    echo " <br>";
    echo "Comparación: ";
    $a=9.4877;
      if($s < $a)
      {
        echo "<br>";
        echo "<br>";
        echo "X^2 = ".$s."< $a";
        echo "<br>No se rechaza la independencia de los números ri";
      }
      else
      {
        echo "<br>";
        echo "X ^2= ".$s."> $a ";
        echo " <br> Se rechaza la independencia de los números ri";
      }
       
 
      
  }

  echo "
  <br>
  <br>
  
  <a href='index2.php' class='btn btn-primary btn-block btn-md' role='button'> REGRESAR AL INICIO </a>";
body2();
  fin();
  
 

?>
