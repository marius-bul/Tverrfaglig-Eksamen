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
      <a href="adidas.php" tabindex="1" autofocus>Rate Adidas</a>
      <a href="tilbakemeldinger.php" tabindex="1">Se tilbakemeldinger</a>

    </div>
</nav>

  
  <!-- Det brukeren ser på siden!-->
  <h1>Velkommen, <?php echo $_SESSION['brukernavn']; ?>!</h1>

  <p>Du er nå logget inn på siden, når du føler deg klar trykk på en av merkene oppe til høyre og begynn meg tilbakemeldinger!</p>

<!--Bilder på siden for å fylle tom plass!-->

<center> 
<table>
    <tr>
         <td><img src="https://logotyp.us/file/adidas.svg" height="300px" width="300px" alt="Bilde av et normalt adidas logo"></td>
         <td><img src="https://cdn.freebiesupply.com/logos/thumbs/2x/adidas-4-logo.png" height="250px" width="300px" alt="Adidas logo med annerledes form"></td>
         <td><img src="https://logo.com/image-cdn/images/kts928pd/production/30f9152b6e5dc09009c06f502fe1c02abbffc0bf-1600x900.png?w=1920&q=72&fm=webp" height="250px" width="300px" alt="Adidas logo fra 2005"></td>

    </tr>
</table>
</center>

<button class="button"><a href="index.html"tabindex="2" >Logg ut</a></button>


</body>

<footer>
  <p>Kontakt: marius@gmail.com</a></p>
  <p>Lisens: MIT License</p>
</footer>


</html>

