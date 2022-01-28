<?php
$productQty = $_POST["productQty"];
$productDiscount = $_POST["productDiscount"];
$formHeader = "<form action='./validate.php' method='POST'>";
$formInputs = "";
$formProductQty = "";
$formProductDiscount = "";
$formButton = "<button type='submit'>Enviar</button>";
$formCloseTag = "</form>";

for ($i=0; $i < $productQty ; $i++) { 
        $formInputs .= "Ingresa el valor del producto ".$i." sin descuento: ".
        "<input type='number' name='product".$i."' min='0' required/>".
        "<br/>";
        $formProductQty .="<input type='hidden' name='productQty' id='productQty' value='".$productQty."'/>";
        $formProductDiscount .="<input type='hidden' name='productDiscount' id='productDiscount' value='".$productDiscount."'/>";
    }
echo $formHeader.$formInputs.$formProductQty.$formProductDiscount.$formButton.$formCloseTag;

?>