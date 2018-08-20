<?php 
$file = fopen("numero.txt", "r");
$n=0;
$i=0;
while(!feof($file)) {
$x[$i] = fgets($file);
$i=$i+1;
$n=$n+1;
}

fclose($file);
$m=sqrt($n);
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

?>