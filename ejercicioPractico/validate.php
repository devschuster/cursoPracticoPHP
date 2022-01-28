<?php
    $productQty = $_POST["productQty"];
    $productDiscount = $_POST["productDiscount"];
    $productPrice = 0;
    $discountAmmount = 0;


    for ($i=0; $i < $productQty; $i++) { 
        if ($_POST["product".$i] <= 0){
            echo "El producto ".$i.
            " no tiene descuento.<hr/>";
        } else {
            $discountAmmount = $_POST["product".$i] * $productDiscount/100;
            $productPrice = $_POST["product".$i] - $discountAmmount;
            echo "El producto ".$i.
            " tiene un costo original de: $".
            $_POST["product".$i].
            "<br/>" .
            "Hemos aplicado un descuento del: ".$productDiscount.
            "% <br/>" .
            "Por lo que solo deberás cancelar un total de: $".$productPrice.
            "<br/>" .
            "Te haz ahorrado un total de: $".$discountAmmount.
            "<hr/>";
        }
    }

?>