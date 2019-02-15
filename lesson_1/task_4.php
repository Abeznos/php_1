<?php
    $heading1 = "<h1>Моя страница</h1>";
    $pageTitle = "Моя новая страница";
    $currentYear = date("m.d.y");
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><? echo $pageTitle ?></title>
</head>
<body>
   <? echo $heading1 ?>
   <p>Сегодня <? echo $currentYear ?></p>
</body>
</html>