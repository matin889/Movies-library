<?php
// inkludera databasfil för att ansluta till databasen
require 'db.php';
// Skapa en variabel för att samla in data från databastabeller
$id = $_GET['id'];
 // Skapa query för att ta bort data från databasen
$sql = 'DELETE FROM bio WHERE id=:id';
$sqlcat = 'DELETE FROM typ WHERE id=:id';
// Utför query
$statement = $connection->prepare($sql);
$statementcat = $connection->prepare($sqlcat);
if ($statement && $statementcat->execute([':id' => $id])) {
    // Omdirigera till "index"-sidan om query utförs väl
  header("Location: index.php");
}