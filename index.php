<?php   

$cena = 0;
$kategorija = 0;
$porez = 0;
$racun = 0;
//$cena=$_GET[floatval("cenaProizvpda")];
//$kategorija=$_GET[floatval("kategorija")];
//$porez=$_GET[floatval("porez")];


if(isset($_GET["cenaProizvpda"])){
    $cena = floatval($_GET["cenaProizvpda"]);
} else {
    $cena = 0;
}
if(isset($_GET["kategorija"])){
    $kategorija=floatval($_GET["kategorija"]);
}else {
    $kategorija=0;
}

if(isset($_GET["porez"])){
    $porez=floatval($_GET["porez"]);
}else{
    $porez=0;
}

$racun=$cena+$kategorija*$porez;

if($kategorija=="Hrana"){
    $cena+=150;
}elseif($kategorija=="Kompijuterski proizvodi"){
    $cena+=350;
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form method="get">
    <input type="text" name="cenaProizvpda"><br>
    <select name="kategorija"><br>
        <option value="150" >Hrana</option>
        <option value="350" >Kompijuterski proizvodi</option>
    </select><br>
    <label for="porez">Izracunajte porez</label>
    <input type="checkbox" name="porez" id="porez">
    <button type="submit">Potvrditi kupovinu </button>   
</form>


<h1><?= $racun;?></h1>
    
</body>
</html>