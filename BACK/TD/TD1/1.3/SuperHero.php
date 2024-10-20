<?php

class SuperHero extends Human {
    private $identity;
    private $colors;

    public function __construct(string $name, string $genre, string $identity, array $colors) {
        parent::__construct($name, $genre);
        $this->identity = $identity;
        $this->colors = $colors;
    }

    public function __say($text){
        $text = strtoupper($text);
        return "{$this->identity}: {$text}";
    }

    public static function __createSuperHero($list){
        $superHeroes = [];
        foreach ($list as $info) {
            $superHeroes[] = new SuperHero(
                $info['name'], 
                $info['gender'], 
                $info['identity'], 
                $info['colors']);
        }
        return $superHeroes;
    }

    public static function __renderTable($superHeroes) {
        echo "<table>";
        echo "<tr><th>Name</th><th>Gender</th><th>Identity</th><th>Colors</th></tr>";
        foreach ($superHeroes as $hero) {
            echo "<tr>";
            echo "<td>" . $hero["name"] . "</td>";
            echo "<td>" . $hero["gender"] . "</td>";
            echo "<td>" . $hero["identity"] . "</td>";
            echo "<td>" . $hero["colors"] . "</td>";
            echo "</tr>";
        }
    }

    public function __toString() {
        return parent::__toString() . "SuperHero: {$this->identity}<br>Colors: " . implode(", ", $this->colors) . "<br>";
    }
}

?>