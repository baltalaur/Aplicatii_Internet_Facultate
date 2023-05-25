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
<html>

<head>
  <title>Assassin's Creed</title>
  <link rel="icon" href="../../../common/images/favicon.png" />
  <link rel="stylesheet" href="ac.css" />
  <script src="./ac.js"></script>
</head>

<body>
  <iframe src="../../../common/header/header.html" frameborder="0" class="header"></iframe>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/x55lAlFtXmw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  <div class="lista-jocuri" style=" background-color: rgba(151, 141, 146, 0.7);">
    <h1 style="text-align: center;font-weight:600">Assassin's Creed Games</h1>
    <ul id="game-list" style="font-size: 20px; text-align: center;font-weight:600"></ul>
  </div>
</body>

</html>