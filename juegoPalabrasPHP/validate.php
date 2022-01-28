<?php
    include_once './main.php';

    for ($i=0; $i < count($wordsArray); $i++) { 
        if($_REQUEST["word".$i] == $wordsArray[$i]){
            echo "La palabra ingresada es correcta <br/>";
        } else {
            echo "La palabra ingresada es incorrecta. La palabra correcta es: ".
            $wordsArray[$i]  .
            '<br/>';
        }
    }
?>