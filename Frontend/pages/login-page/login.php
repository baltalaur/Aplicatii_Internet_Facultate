<?php
$conn = mysqli_connect("localhost", "root", "", "facultate");

if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$query = "SELECT * FROM useri WHERE (email='$email' AND password='$password')";
$nume = mysqli_query($conn, $query);
echo $nume;
// if () {
//     setcookie("isLoggedIn", true, time() + 3600, '/');
//     echo 'Ai fost conectat cu succes';
// } else {
//     echo 'Email sau parola gresite!';
// }
mysqli_close($conn);
