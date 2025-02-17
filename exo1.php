<?php

    echo "<h1>Exercises PHP</h1>";
    echo "<h2>Exercise 1</h2>";
    	
    posOrNeg(12);

    function posOrNeg(int $num):void {
        echo $num < 0 ? "Negative<br>" : "Positive<br>";
    }

    echo "<h2>Exercise 2</h2>";

    biggerInt(12,34,4);
    biggerInt(12,34,40);
    biggerInt(125,34,4);

    function biggerInt(int $num1, int $num2, int $num3):void {
        echo $num1 > $num2 && $num1 > $num3 ? $num1 : ($num2 > $num3 ? $num2 : $num3) . "<br>"; 
    }

    echo "<h2>Exercise 3</h2>";

    childCategory(12);

    function childCategory(?int $age):void{
        if ( $age > 5 AND $age < 8 ){
            echo "Poussin <br>";
        } else if ( $age > 7 AND $age < 10 ) {
            echo "Pupille <br>";
        } else if ( $age > 9 AND $age < 12 ) {
            echo "Minime <br>";
        } else if ( $age > 11 ) {
            echo "Cadet <br>";
        } else {
            echo "Not Enough Age <br>";
        }
    }

    echo "<h2>Exercise 3 : Bonus</h2>";
    
    childCategoryBonus(9);

    function childCategoryBonus(?int $age):void{
        switch($age){
            case ( $age > 5 AND $age < 8 ):
                echo "Poussin <br>";
                break;
            case ( $age > 7 AND $age < 10 ):
                echo "Pupille <br>";
                break;
            case ( $age > 9 AND $age < 12 ):
                echo "Minime <br>";
                break;
            case ( $age > 11 ) :
                echo "Cadet <br>";
                break;
            default:
                echo "Not Enough Age <br>";
        }
    }

    $tab = [10,22,58,89,11,6,148,10,47,28,21,4,2,158,189,2,14];

    echo "<h2>Exercise 4 : Tableau</h2>";

    maxArr($tab);

    function maxArr($arr){
        $max = $arr[0];
        $arrNum = 0;
        foreach($arr as $index => $num){
            if ($num > $max){
                $max = $num;
                $arrNum = $index;
            }
        }
        echo $max . "<br>" . $arrNum . "<br>";
    }

    echo "<h2>Exercise 5 : Tableau</h2>";

    midArr($tab);

    function midArr($arr){
        $total = 0;
        $counter = 0;
        foreach($arr as $num){
            $total += $num;
            $counter++;
        }
        echo floor($total / $counter) . "<br>";
    }

    echo "<h2>Exercise 6 : Tableau</h2>";

    minArr($tab);

    function minArr($arr){
        $min = $arr[0];
        $arrNum = 0;
        foreach($arr as $index => $num){
            if ($num < $min){
                $min = $num;
                $arrNum = $index;
            }
        }
        echo $min . "<br>" . $arrNum . "<br>";
    }