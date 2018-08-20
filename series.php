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
         <title>Prueba de Series</title>
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
                    <h2 class='section-heading'>Prueba de Series</h2>
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
              <form action='series.php' method='post' >
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
      $a=0.6;
      $b=0.8;
      
      for($i=0;$i<$n;$i++)
      {
        if($x[$i] > $a and $x[$i] < $b)

          {$s[$i] = 1; 
                    }
        else
         { $s[$i] = 0; 
                 }
      }
       
      echo "<br> Numeros Si: </br>"; 
      for($i=0;$i<$n ;$i++)
      {
         
        echo $s[$i]."&nbsp";
      }
      $h=0; 
      $t[0]=0; 
      $t[1]=0;
      $t[2]=0;
      $t[3]=0;
      $t[4]=0;
      $t[5]=0;
      for($i=0;$i<$n-1;$i++)
      {
        $b=0; 
        if($s[$i]==1)
        {
          while(($s[$i+1]==0) and (($i+1)<=($n-1)) )
          {
            $b=$b+1;
            $i=$i+1;
          }
          if($s[$i+1]==1)
          {
            $h=$h+1;
            if ($b==0)
              $t[0]=$t[0] +1;
            else
              if($b==1)
                $t[1]=$t[1]+1; 
              else
                if($b==2)
                  $t[2]=$t[2]+1;
                else
                  if($b==3)
                    $t[3]=$t[3]+1; 
                  else
                    if($b==4)
                      $t[4]=$t[4]+1;
                    else
                      if($b>=5)
                        $t[5]=$t[5]+1;


          }
        }
      }


      echo " <br> Número de huecos = ". $h;
      echo "<br> Tamaño de huecos:";
      for($i=0;$i<=5;$i++)
      {
        echo "<br> "; 
        echo " T[$i] = " .$t[$i];
      }
      $s=0; 
      for($i=0;$i<5; $i++)
      {
        $e[$i]=$h*($b-$a)*pow((1-($b-$a)), $i);
        $s=$s+$e[$i];
      }
      $e[5]=$h-$s; 
      $s=0;
       for($i=0;$i<=5; $i++)
       {
        $er=pow(($e[$i]-$t[$i]),2)/$e[$i];
        $s=$s+$er;
       }
       $xt=11.07; 
       $xh=abs($s);
     
      if($xh < $xt)
      {
        echo "<br>";
        echo "X^2 = ".$xh."< 11.07";
        echo "<br>No se rechaza la independencia de los números ri";
      }
      else
      {
        echo "<br>";
        echo "X^2 = ".$xh."> 11.07 ";
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
