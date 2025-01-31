<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eindopdracht</title>
</head>
<body>
<form action="process-form.php" method="POST">
    <label for="username">Gebruikersnaam:</label>
    <input type="text" id="username" name="username"><br><br>
    
    <label for="email">E-mailadres:</label>
    <input type="email" id="email" name="email" ><br><br>
    
    <label for="password">Wachtwoord:</label>
    <input type="password" id="password" name="password" ><br><br>
    
    <label for="gender">Geslacht:</label>
    <input type="radio" id="male" name="gender" value="man">
    <label for="male">Man</label>
    <input type="radio" id="female" name="gender" value="vrouw">
    <label for="female">Vrouw</label><br><br>
    
    <label for="country">Land:</label>
    <select id="country" name="country" >
        <option value="">Kies een land</option>
        <option value="Nederland">Nederland</option>
        <option value="België">België</option>
        <option value="Duitsland">Duitsland</option>
        <option value="Frankrijk">Frankrijk</option>
    </select><br><br>
    
    <input type="submit" value="Verzenden">

</body>
</html>