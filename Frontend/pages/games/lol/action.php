<?php
$conn = mysqli_connect("localhost", "root", "", "facultate");

if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$name =  $_REQUEST['nume'];
$ability = $_REQUEST['abilitate'];
$ability_description = $_REQUEST['descriere'];

$sql = "INSERT INTO camps  VALUES ('$name','$ability','$ability_description')";

mysqli_query($conn, $sql);
mysqli_close($conn);

header("location: lol.php");