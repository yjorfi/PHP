<?php
session_start();
if (!isset($_SESSION['visit_count'])) {
    $_SESSION['visit_count'] = 0;
}
$_SESSION['visit_count']++;

echo "Deze pagina heb je al " . $_SESSION['visit_count'] . " keer bekeken voordat je de internet browser hebt afgesloten.";
