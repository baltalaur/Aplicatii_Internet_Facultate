// IAU lista camp din BD si !!!buton de adaugat 
<?php
$conn = mysqli_connect("localhost", "root", "", "facultate");

if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$name =  $_REQUEST['nume campion favorit'];
$ability = $_REQUEST['abilitate favorita'];
$ability_description = $_REQUEST['descriere abilitate'];

$sql = "INSERT INTO camps  VALUES ('$name','$ability','$ability_description')";

mysqli_query($conn, $sql);
mysqli_close($conn);
//obiect ca sa primesc datele !!!
//buton de submit care adauga in BD campurile