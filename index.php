<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body class="container">


<div class="buttons">

<H1> dodaj książkę </h1> 
</br>



       <form class="form" action="dodaj.php" method="POST">
        Tytul:
       <input type="text" name="tytul"/>
       <br/>
       imie autora:
       <input type="text" name="imie"/>
       <br/>
       nazwisko autora:
       <input type="text" name="nazwisko"/>
       <br/>
       kod isbn:
       <input type="text" name="isbn"/>
       <br/>
       <input type="submit" value="dodaj"/>
       </form>
       <br/><br/>

<h1> usuń ksiazke </h1>

<form class="form" action="usun_ksiazke.php" method="POST">
        podaj id ksiazki:
       <input type="text" name="id"/>
       <br/>
       <input type="submit" value="usun"/>
       </form>
       <br/><br/>



<h1> usuń tytul </h1>

<form class="form" action="usun_tytul.php" method="POST">
        podaj id tytulu:
       <input type="text" name="id"/>
       <br/>
       <input type="submit" value="usun"/>
       </form>
       <br/><br/>




<h1> usuń autora </h1>

<form class="form" action="usun_autora.php" method="POST">
        podaj id autora:
       <input type="text" name="id"/>
       <br/>
       <input type="submit" value="usun"/>
       </form>
       <br/><br/>





</form>

    

</div>

<div class="tab">


<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = " SELECT * from tytuly";

$result = $conn->query($sql);


echo("</h1>");
echo("<table class='table'");
echo("<tr>
<th>id_tytul</th>
<th>tytul</th>
<th>isbn</th>

</tr>");

while($wiersz = $result->fetch_assoc()){
    echo("<tr class='col'>");
    echo("<td class='td'>".$wiersz['id_tytul']."</td>");
    echo("<td class='td'>".$wiersz['tytul']."</td>");
    echo("<td class='td'>".$wiersz['isbn']."</td>");
    
    
   
    echo("</tr>");

};

echo("</table>");











$sql = " SELECT imie,nazwisko,tytul,id_ksiazki from autorzy,tytuly,ksiazki where autorzy.id_autor=ksiazki.id_autor and tytuly.id_tytul=ksiazki.id_tytul;";

$result = $conn->query($sql);


echo("</h1>");
echo("<table class='table'");
echo("<tr>
<th>id_ksiazki</th>
<th>tytul</th>
<th>imie</th>
<th>nazwisko</th>
</tr>");

while($wiersz = $result->fetch_assoc()){
    echo("<tr class='col'>");
    echo("<td class='td'>".$wiersz['id_ksiazki']."</td>");
    echo("<td class='td'>".$wiersz['tytul']."</td>");
    echo("<td class='td'>".$wiersz['imie']."</td>");
    echo("<td class='td'>".$wiersz['nazwisko']."</td>");
   
    echo("</tr>");

};

echo("</table>");















$sql = " SELECT * from autorzy";

$result = $conn->query($sql);


echo("</h1>");
echo("<table class='table'");
echo("<tr>
<th>id_autor</th>
<th>imie</th>
<th>nazwisko</th>
</tr>");

while($wiersz = $result->fetch_assoc()){
    echo("<tr class='col'>");
    echo("<td class='td'>".$wiersz['id_autor']."</td>");
    echo("<td class='td'>".$wiersz['imie']."</td>");
    echo("<td class='td'>".$wiersz['nazwisko']."</td>");
 
   
    echo("</tr>");

};

echo("</table>");


?>


</div>

</body>
</html>
