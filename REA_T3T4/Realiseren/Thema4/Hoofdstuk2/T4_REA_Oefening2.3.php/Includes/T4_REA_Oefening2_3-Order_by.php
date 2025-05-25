<?php
$host = "localhost";
$dbname = 'ijdb';
$user = 'root';
$pass = '';
$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
$sql = "SELECT * FROM tblRiddles ORDER BY CreateDate DESC"; // Sorteert op datum, nieuwste eerst
$result = $pdo->query($sql);
echo "<h2>Raadseloverzicht (nieuwste eerst)</h2>";
foreach ($result as $row)
{
    echo "<p><strong>Raadsel:</strong> " . htmlspecialchars($row['RiddleText']) . "<br>";
    echo "<strong>Antwoord:</strong> " . htmlspecialchars($row['RiddleAnswer']) . "<br>";
    echo "<strong>Maker:</strong> " . htmlspecialchars($row['Creator']) . "<br>";
    echo "<strong>Datum:</strong> " . htmlspecialchars($row['CreateDate']) . "</p>";
}
?>
