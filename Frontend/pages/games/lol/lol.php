<?php
// Initialize the session
session_start();
//verificare daca nu exista user logat
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: ../../login-page/login.php");
  exit;
}
?>

<html lang="en">
  <head>
    <title>League Of Legends</title>
    <link rel="icon" href="../../../common/images/favicon.png" />
    <link rel="stylesheet" href="./lol.css" />
    <script src="lol.js"></script>
  </head>

  <body>
    <iframe
      src="../../../common/header/header.html"
      frameborder="0"
      class="header"
    ></iframe>

    <iframe
      width="560"
      height="315"
      src="https://www.youtube.com/embed/RXYnKlKtico"
      title="YouTube video player"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen
    ></iframe>
    <audio id="ping" src="../../../common/mp3/ping.mp3"></audio>
    <button class="gif" onclick="mamamia()">ping</button>

    <div class="listaC">
    <h1>League of Legends Champions</h1>
    <ul id="champion-list"></ul>
    </div>

    <button class="open-button" onclick="openForm()">Adauga Campion</button>

<div class="form-popup"  id="myForm">
  <form action="./action.php" class="form-container" method="GET"> 
    <!-- la post nu sunt adaugate in link date din formular -->
    <h2>Adauga campion nou</h2>

    <label for="nume"><b>Nume campion</b></label>
    <input type="text" placeholder="Enter nume campion favorit" name="nume" required>

    <label for="abilitate"><b>Abilitate Favorita</b></label>
    <input type="text" placeholder="Enter abilitate favorita" name="abilitate" required>

    <label for="descriere"><b>Descriere Abilitate</b></label>
    <input type="text" placeholder="Enter descriere abilitate" name="descriere" required>

    <button type="submit" class="btn">Adauga</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

  </body>
</html>