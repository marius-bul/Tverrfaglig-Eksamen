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
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Velkommen</title>
</head>

<body>
<!-- navigasjonsbaren min !-->
<nav>
    <div class="navnav">
    <!--<a href="#">Hjem</a>!-->

      <a href="supreme.php" tabindex="1">Rate Adidas</a>
    </div>
</nav>

  
  <!-- Det brukeren ser på siden!-->
  <h1>Velkommen, <?php echo $_SESSION['brukernavn']; ?>!</h1>

  <p>Du er nå logget inn på siden, når du føler deg klar trykk på en av merkene oppe til høyre og begynne å rate!</p>

<!--Bilder på siden for å fylle tom plass!-->

<center> 
<table>
    <tr>
         <td><img src="https://logotyp.us/file/adidas.svg" height="300px" width="300px" alt="Bilde av et normalt adidas logo"></td>
         <td><img src="https://cdn.freebiesupply.com/logos/thumbs/2x/adidas-4-logo.png" height="250px" width="300px" alt="Adidas logo med annerledes form"></td>
         <td><img src="https://bcassetcdn.com/public/blog/wp-content/uploads/2023/02/17202944/Adidas-Logo-2002.jpg" height="250px" width="300px" alt="Adidas logo fra 2005"></td>

    </tr>
</table>
</center>

</body>

</html>
