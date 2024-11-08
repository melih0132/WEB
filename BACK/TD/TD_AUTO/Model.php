<?php

class Model {
    public static function all() {
        $table = strtolower(get_called_class());
        $stmt = DB::getInstance()->query("SELECT * FROM $table");
        return $stmt->fetchAll(PDO::FETCH_CLASS, get_called_class());
    }
}

?>