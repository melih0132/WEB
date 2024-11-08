<?php

$table = $_GET["table"] ?? null;
$data = [];

if ($table) {
    $class = ucfirst($table);
    if (class_exists($class)) {
        $data = $class::all();
    } else {
        echo "Table inconnue.";
    }
} else {
    echo "Paramètre 'table' manquant.";
}

// Gestion d'erreurs avancée et chargement par ID
/* $id = $_GET["id"] ?? null;

if ($table) {
    $class = ucfirst($table);
    if (class_exists($class)) {
        if ($id) {
            $data = $class::find($id);  // Assurez-vous d'ajouter une méthode `find` dans `Model`
        } else {
            $data = $class::all();
        }
    }
} */

?>