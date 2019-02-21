<?php
$my_string = "Однажды в студёную зимнюю пору, я из лесу вышел, был исльный мороз";

function myReplaceString($string) {
    return str_ireplace(" ", "_", $string);
}

echo myReplaceString($my_string);
?>