<?php
$dsn = 'mysql:host=localhost;dbname=company'; // Datakällans namn
$username = 'root'; // MySQL-konto användarnamn
$password = 'mysql';// MySQL-kontolösenord
$options = [];
// Anslutning inuti ett try/catch block
try {
$connection = new PDO($dsn, $username, $password, $options); // Skapa PDO-objekt
} catch(PDOException $e) {
    echo 'Database connection failed.'; // Om det finns ett fel, skapas ett undantag          
   die();

}