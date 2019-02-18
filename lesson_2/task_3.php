<?php
   // Задание 3
    
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
    
   ?>