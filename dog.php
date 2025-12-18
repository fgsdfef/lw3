<?php
require_once 'Animal.php';

class Dog extends Animal {
    private string $breed;

    public function __construct(string $name, int $age, string $species, string $breed) {
        parent::__construct($name, $age, $species);
        $this->breed = $breed;
    }

    public function makeSound() {
        echo "Гав\n";
    }
}
