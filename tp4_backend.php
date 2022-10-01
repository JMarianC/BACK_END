<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
<h1>Programación: Backend Developer</h1>
<h2>TRABAJO PRÁCTICO Nº4 - ARRAYS</h2><hr>
<h2>Mariano Cortéz</h3><hr>
<?php
print "<h2>Ejercicio 1:</h2>\n";
print "<p>Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</p>\n"; 
$num_par = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];
$arrlength = count($num_par);

for($x = 0; $x < $arrlength; $x++) {
  echo "<h3>" . $num_par[$x] . "</h3>";
}
?>
<hr>
<?php
print "<h2>Ejercicio 2:</h2>\n";
print "<p>Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la 
matriz. Mostrar el esquema del array con print_r().</p>\n";

$valores = array("Pedro", "Ana", 34 , 1);
print_r ($valores);

print "<p>Nota: La función print_r() es una función incorporada en PHP y se usa para imprimir o mostrar información almacenada en una variable.</p>";
?>
<hr>
<?php
print "<h2>Ejercicio 3:</h2>\n";
print "<p>Crear un array asociativo e introducir los siguientes valores: Nombre: Pedro; Apellido: Torres; Dirección: Av. Mayor 3703; Teléfono: 1122334455.</p>\n";

$datos = array("Nombre"=>"Pedro", "Apellido"=>"Torres", "Dirección"=>"Av. Mayor 3703" , "Teléfono" =>"1122334455");

foreach($datos as $x => $x_value) {
  echo "<h3>" . $x . ": " . $x_value . "</h3>";
}

?>
<hr>
<?php
print "<h2>Ejercicio 4:</h2>\n";
print "<p>Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y 
Chicago,  sin  asignar  índices  al  array.  A  continuación,  muestra  el  contenido  del  array. 
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.</p>\n";

$ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];

$long = count($ciudades);

for($x = 0; $x < $long; $x++) {
  echo "<h3>La ciudad con el índice " . $x . " tiene el nombre ". $ciudades[$x] . ".</h3>";
 }
 
?>
<hr>
<?php
print "<h2>Ejercicio 5:</h2>\n";
print "<p>Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona, 
LD  para  Londres,  NY  para  New  York,  LA  para  Los Ángeles  y  CCG  para  Chicago. 
Ejemplo: El índice de Madrid es MD.</p>\n";

$ciudades = ["MD"=>"Madrid", "BCL"=>"Barcelona", "LD"=>"Londres", "NY"=>"New York", "LA"=>"Los Ángeles", "CCG"=>"Chicago"];

foreach($ciudades as $city => $city_value) {
    echo "<h3>El índice de " . $city_value . " es " . $city . ".</h3>";
}   
?>
</body>
</html>