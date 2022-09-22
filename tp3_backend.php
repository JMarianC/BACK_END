<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras de Control</title>
</head>
<body>
    <?php
        print "<h2>Ejercicio 1:</h2>\n";
        print "<p>Mostrar los números del 1 al 100.</p>\n";
        for ($i = 1; $i <= 100; $i++) {
            echo $i . "- ";
        }
    ?><hr>
    <?php
        print "<h2>Ejercicio 2:</h2>\n";
        print "<p>Mostrar los números del 100 al 1.</p>\n";
        for ($i = 100; $i >= 1; $i--) {
            echo $i . "- ";
        }
    ?><hr>
    <?php
        print "<h2>Ejercicio 3:</h2>\n";
        print "<p>Mostrar los números pares del 1 al 100.</p>\n";
        for ($i = 2; $i%2 == 0 && $i <= 100; $i+=2) {
            echo $i . "- ";
        }
    ?><hr>
    <?php
        print "<h2>Ejercicio 4:</h2>\n";
        print "<p>Mostrar los números impares del 1 al 100.</p>\n";
        for ($i = 1; $i%2 != 0 && $i <= 100; $i+=2) {
            echo $i . "- ";
        }
    ?><hr>
    <?php
        print "<h2>Ejercicio 5:</h2>\n";
        print "<p>Mostrar la suma de los números de 1 a 20.</p>\n";
        $i=1;
        $n = 0;
        print "<p>La suma acumulada es:</p>\n";
        while ($i <= 20) {
            $n +=$i;
            print "<p>$i -> $n</p>";
            $i++;
        }
    ?><hr>
    <?php
        print "<h2>Ejercicio 6:</h2>\n";
        print "<p>Mostrar la suma de los números pares del 1 a 20.</p>\n";
        $i=2;
        $n = 0;
        print "<p>La suma acumulada es:</p>\n";
        while ($i <= 20 && $i % 2 ==0) {
            $n +=$i;
            print "<p>$i -> $n</p>";
            $i+=2;
        }
    ?><hr>
</body>
</html>