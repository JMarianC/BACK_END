<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP_2</title>
</head>
<body>
<h1>Programación: Backend Developer</h1><br>
<h2>TRABAJO PRÁCTICO Nº2 - ESTRUCTURAS DE CONTROL:PARTE 1</h2><hr><br>
<h2>Mariano Cortéz</h3><br>
<h2>Ejercios:</h2><br>
<ol>
    <li>Crear una variable n y validar que sea un número positivo.</li><br>
        <?php
        $var_1 = -5;
        if ($var_1 > 0) {
            echo "<h3>$var_1 es un número positivo.</h3><hr><br>";
        } else {
            echo "<h3>$var_1 NO es un número positivo.</h3><hr><br>";
        }
        ?>
    <li>Crear una variable n y validar que sea un número mayor a 1 y menor a 10.</li><br>
        <?php
        $var_2 = 12;
        if ($var_2 > 1 and $var_2 < 10) {
            echo "<h3>$var_2 es un número comprendido entre 1 y 10.</h3><hr><br>";
        } else {
            echo "<h3>$var_2 NO es un número comprendido entre 1 y 10.</h3><hr><br>";
        }
        ?>
    <li>Crear una variable n y validar que sea un número mayor a 10 o menor a 2.</li><br>
        <?php
        $var_3 = 8;
        if ($var_3 > 10) {
            echo "<h3>$var_3 es un número mayor a 10.</h3><hr><br>";
        } elseif ($var_3 < 2) {
            echo "<h3>$var_3 es un número menor a 2.</h3><hr><br>";
        } else {
            echo "<h3>$var_3 es un número entre 2 y 10.</h3><hr><br>";
        }
        ?>
    <li>Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es 
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1, 
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y 
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales ”.</li><br>
        <?php
        $numero1 = 5;
        $numero2 = 8;
        echo "<h3> Número 1 = $numero1 <br> Número 2 = $numero2 <br>";
        if ($numero1 > $numero2) {
            
            echo "<h3> Suma: " . ($numero1+$numero2) . "<br>Resta: " . ($numero1-$numero2) . "</h3>";
        } elseif ($numero1 < $numero2) {

            //la función floor muestra el entero inferior de un número decimal

            echo "<h3> Multiplicación: " . ($numero1*$numero2) . "<br>División (entero): " . floor($numero2/$numero1). "<br>Resto (módulo): " . ($numero2 % $numero1) . "</h3>";
        } else {
            echo "<h3>Los números ingresados son iguales</h3>";
        }
        ?>
    
    </ol>
</body>
</html>