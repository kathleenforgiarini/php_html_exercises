<?php

if (isset($_GET["id"])) {
    
    $id = $_GET["id"];
    $lastName = $_GET["lastName"];
    $grossPay = $_GET["grossPay"];
    $tax = 0;
    $amountOfTax = 0;
    $netPay = 0;
    
    if ($grossPay >= 50000 ){
        $tax = 45;
    } else if ($grossPay >= 40000){
        $tax = 40;
    } else if ($grossPay >= 35000){
        $tax = 35;
    } else if ($grossPay >= 30000){
        $tax = 30;
    } else if ($grossPay < 30000){
        $tax = 25;
    }
    
    $amountOfTax = $grossPay * ($tax / 100);
    $netPay = $grossPay - $amountOfTax;

    $GLOBALS["id"] = $id;
    $GLOBALS["lastName"] = $lastName;
    $GLOBALS["grossPay"] = $grossPay;
    $GLOBALS["tax"] = $tax;
    $GLOBALS["amountOfTax"] = $amountOfTax;
    $GLOBALS["netPay"] = $netPay;
}