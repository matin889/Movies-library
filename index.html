<?php
// inkludera databasfil för att ansluta till databasen
require 'db.php';
// Skapa query för att välja data från två tabeller för att lägga till dem i en tabell
$sql = 'SELECT * FROM bio INNER JOIN typ ON bio.id = typ.id';
// Utför query
$statement = $connection->prepare($sql);
$statement->execute();
$bio = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
 <!-- Skapa visningssida -->
 <!-- Inklusive header PHP-fil för FORM-sida -->
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <!-- Lägger till titeln --> 
      <h2>Movies World</h2>
    </div>
    <!-- Skapa tabellhuvudrad för visningstabell -->
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>Title</th>
          <th>Director</th>
          <th>Year</th>
          <th>Category</th>
          <th>Action</th>
        </tr>
        <!-- Skapa tabelldatarad för visningstabell -->
        <?php foreach($bio as $film): ?>
          <tr>
            <td><?= $film->title; ?></td>
            <td><?= $film->director; ?></td>
            <td><?= $film->year; ?></td>
            <td><?= $film->category; ?></td>
            <!-- Skapa "Edit"-knapp för att redigera data och "Delete"-knapp för att radera data -->
            <td>
              <a href="edit.php?id=<?= $film->id ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $film->id ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>

