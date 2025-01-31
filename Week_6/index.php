<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

session_start();


if (!isset($_SESSION['visit_count'])) {
    $_SESSION['visit_count'] = 1;  
} else {
    $_SESSION['visit_count']++;  
}

if (!isset($_COOKIE['total_visits'])) {   
setcookie('total_visits', $_SESSION['visit_count'], time() + (86400 * 30), "/");  
} else {
     $total_visits = $_COOKIE['total_visits'] + $_SESSION['visit_count'];
setcookie('total_visits', $total_visits, time() + (86400 * 30), "/");  
}

echo "Aantal bezoeken deze sessie: " . $_SESSION['visit_count'] . "<br>";

if (isset($_COOKIE['total_visits'])) {
    echo "Totaal aantal bezoeken (over alle sessies): " . $_COOKIE['total_visits'];
} else {
    echo "Totaal aantal bezoeken: 0";
}
?>
</body>
</html>