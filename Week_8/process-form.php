<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    if (strlen($username) < 3 || strlen($username) > 15) {
        echo "U moet zich registreren.<br>";
    }
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Je e-mail is niet geldig<br>";
    }
    $password = $_POST['password'];
    if (strlen($password) < 6) {
        echo "Wachtwoord moet minimaal 6 tekens hebben<br>";
    }

    // Geslacht validatie
    if (!isset($_POST['gender'])) {
        echo "Je moet geslacht kiezen<br>";
    }

    // Land validatie
    $country = $_POST['country'];
    if ($country == "") {
        echo "Kies een land<br>";
    }
}
?>