<?php

namespace App\Controllers;

class Operations extends BaseController{
    public function index(){
        echo "Student Number: 202210791";
        echo "<br>";
        echo "Full Name: Malvin Jaybert C. Gao";
        echo "<br>";
        echo "Degree Program: BSITWMA";
        echo "<br>";
        echo "Year Level: 3rd Year";
        echo "<br>";
        echo "Section: TW32";
        echo "<br>";
    }

    public function displayInfo($stuNum = 0, $name = "", $degProg = "", $yrLevel = "", $section = ""){
        echo "Student Number: $stuNum";
        echo "<br>";
        echo "Full Name: $name";
        echo "<br>";
        echo "Degree Program: $degProg";
        echo "<br>";
        echo "Year Level: $yrLevel";
        echo "<br>";
        echo "Section: $section";
        echo "<br>";
    }

    public function compute($num1 = 0, $num2 = 0){
        $sum = $num1 + $num2;
        $diff = $num1 - $num2;
        $prod = $num1 * $num2;
        if ($num2 == 0){
            $quot = "Undefined";
            $remain = "Undefined";
        }
        else{
            $quot = $num1 / $num2;
            $remain = $num1 % $num2;
        }

        echo "Sum: $sum";
        echo "<br>";
        echo "Difference: $diff";
        echo "<br>";
        echo "Product: $prod";
        echo "<br>";
        echo "Quotient: $quot";
        echo "<br>";
        echo "Remainder: $remain";
    }
}


?>