<?php
            
    function renderGallery($path) {
        $imageList = scandir($path);
            
        foreach($imageList as $link) {
            if (!is_dir($link)) {
                $result .= "<a href=\"../img/max/$link\"><img src=\"../img/min/$link\" /></a>";
            };
        };
        
        return $result;
    };

    echo renderGallery("../img/max");
?>


