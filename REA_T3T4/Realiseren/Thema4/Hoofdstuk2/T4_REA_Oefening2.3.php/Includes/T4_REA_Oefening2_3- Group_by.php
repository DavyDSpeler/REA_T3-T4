<?php
$host = "localhost";
$dbname = 'ijdb';
$user = 'root';
$pass = '';
$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);

// Fetch the number of unique riddle creators
$sql = "SELECT DISTINCT Creator FROM tblRiddles WHERE Creator IS NOT NULL ORDER BY Creator ASC";

$result = $pdo->query($sql);

// Output the number of unique creators found
echo "<p>Aantal unieke makers: " . $result->rowCount() . "</p>";

// Optional: print each creator
foreach ($result as $row) {
    echo "<p>Maker: " . htmlspecialchars($row['Creator']) . "</p>";
}
?>
