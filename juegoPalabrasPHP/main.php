<?php

$wordsArray = array("sol", "luna", "cielo", "luz", "estrella", "lluvia");

$form = "<form action='./validate.php'>";

for ($i=0; $i < count($wordsArray); $i++) { 
    $form.= "Escribe correctamente la palabra: ".str_shuffle( $wordsArray[$i]).
    "<input type='text' name='word".$i."' >".
    "<br/>";
}

$button ="<button type='submit'>Enviar</button>";
$formClose = "</form>";

echo $form.$button.$formClose;

?>