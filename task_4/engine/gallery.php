<?php

function renderGallery($path) {
    $imgList = scandir($path);
    $result = "<div class=\"container\">";
    foreach($imgList as $link) {
        if (!is_dir($link)) {
            $result .= "<a class=\"galleryItem\" href=\"img/$link\"><img src=\"img/$link\" alt=\"$link\"/></a>";
        };
    };
    $result .= 
        "<form class=\"galleryItem adImage\" method=\"post\">
            <input class=\"adBtn\" type=\"file\" name=\"newImage\">
            <input class=\"\" type=\"submit\" name=\"upload\">
        </form>";
    $result .= "</div>";
    return $result;
};

echo renderGallery("img/");