<?php
// Initialize the session
session_start();
//verificare daca nu exista user logat
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: ../../login-page/login.php");
  exit;
}
?>


<!DOCTYPE html>
<html lang="en">


<head>
  <title>League Of Legends</title>
  <link rel="icon" href="../../../common/images/favicon.png" />
  <link rel="stylesheet" href="lol.css" />
  <!-- <script src="lol.js"></script> -->
</head>

<body>

  <iframe src="../../../common/header/header.html" frameborder="0" class="header"></iframe>

  <iframe width="560" height="315" src="https://www.youtube.com/embed/RXYnKlKtico" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  <audio id="ping" src="../../../common/mp3/ping.mp3"></audio>
  <button class="gif" onclick="mamamia()">ping</button>
  <div class="morgana"></div>
  <h1>League of Legends Champions</h1>

  <ul class="champion-list" id="champions"></ul>
</body>

</html>