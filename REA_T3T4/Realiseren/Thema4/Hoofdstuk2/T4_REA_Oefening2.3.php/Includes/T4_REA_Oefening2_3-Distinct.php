<?php
// Verbinden met de database
$host = 'localhost';
$dbname = 'ijdb';
$user = 'root';
$pass = '';
$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
$sql = "SELECT DISTINCT Creator FROM tblRiddles WHERE Creator IS NOT NULL";
$result = $pdo->query($sql);
echo "<h2>Unieke makers van raadsels</h2>";
foreach ($result as $row)
{
    echo "<p>Maker: " . htmlspecialchars($row['Creator']) . "</p>";
}
?>