<?php
    $servername = "localhost";
    $username ="root";
    $password ="";
    $dbname ="library";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql="DELETE FROM autorzy where id_autor=".$_POST['id'].";";

    echo($sql);
    $conn->query($sql);
    header("location: index.php");
    ?>