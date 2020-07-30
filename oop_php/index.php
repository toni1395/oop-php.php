<?php

require("animal.php");
require("frog.php");
require("ape.php");

$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo $sheep->legs; // 2
echo $sheep->cold_blooded; // false

echo "<br>";
$kodok = new frog("buduk");
$kodok -> jump ();
echo "<br>";
echo $kodok -> name;
echo "<br>";
$sungokong = new ape("kera sakti");
$sungokong -> yell();

echo "halo";

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

?>