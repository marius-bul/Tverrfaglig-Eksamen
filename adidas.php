<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

    // Hent data fra skjemaet
    $merke = $_POST['merke'];
    $tilbakemelding = $_POST['tilbakemelding'];
    $stjerner = $_POST['stjerner'];

    // Sett inn bruker i databasen
    $sql = "INSERT INTO tilbakemelding (merke, tilbakemelding, stjerner) VALUES ('$merke', '$tilbakemelding', '$stjerner')";
    

    
    if ($conn->query($sql) === TRUE) {
        echo "Svar sendt!";
    } else {
        echo "Svaret ble ikke registert " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Adidas</title>
</head>


<body>

<nav>
    <div class="navnav">
    <!--<a href="#">Hjem</a>!-->

      <a href="welcome.php" tabindex="1">Hjem</a>
    </div>
</nav>

<h1>Adidas Reklamer</h1>
<p>For å sende inn tilbakemeldinger må du skrive inn din melding inne boksen der det står "din tilbakebelding her"</p>

<center> 
    <div class="AdidasBilder">
<div>
<img src="https://pkmannes.wordpress.com/wp-content/uploads/2016/10/adidas-reklame.jpg" height="250px" width="300px" alt="Bilde av et normalt adidas logo"><br>
<p>Bilde 1</p>
</div> 

<div>
<img src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/7f6b0941691055.58f14ebd0ded8.jpg" height="250px" width="300px" alt="Adidas logo med annerledes form"><br>
<p>Bilde 2</p>
</div> 

<div>
<img src="https://image.euroman.dk/4769070.webp?imageId=4769070&width=1412&height=848&format=webp" height="250px" width="300px" alt="Adidas logo fra 2005">
<p>Bilde 3</p>
</div> 

    </div> 
</center>


<center>
    <p>tilbakemelding, stjerne rating</p>
    <form action="adidas.php" method="POST">
        <input type="hidden" name="merke" value="Adidas 1">
        <input type="text" name="tilbakemelding" placeholder="tilbakemelding for bilde 1" required tabindex="4">
        <input type="number" name="stjerner" placeholder="stjerner (1-5)" min="1" max="5" required tabindex="5">
        <button type="submit" tabindex="6">Send inn svar</button>
    </form>

    <form action="adidas.php" method="POST">
        <input type="hidden" name="merke" value="Adidas 2">
        <input type="text" name="tilbakemelding" placeholder="tilbakemelding for bilde 2" required tabindex="7">
        <input type="number" name="stjerner" placeholder="stjerner (1-5)" min="1" max="5" required tabindex="8">
        <button type="submit" tabindex="9">Send inn svar</button>
    </form>

    <form action="adidas.php" method="POST">
        <input type="hidden" name="merke" value="Adidas 3">
        <input type="text" name="tilbakemelding" placeholder="tilbakemelding for bilde 3" required tabindex="10">
        <input type="number" name="stjerner" placeholder="stjerner (1-5)" min="1" max="5" required tabindex="11">
        <button type="submit" tabindex="12">Send inn svar</button>
    </form>
</center>

<footer>
  <p>Kontakt: marius@gmail.com</a></p>
  <p>Lisens: MIT License</p>
</footer>

</body>
</html>
