<?php
    $menu = [
        "Home" => "#",
        "About" => "/about.html",
        "Catalog" => [
            "Men" => "/catalog/men.php",
            "Women" => "/catalog/women.php",
            "Child" => [
                "Pants" => "/catalog/child/pants.php",
                "Shoes" => "/catalog/child/shoes.php"
            ]
        ],
        "Contacts" => "/contacts.php"
     ];
    function renderMenu($menu) {
        $result = "<ul class=\"menu\">";
        
        foreach($menu as $title => $link) {
            if (is_array($link)) {
                $result .= "<li class=\"menu-item submenu\">$title";
                $result .= renderMenu($link);
                $result .= "</li>";
            } else {
                $result .= "<li class=\"menu-item\"><a href=\"$link\" class=\"menu-item-link\">$title</a></li>";
            }
        }
        
        $result .= "</ul>";
        return $result;
    };
    echo renderMenu($menu);