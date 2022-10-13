<?php
// inkludera databasfil för att ansluta till databasen
require 'db.php';
$message = '';
// Skapa funktion för att infoga data i databastabellen
if (isset ($_POST['create'])) {
 // Skapa variabler för att infoga data i databastabellen
  $title = $_POST['title'];
  $director = $_POST['director'];
  $year = $_POST['year'];
  $category = $_POST['category'];
  // Skapar query för att infoga inmatad data i databasen
  $sql = 'INSERT INTO bio(title, director, year) VALUES(:title, :director, :year)';
  $sqlcat = 'INSERT INTO typ(category) VALUES(:category)';
  $statement = $connection->prepare($sql);
  $statementcat = $connection->prepare($sqlcat);
  // // Skapar funktion för att infoga inmatad data i databasen
  if ($statement->execute([':title' => $title, ':director' => $director, ':year' => $year])) {
    $message = 'data inserted successfully';
  }
  if ($statementcat->execute([':category' => $category])) {
    $message = 'data inserted successfully';
  }
}
 ?>
<!-- Skapar formulär sida för att infoga data -->
<!-- Inklusive header PHP-fil för FORM-sida -->
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
     <!-- Lägger till titeln på skapa formuläret -->   
      <h2>Add Movie</h2>
    </div>
    <div class="card-body">
    <!-- Skapar villkor för utskrift av meddelande för status för infogning av data -->  
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
        <!-- Skriver ut meddelande --> 
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <!-- Skapar formulär för att infoga data -->
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
      <!-- Skapar rubriksfältet i formuläret -->
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" id="title" class="form-control" placeholder="Title of movie" Required>
        </div>
        <!-- Skapar direktörsfältet i formuläret -->
        <div class="form-group">
          <label for="director">Director</label>
          <input type="text" name="director" id="director" class="form-control" placeholder="Name of movie's director" Required >
        </div>
        <!-- Skapar fältet år i formuläret -->
        <div class="form-group">
          <label for="year">Year</label>
          <input type="number" min="1900" max="2022" name="year" id="year" class="form-control" placeholder="Movie's released year" Required>
        </div>
        <!-- Skapar kategorifältet med radioknapp i formuläret -->
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
          <button type="submit" name="create" class="btn btn-info">Add a movie</button>
        </div>
      </form>
    </div>
  </div>
</div>