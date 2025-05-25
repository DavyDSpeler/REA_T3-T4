<?php
/*
 * Remco Evers
 * Database functies
 */

$pdo = null;

function StartConnection($dbName = null)
{
    global $pdo;

    $dbHost = "localhost";

    //Checken of er een database is meegestuurd.
    if(!$dbName)
    {
        $dbName = "world";
    }
    $dbUser = "root";
    $dbPassword = "";

    try
    {
        $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
    }
    catch (PDOException $e)
    {
        // Bij een error, toon dan deze melding
        echo "<h1>Database error:</h1>";
        echo $e->getMessage();
        // Stop het script
        die();
    }
}


// Uitvoeren van een query
function executeQuery($sql)
{
    global $pdo;
// Uitvoeren van een SQl query
    try
    {
// Query uitvoeren
        $result = $pdo->query($sql);
        return $result;
    }
    catch (PDOException $e)
    {
        echo 'Er is een probleem met ophalen van de gegevens: ' . $e->getMessage();
        die();
    }
}