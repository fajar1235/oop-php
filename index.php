<?php

    require_once 'animal.php';
    require_once 'frog.php';
    require_once 'ape.php';
    
$sheep = new Animal("shaun");

$kodok = new Frog("buduk");
$kodok -> set_legs(4);
$kodok -> set_cold('true');

$sungokong = new Ape("kera sakti");

//Domba
echo 'nama nya adalah '.$sheep-> get_name(); // "shaun"
echo "<br>" .$sheep->legs; // 2
echo "<br>" .$sheep->cold_blooded; // false

// Kodok
echo "<br><br>" .'nama nya adalah '.$kodok -> get_name();
echo "<br>" .'jumlah kaki kera berjumlah = ' .$kodok -> get_legs();
echo "<br>" .'kodok berdarah dingin = ' .$kodok -> get_cold();
$kodok->jump() ; // "hop hop"
echo "<br>";

//kera
echo "<br>".'nama nya adalah ' .$sungokong -> get_name();
echo "<br>".'jumlah kaki kera berjumlah = ' .$sungokong -> get_legs();
echo "<br>".'apakah kera berdarah dingin ? ' .$sungokong -> cold_blooded;
$sungokong->yell();

// $sungokong->yell() // "Auooo"



?>