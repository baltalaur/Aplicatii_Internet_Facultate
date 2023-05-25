<?php
$conn = mysqli_connect("localhost", "root", "", "facultate");

if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$first_name =  $_REQUEST['firstname'];
$last_name = $_REQUEST['lastname'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$sql = "INSERT INTO contact  VALUES ('$first_name','$last_name','$email','$subject')";

mysqli_query($conn, $sql);
mysqli_close($conn);
header("location: contact.php");
