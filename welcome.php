<?php
session_start(); // Start sesjonen for å få tilgang til brukerinformasjon

// Sjekk om brukeren er logget inn
if (!isset($_SESSION['bruker_id'])) {
    header("Location: login.php"); // Hvis ikke logget inn, omdiriger til login-siden
    exit();
}
?>

<!DOCTYPE html>
<html lang="no">
<head>
    <link rel="stylesheet" href="nav.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Velkommen</title>
</head>
<body>
<!-- navigasjonsbaren min !-->
<nav>
    <div class="nav-venstre">
   <!--<a href="#">Hjem</a>!-->
    </div>

    
    <div class="nav-høyre">
      <a href="supreme.php" tabindex="1">Rate Supreme</a>
    </div>
</nav>

  
  <!-- Det brukeren ser på siden!-->
  <h1>Velkommen, <?php echo $_SESSION['brukernavn']; ?>!</h1>

  <p>Du er nå logget inn på siden, når du føler deg klar trykk på en av merkene oppe til høyre og begynn å rate!</p>

</body>

</html>
