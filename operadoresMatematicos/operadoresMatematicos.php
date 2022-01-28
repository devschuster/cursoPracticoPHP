<?php
/*
    $a + $b	Adición	Suma de $a y $b.
    $a - $b	Sustracción	Diferencia de $a y $b.
    $a * $b	Multiplicación	Producto de $a y $b.
    $a / $b	División	Cociente de $a y $b.
    $a % $b	Módulo	Resto de $a dividido por $b.
    $a ** $b	Exponenciación	Resultado de elevar $a a la potencia $bésima.
*/

$valorA = 5;
$valorB = 2;

$suma = $valorA + $valorB;
var_dump($suma);

/*
    Suma: Se pueden operar dos o más valores a través del símbolo más o + , 
    y se realiza la operación  de suma como normalmente se hace en matemáticas para obtener como nuevo valor el resultado de dicha operación.
*/

$valorA = 5;
$valorB = 2;

$resta  = $valorA - $valorB;
var_dump($resta);

/*
    Resta: Se pueden operar dos o más valores a través del símbolo menos o - , 
    y se realiza la operación de resta como normalmente se hace en matemáticas para obtener como nuevo valor el resultado de dicha operación.
*/

$valorA = 5;
$valorB = 2;

$multiplicacion  = $valorA * $valorB;
var_dump($multiplicacion);

/*
    Multiplicación: Se pueden operar dos o más valores a través del símbolo de multiplicación o * , 
    y se realiza la operación de multiplicación como normalmente se hace en matemáticas para obtener como nuevo valor el resultado de dicha operación.
*/

$valorA = 5;
$valorB = 2;

$division  = $valorA / $valorB;
var_dump($division);

/*
    División: Se pueden operar dos o más valores a través del símbolo de división o / , 
    y se realiza la operación de división como normalmente se hace en matemáticas para obtener como nuevo valor el resultado de dicha operación.
*/

$valorA = 5;
$valorB = 2;

$modulo  = $valorA % $valorB;
var_dump($modulo);

/*
    Modulo: Es el resultado remanente de la división entre dos o mas valores.
    Para obtener el módulo de la división, se realiza la operación de división como normalmente se realiza pero se utiliza el símbolo %
*/

$valorA = 5;
$valorB = 2;

$potencia  = $valorA ** $valorB;
var_dump($potencia);

/*
    Potenciación: Resultado de elevar $a a la potencia $bésima.
    Para realizar la operación de potencia debemos utilizar el símbolo ** y debemos tener en claro que el primer valor será el que se eleve tomando como referencia el segundo valor
*/
?>