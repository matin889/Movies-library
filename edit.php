<?php
// inkludera databasfil för att ansluta till databasen
require 'db.php';
// Skapa en variabel för att samla in data från databastabeller
$id = $_GET['id'];
// Skapa query för att välja data från databasen
$sql = 'SELECT * FROM bio WHERE id=:id'; //Detta är för tabellen "bio" som innehåller fälten "titel", "direktör" och "år"
$sqlcat = 'SELECT * FROM typ WHERE id=:id'; //Detta är för tabellen "typ" som innehåller fältet "category"
// Utför två query
$statement = $connection->prepare($sql);
$statementcat = $connection->prepare($sqlcat);
$statement->execute([':id' => $id ]);
$statementcat->execute([':id' => $id ]);
$film = $statement->fetch(PDO::FETCH_OBJ);
$filmcat = $statementcat->fetch(PDO::FETCH_OBJ);
// Skapa funktion för att updatera data i databastabellen
if (isset ($_POST['update']) ) {
// Skapa variabler för att updatera data i databastabellen
  $title = $_POST['title'];
  $director = $_POST['director'];
  $year = $_POST['year'];
  $category = $_POST['category'];
  // Skapar query för att updatera inmatad data i databasen
  $sql = 'UPDATE bio SET title=:title, director=:director, year=:year WHERE id=:id';
  $sqlcat = 'UPDATE typ SET category=:category WHERE id=:id';
  // Utför query
  $statement = $connection->prepare($sql);
  $statementcat = $connection->prepare($sqlcat);
  if ($statement->execute([':title' => $title, ':director' => $director, ':year' => $year, ':id' => $id])) {
    // Omdirigera till "index"-sidan om query utförs väl
    header("Location: index.php");
  }
  if ($statementcat->execute([':category' => $category, ':id' => $id])) {
      // Omdirigera till "index"-sidan om query utförs väl
    header("Location: index.php");
  }
}
 ?>
<!-- Skapar formulär sida för att updattera data -->
<!-- Inklusive header PHP-fil för FORM-sida -->
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <!-- Lägger till titeln på skapa formuläret --> 
      <h2>Update movie</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
      <?php endif; ?>
      <!-- Skapar formulär för att updatera data -->
      <form method="post">
          <!-- Skapar rubriksfältet i formuläret -->
        <div class="form-group">
          <label for="title">Title</label>
          <input value="<?= $film->title; ?>" type="text" name="title" id="title" class="form-control" placeholder="Title of movie" Required>
        </div>
        <!-- Skapar direktörsfältet i formuläret -->
        <div class="form-group">
          <label for="director">Director</label>
          <input type="text" value="<?= $film->director; ?>" name="director" id="director" class="form-control" placeholder="Name of movie's director" Required>
        </div>
         <!-- Skapar fältet år i formuläret -->
        <div class="form-group">
          <label for="year">Year</label>
          <input type="number" min="1900" max="2022" value="<?= $film->year; ?>" name="year" id="year" class="form-control" placeholder="Movie's released year" Required>
        </div>
        <!-- Skapar kategorifältet för att visa filmkategorin-->
        <div class="form-group">
          <label for="category">Category</label>
          <input type="text" value="<?= $filmcat->category; ?>" name="category" id="category" class="form-control">
        </div>
        <!-- Skapar kategorifältet med radioknapp i formuläret för att updatera kategori-->
        <div class="form-group">
        <label for="category">Choose a category</label><br>
        <input type="radio" name="category" value="Thriller" Required>Thriller<br>
            <input type="radio" name="category" value="Romantic" Required>Romantic<br>
            <input type="radio" name="category" value="Swedish" Required>Swedish<br>
            <input type="radio" name="category" value="Animated" Required>Animated<br>
            <input type="radio" name="category" value="Comedy" Required>Comedy<br>
            <input type="radio" name="category" value="Action" Required>Action<br>
            <input type="radio" name="category" value="Adventure" Required>Adventure<br>
            <input type="radio" name="category" value="Drama" Required>Drama<br>
        </div>
        <!-- Skapar blankettsändningsknapp i formuläret -->
        <div class="form-group">
          <button type="submit" name="update" class="btn btn-info">Update movie</button>
        </div>
      </form>
    </div>
  </div>
</div>