<!DOCTYPE html>
<html>
<head>
    <title>Steen Papier Schaar</title>
</head>
<body>
<h1>Steen Papier Schaar</h1>
<form method="get">
    <button type="submit" name="keuze" value="steen">
        <img src="images/steen.png" alt="Steen" width="100" height="100">
    </button>
    <button type="submit" name="keuze" value="papier">
        <img src="images/papier.png" alt="Papier" width="100" height="100">
    </button>
    <button type="submit" name="keuze" value="schaar">
        <img src="images/schaar.png" alt="Schaar" width="100" height="100">
    </button>
</form>
<?php
session_start();
// Check of de gebruiker een keuze heeft gemaakt
if (!isset($_SESSION['user_score']))
{
    $_SESSION['user_score'] = 0; // Stel de score van de gebruiker
    $_SESSION['computer_score'] = 0; // Stel de score in van de computer
}
if (isset($_GET['keuze']))
{
    $user = $_GET['keuze']; // Keuze van de gebruiker
    $choices = ['steen', 'papier', 'schaar']; // Keuzes voor de computer
    $computer = $choices[rand(0, 2)]; // De Computer kiest een van de opties uit
    // Bepaal wie wint
    if ($user == $computer)
    {
        $msg = "Gelijk spel!";
    }
    elseif (($user == 'steen' && $computer == 'schaar') || ($user == 'papier' && $computer == 'steen') || ($user == 'schaar' && $computer == 'papier'))
    {
        $msg = "Gewwonen!";
        $_SESSION['user_score']++;
    }
    else
    {
        $msg = "Verloren!";
        $_SESSION['computer_score']++;
    }
    // Toon het resultaat en de stand
    echo "<p>Jij: $user | Computer: $computer</p>";
    echo "<p>Stand: {$_SESSION['user_score']} - {$_SESSION['computer_score']}</p>";
    echo "<p>$msg</p>";
    // Controleer of iemand het spel heeft gewonnen
    if ($_SESSION['user_score'] >= 5 || $_SESSION['computer_score'] >= 5)
    {
        if ($_SESSION['user_score'] >= 5)
        {
            echo "<h2>Jij wint het spel!</h2>";
        }
        else
        {
            echo "<h2>Computer wint het spel!</h2>";
        }
        session_destroy(); // Begin een nieuw spel
        echo '<a href="?">Nieuw spel</a>'; // Link om opnieuw te starten
    }
}
?>
</body>
</html>