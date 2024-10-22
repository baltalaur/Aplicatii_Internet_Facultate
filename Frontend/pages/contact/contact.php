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
  <title>Contact</title>
  <link rel="icon" href="../../common/images/favicon.png" />
  <link rel="stylesheet" href="contact.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <iframe src="../../common/header/header.html" frameborder="0"></iframe>
  <div class="contact">
    <ul>
      <li>Numele meu este RAZVI</li>
      <li>Numar telefon: 0723232345</li>
      <li>Email: razvan.razvi@gamesnet.com</li>
      <li>
        <a href="https://www.google.com/maps/place/Faculty+of+Automatic+Control+and+Computer+Engineering/@47.1540632,27.5931725,18.25z/data=!4m6!3m5!1s0x40cafb9996b838b1:0xc8b2b5b97fb1b7d8!8m2!3d47.154082!4d27.5940514!16s%2Fg%2F121cgnf5">Adress: Facultatea de automatica si calculatoare IASI</a>
      </li>
      <img src="../../common/images/razvan.png" />
    </ul>
    <ul>
      <li>Numele meu este Laurentzu</li>
      <li>Numar telefon: 0723232345</li>
      <li>Email: laurentzu.laur@gamesnet.com</li>
      <li>
        <a href="https://www.google.com/maps/place/Faculty+of+Automatic+Control+and+Computer+Engineering/@47.1540632,27.5931725,18.25z/data=!4m6!3m5!1s0x40cafb9996b838b1:0xc8b2b5b97fb1b7d8!8m2!3d47.154082!4d27.5940514!16s%2Fg%2F121cgnf5">Adress: Facultatea de automatica si calculatoare IASI</a>
      </li>
      <img src="../../common/images/laur.png" />
    </ul>
    <div class="img-links">
      <a href="https://www.facebook.com/razvan.cretu.3/" class="fa fa-facebook" target="”_blank”"></a>
      <a href="https://www.instagram.com/25razvancretu25/" class="fa fa-instagram" target="”_blank”"></a>
    </div>
    <div class="img-links">
      <a href="https://www.facebook.com/baltalaurentiu.alexandru" class="fa fa-facebook" target="”_blank”"></a>
      <a href="https://www.instagram.com/balaur06/" class="fa fa-instagram" target="”_blank”"></a>
    </div>
  </div>
  <div class="container">
    <h2>Send us your suggestions for future improvements</h2>
    <form action="contact.php" method="post">
      <label for="fname" class="label">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name" />
      <label for="lname" class="label">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name" />

      <label for="email" class="label">Your Email Adress</label>
      <input type="text" id="email" name="email" placeholder="Your Email Adress" />

      <label for="subject" class="label">Subject</label>
      <textarea id="subject" name="subject" placeholder="Describe your suggestion" style="height: 200px"></textarea>
      <button class="send-form" onclick="submit()">Submit</button>
    </form>
  </div>
</body>

</html>