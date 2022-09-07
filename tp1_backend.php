<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP_1</title>
</head>
<body>
    <h1>Programación: Backend Developer</h1>
    <br>
    <h2>TRABAJO PRÁCTICO Nº1</h2><hr>
    <br>
    <h3>Mariano Cortéz</h3><br>
    <h2>Ejercios:</h2><br>
    <ol>
        <li>Imprima por pantalla: “Hola mundo”.</li><br>
            <?php
                print "Hola Mundo - Hola Potrero Digital";
            ?>
        <br><hr>
        <li>Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.</li><br>
            <?php
               $texto_1 = "Hola Mundo";
               echo $texto_1;
            ?>
        <br><hr>
        <li>Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división 
entera y el resto de la división entera.</li><br>
            <?php
                $num_1 = 9;
                $num_2 = 5;
                echo "Variables Enteras: " . $num_1 . " y " . $num_2; //imprimir variables en una lines separa por punto
                print "<p>Suma : $num_1 + $num_2 = " . $num_1 + $num_2 . "\n</p>";
                print "<p>Resta : $num_1 - $num_2 = " . $num_1 - $num_2 . "\n</p>";
                print "<p>Multiplicación : $num_1 x $num_2 = " . $num_1 * $num_2 . "\n</p>";
                print "<p>División : $num_1 / $num_2 = " . $num_1 / $num_2 . "\n</p>";
                print "<p>Resto Entero : $num_1 % $num_2 = " . $num_1 % $num_2 ;
            ?>
        <br><hr>
        <li>Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por 
pantalla.</li><br>
            <?php
               $temperatura = 20;
               print "<p>Temperatura: $temperatura ºC = " . ($temperatura*(9/5)+32) . " ºF\n</p>";
               print "<p>Para pasar a grados Fahrenheit: [(t °C x 9/5) + 32]\n</p>";
            ?>
        <br><hr>
        <li>Implementar algoritmos que permitan:
            <ul><br>
                <li>Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.</li><br>
                    <?php
                        $base = 18;
                        $altura = 12;
                        print "Lados del Rectángulo: $base cm y $altura cm</p>\n";
                        print "<p>Perímetro: " . (2*$base)+(2*$altura) . " cm</p>\n";
                        print "<p>Área: " . $base * $altura . " cm^2</p>";
                    ?>
                <br><hr>
                <li>Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.</li><br>
                    <?php
                        $radio = 30;
                        print "El radio del círculo es: $radio cm </p>\n";
                        define("PI", 3.14159); //Definimos una constante
                        print "<p>Teniendo en cuenta que el valor de pi es " . PI . "</p>\n";
                        print "<p>Perímetro: " . 2*PI*$radio . " cm</p>\n";
                        print "<p>Área: " . PI*($radio**2) . " cm^2</p>";
                    ?>
            </ul>
        </li>
        
    </ol>
</body>
</html>