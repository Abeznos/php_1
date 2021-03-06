<?php
    $a = 5;
    $b = '05';

    var_dump($a == $b);         
    // true потому что используется оператор Равно, без привязки к типу данных, строка будет преобразована к числу,
    // после чего числа будут сравниваться между собой. 5 равно 5, пожтом true

    var_dump((int)'012345');
    // В данном примере строка преобразуется в число, и ноль отсечётся
        
    var_dump((float)123.0 === (int)123.0);
    // false, потому что стоит оператор сравнения по типу и по значению, т.к. числа разных типов (с плавующей точкой и цедое),
    // то после проверки типов сразу будет выведено false
    
    var_dump((int)0 === (int)'hello, world');
    // Т.е. в строке нет ни одного чилса, то она будет преобразована к 0, и строгое сравнение нулей выдаст true
?>