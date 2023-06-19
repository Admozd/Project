<?php
$host = 'localhost';
$port = 5432;
$dbname = 'postgres';
$username = 'postgres';
$password = 'Adamgrozny9586';

try {
$conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $username, $password);
} catch (PDOException $pe) {
die("Could not connect to the database $dbname :" . $pe->getMessage());
}
?>