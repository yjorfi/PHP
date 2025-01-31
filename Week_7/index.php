<?php
session_start();
if (!isset($_SESSION['visit_count'])) {
    $_SESSION['visit_count'] = 0;
}
$_SESSION['visit_count']++;

echo "Deze pagina heb je al " . $_SESSION['visit_count'] . " keer bekeken voordat je de internet browser hebt afgesloten.";

if (isset($_COOKIE['total_visits'])) {
    $total_visits = $_COOKIE['total_visits'] + 1;
} else {
    $total_visits = 1;
}
setcookie('total_visits', $total_visits, time() + (365 * 24 * 60 * 60)); // 1 jaar geldig
echo "<br> In totaal heb je deze pagina al " . $total_visits . " keer bekeken.";
