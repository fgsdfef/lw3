<?php
require_once 'Animal.php';

class Zoo {
    private array $animals = [];

    public function addAnimal(Animal $animal) {
        $this->animals[] = $animal;
    }

    public function listAnimals() {
        foreach ($this->animals as $animal) {
            echo "Имя: " . $animal->getName() . ", Вид: " . $animal->getSpecies() . ", Возраст: " . $animal->getAge() . "\n";
        }
    }

    public function animalSounds() {
        foreach ($this->animals as $animal) {
            $animal->makeSound();
        }
    }
}
