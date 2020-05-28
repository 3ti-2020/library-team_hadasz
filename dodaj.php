<?php
    $servername = "localhost";
    $username ="root";
    $password ="";
    $dbname ="library";


$conn = new mysqli($servername, $username, $password, $dbname);

$sql="INSERT INTO autorzy(id_autor, imie, nazwisko) VALUES (NULL, '".$_POST['imie']."', '".$_POST['nazwisko']."') ";

mysqli_query($conn, $sql);
$id_autor = $conn->insert_id;

$sql="INSERT INTO tytuly(id_tytul, tytul, isbn) VALUES (NULL, '".$_POST['tytul']."', '".$_POST['isbn']."') ";

mysqli_query($conn, $sql);
$id_tytul = $conn->insert_id;

$sql="INSERT INTO ksiazki( id_autor, id_tytul) VALUES ( '$id_autor', '$id_tytul') ";

mysqli_query($conn, $sql);
mysqli_close($conn);
header('Location: index.php');
?>