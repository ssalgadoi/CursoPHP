<?php include 'includes/header.php';


// Creamos variables numericos
$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

var_dump($numero1 > $numero2);// Si es mayor que
echo "<br/>";

var_dump($numero1 < $numero2);// Si es menor que
echo "<br/>";

var_dump($numero1 >= $numero2);// Si es mayor o igual
echo "<br/>";

var_dump($numero1 <= $numero2);// Si es menor o igual
echo "<br/>";

var_dump($numero2 == $numero3);// Si es igual 
echo "<br/>";

var_dump($numero2 == $numero4);// Si es igual
echo "<br/>";

var_dump($numero2 === $numero4);// Este revisa el valor y el tipo de datos
echo "<br/>";

// -1 Si el numero de la Izquierda es menor, 0 Si es igual, 1 Si izquierda es mayor
var_dump($numero1 <=> $numero2);
echo "<br/>";

var_dump($numero2 <=> $numero3);
echo "<br/>";

var_dump($numero2 <=> $numero1);
echo "<br/>";

include 'includes/footer.php';