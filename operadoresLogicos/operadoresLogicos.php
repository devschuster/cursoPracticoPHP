<?php
/*
Datos booleanos o de lógica, son aquellos que nos arrojan un  resultado de True or False dependiendo de su valor. 
Se encuentran con normalidad cuando se realizan condiciones, y/o funciones dándole a nuestra lógica de programación la información suficiente 
para determinar si algo está sucediendo o no.
Tablas de Verdad: Son aquellas tablas que indican cuál sería el resultado esperado acerca de lo que sería verdadero o falso, dependiendo de la conexión que se realice entre ellas.
Ejemplo. Si se combina un valor verdadero con un valor que es falso, nos dará un nuevo resultado, o salida, según como estemos conectando los valores.

En PHP tenemos que tener en cuenta la jerarquía de los operadores lógicos, ya que según que operador lógico estemos usando el resultado obtenido puede cambiar.
Hay que tener en cuenta que si utilizas el operador and, or o xor se estaría haciendo la asignación y después la operación. 
En cambio, si usamos && y || se hace primero la operación y después la asignación.
*/

$valorA = true;
$valorB = true;

$resultado = $valorA and $valorB;
var_dump($resultado);

$resultado = $valorA && $valorB;
var_dump($resultado);

$valorA = true;
$valorB = false;

$resultado = $valorA and $valorB;
var_dump($resultado);

$resultado = $valorA && $valorB;
var_dump($resultado);

$valorA = false;
$valorB = true;

$resultado = $valorA and $valorB;
var_dump($resultado);

$resultado = $valorA && $valorB;
var_dump($resultado);

$valorA = false;
$valorB = false;

$resultado = $valorA and $valorB;
var_dump($resultado);

$resultado = $valorA && $valorB;
var_dump($resultado);

/*
Conectividad Lógica de Conjunción.
Será verdadera si ambas proposiciones son verdaderas; Hay que tener en cuenta que al comparar dos valores disting 
con el operador lógico and primero se asigna el valor y luego lo compara.
Toma el valor true or false de la primera variable que estamos comparando arrojando como resultado el valor de la primera variable
Operador and
Solo es verdadera si ambas proposiciones son verdaderas, y será falsa cuando al menos uno de los valores o proposiciones es falso.
Operador &&
*/

$valorA = false;
$valorB = false;

$resultado = $valorA or $valorB;
var_dump($resultado);

$resultado = $valorA || $valorB;
var_dump($resultado);

$valorA = true;
$valorB = false;

$resultado = $valorA or $valorB;
var_dump($resultado);

$resultado = $valorA || $valorB;
var_dump($resultado);

$valorA = false;
$valorB = true;

$resultado = $valorA or $valorB;
var_dump($resultado);

$resultado = $valorA || $valorB;
var_dump($resultado);

/*
Conectividad Lógica de Disyunción Inclusiva.
Es falso si ambas proposiciones son falsas, y tal como lo observamos con el ejemplo de and, al utilizar el operador lógico or 
primero estamos asignado el valor de la varibale y luego realizamos la operación de comparación.
Es por ello que asignamos el valor de nuestra primera variable y obtendremos false or true de acuerdo al valor que estemos pasando en la primera varible
Operador or
Solo es falso si ambas proposiciones son falsas, y será verdadero cuando al menos uno de los valores o proposiciones es verdadero.
Operador ||
*/

$valorA = true;
$valorB = false;

$resultado = $valorA xor $valorB;
var_dump($resultado);

$resultado = ($valorA xor $valorB);
var_dump($resultado);

/*
Conectividad Lógica de Disyunción Inclusiva.
Dependiendo del primer valor asignado tendremos una salida falsa o verdadera. Recordemos que and, or y xor trabajan segun la precedencia de operadores.
Solo es falso si ambas proposiciones son verdaderas o falsas, y será verdadero cuando al menos uno de los valores o proposiciones es verdadero y el otro falso.
Operador xor envuelto en ()
*/