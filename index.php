<?php

$variable3= "Hola ";

$variable1="Stalyn";
$variable2 = "Como estas?";
echo $variable3;
echo "<br>";
echo $variable1."<br>";

echo "<br>";
echo "==============";
echo "Suma<br>";
$x=5;
$y=10;
$z=3;

echo "Valor1: ".$x."<br>";
echo "Valor2: ".$y."<br>";
echo "Valor3: ".$z."<br>";


$suma=$x+$y+$z;

echo "La suma de los valores es: ".$suma;

$multiplicar=$x*$y*$z;
echo "<br>";
echo "La multiplicación de los valores es: ".$multiplicar;

//

echo "<br>===================";
echo "<br>";


if ($x > $y) {
  echo "La variable X es mayor que Y";
  
}else{
	echo "La variable X es menor que Y";
}





echo "<br>";
echo "===================<br>";
echo "BUCLE FOR<br>";
echo "===================<br>";
echo "<br>";


for ($i = 0; $i <= 10; $i++) {
    echo "Valor: ".$i."<br>";
}



echo "<br>";
echo "===================<br>";
echo "BUCLE while<br>";
echo "===================<br>";
echo "<br>";

$i = 0;
do {
	$i++;
	
    echo $i;
	
} while ($i < 10);










/*
<?php

?>*/


//$variable=true;










?>