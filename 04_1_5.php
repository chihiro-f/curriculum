<?php
class Animal{
    # public $cry = 'bowbow!';
    public $cry;
    public function bow(){
        # echo 'bowbow!'.PHP_EOL;
        echo $this->cry . PHP_EOL;
    }
}

class Dog extends Animal{
    public $cry='bowbow!';
}

class Cat extends Animal{
    public $cry='meowmeow!';
}

$dog = new Dog();
$cat = new Cat();

# $animal->bow();
$dog->bow();
$cat->bow();

?>