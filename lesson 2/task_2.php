<?php
// Задание 2
    $a2 = 4;
    $a22 = 0;
    switch ($a2) {
        case 1:
            echo $a2++ . " ";
        case 2:
            echo $a2++ . " ";       
        case 3:
            echo $a2++ . " ";
        case 4:
            echo $a2++ . " ";       
        case 5:
            echo $a2++ . " ";
        case 6:
            echo $a2++ . " ";       
        case 7:
            echo $a2++ . " ";
        case 8:
            echo $a2++ . " ";       
        case 9:
            echo $a2++ . " ";
        case 10:
            echo $a2++ . " ";       
        case 11:
            echo $a2++ . " ";
        case 12:
            echo $a2++ . " ";       
        case 13:
            echo $a2++ . " ";
        case 14:
            echo $a2++ . " ";       
        case 15:
            echo $a2++ . " <br/>";
            break;
    };
    switch (true) {
        case ($a22 < 15):
            while ($a22 <= 15) {
                echo $a22 . " ";
                $a22++;
            }
            echo "<br/><br/>";
            break;
        default: 
            echo $a22;
    }
