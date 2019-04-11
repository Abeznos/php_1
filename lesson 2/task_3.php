<?php
   // Задание 3
    
    //Сложение
    function mathAddition ($number1, $number2) {
        return $number1 + $number2;
    }   
    echo "Сумма двух чисел = " . mathAddition(2, 5) . "<br/>";    
    
    //Вычитание
    function mathSubtraction ($number1, $number2) {
        return $number1 - $number2;
    }   
    echo "Разность двух чисел = " . mathSubtraction(2, 5) . "<br/>";  
        
    //Умножение
    function mathMultiplication ($number1, $number2) {
        return $number1 * $number2;
    }
    echo "Произведение двух чисел = " . mathMultiplication(2, 5) . "<br/>";    
    
    //Деление
    function mathDivision ($number1, $number2) {
        if ($number2 === 0) {
            return 'На ноль делить нельзя'
        }        
        return $number1 / $number2;
    }   
    echo "Частное двух чисел = " . mathDivision(2, 5) . "<br/>";
 