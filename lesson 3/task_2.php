<?php
    $index = 0;
    do {
        if ($index === 0) {
            echo "$index - это ноль <br/>";
        } else if ($index % 2 === 1) {
            echo "$index - это нечетное число <br/>";
        } else {
            echo "$index - это четное число <br/>";
        }
        $index++;
    } while ($index <= 10);