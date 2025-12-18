<?php
require_once 'Animal.php';
require_once 'Dog.php';
require_once 'Cat.php';
require_once 'Zoo.php';

$dog1 = new Dog("Шарик", 5, "Собака", "Овчарка");
$dog2 = new Dog("Бобик", 3, "Собака", "Лабрадор");
$cat1 = new Cat("Мурка", 2, "Кошка", "Серый");
$cat2 = new Cat("Барсик", 4, "Кошка", "Черный");

$zoo = new Zoo();

$zoo->addAnimal($dog1);
$zoo->addAnimal($dog2);
$zoo->addAnimal($cat1);
$zoo->addAnimal($cat2);

echo "Информация о животных в зоопарке:\n";
$zoo->listAnimals();

echo "\nЗвуки животных:\n";
$zoo->animalSounds();
