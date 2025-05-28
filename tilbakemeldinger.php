<?php
// Koble til databasen
$host = "localhost";
$user = "marius";
$pass = "Passord1!";
$db = "server";

$conn = new mysqli($host, $user, $pass, $db);

// Sjekk tilkobling
if ($conn->connect_error) {
    die("Tilkoblingsfeil: " . $conn->connect_error);
}

// Hent tilbakemeldinger
$sql = "SELECT merke, tilbakemelding FROM tilbakemelding";
$resultat = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tilbakemeldinger</title>
    <link rel="stylesheet" href="style.css">

    
</head>
<body>

<nav>
      <div class="navnav">
      <a href="adidas.php" tabindex="1" autofocus>Rate Adidas</a>
      <a href="welcome.php" tabindex="1">Hjem</a>

    </div>
</nav>

<h1>Tilbakemeldinger</h1>

<?php
if ($resultat->num_rows > 0) {
    while ($rad = $resultat->fetch_assoc()) {
        echo "<p><strong>" . $rad['merke'] . ":</strong> " . $rad['tilbakemelding'] . "</p>";
    }
} else {
    echo "<p>Ingen tilbakemeldinger funnet.</p>";
}

$conn->close();
?>

</body>
</html>
