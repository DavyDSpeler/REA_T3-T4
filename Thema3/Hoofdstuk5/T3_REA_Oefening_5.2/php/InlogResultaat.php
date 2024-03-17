<!DOCTYPE html>
<html>
<head>
    <title>Inlogresultaat</title>
</head>
<body>
<?php
$username = "DavyD";
$password = "mijngeheim";
if(isset($_POST['username']) && isset($_POST['password'])) {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];
    if($input_username != $username) {
        echo "Username incorrect";
    } else {
        if($input_password != $password) {
            echo "Password en/of username incorrect";
        } else {
            echo "Gefeliciteerd! Je bent ingelogd en hier is de schatkist.";
            // Code om de schatkist te tonen zou hier komen
            echo "<p>Welkom bij de schatkist! Hier is jouw beloning:</p>";
            echo '<img src="../Media/Schatkist.jpg" alt="Schatkist">';
        }
    }
}
?>
</body>
</html>
