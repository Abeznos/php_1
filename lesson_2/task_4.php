<?php

    // Задание 4
    
    //Сложение
    function mathAddition ($number1, $number2) {
        $sum = $number1 + $number2;
        return $sum;
    }   
    echo "Сумма двух чисел = " . mathAddition(2, 5) . "<br/>";    
    
    //Вычитание
    function mathSubtraction ($number1, $number2) {
        $difference = $number1 - $number2;
        return $difference;
    }   
    echo "Разность двух чисел = " . mathSubtraction(2, 5) . "<br/>";  
        
    //Умножение
    function mathMultiplication ($number1, $number2) {
        $product = $number1 * $number2;
        return $product;
    }
    echo "Произведение двух чисел = " . mathMultiplication(2, 5) . "<br/>";    
    
    //Деление
    function mathDivision ($number1, $number2) {
        $quotient = $number1 / $number2;
        return $quotient;
    }   
    echo "Частное двух чисел = " . mathDivision(2, 5) . "<br/>";

    function mathOperation ($arg1, $arg2, $operation) {
        switch ($operation) {
            case "Сложение":
                return $operation . " = " . mathAddition($arg1, $arg2);
                break;
            case "Вычетание":
                return $operation . " = " . mathSubtraction($arg1, $arg2);
                break;
            case "Умножение":
                return $operation . " = " . mathMultiplication($arg1, $arg2);
                break;
            case "Деление":
                return $operation . " = " . mathDivision($arg1, $arg2);
                break;
            default: echo "Неправильное название функции";
        }
    };
    echo "<br/> Результат работы функции " . mathOperation(6, 12, "Сложение");
?>