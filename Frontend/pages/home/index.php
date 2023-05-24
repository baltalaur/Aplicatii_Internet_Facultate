<?php
// Initialize the session
session_start();
//verificare daca nu exista user logat
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: ../login-page/login.php");
  exit;
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="icon" href="../../common/images/favicon.png" />
  <link rel="stylesheet" href="./styles.css" />
  <script src="./index.js"></script>
</head>

<body>
  <iframe src="../../common/header/header.html" frameborder="0" class="header"></iframe>
  <div class="background"></div>
  <h1>Welcome to the Gaming Website!</h1>

  <div class="description-container">
    <div class="description">
      <h2>About Assassin's Creed</h2>
      <p id="assassins-creed" style="font-size: 20px;"></p>
      <a href="../games/ac/ac.php" style="font-size: 20px;">Go to the Assassin's Creed page for more details</a>
    </div>

    <div class="description">
      <h2>About League of Legends</h2>
      <p id="league-of-legends" style="font-size: 20px;"></p>
      <a href="../games/lol/lol.php" style="font-size: 20px;">Go to the League of Legends page for more details</a>
    </div>
  </div>
  <div class="footer"></div>
</body>

</html>