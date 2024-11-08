<?php

include_once "db.php";
include_once "Vehicle.php";

$v = Vehicle::load(1); // Charger un véhicule avec l'ID 1
echo "Prix initial : " . $v->price . "<br>";

$v->price = 100000; // Modifier le prix et mettre à jour dans la base de données
echo "Prix après modification : " . $v->price . "<br>";

$v = Vehicle::load(1); // Recharger pour vérifier la mise à jour
echo "Prix après rechargement : " . $v->price;

?>