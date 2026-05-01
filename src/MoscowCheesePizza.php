<?php
namespace App;
use PizzaLib\Pizza;

class MoscowCheesePizza extends Pizza {
    public function __construct() {
        $this->name = "Московская Сырная";
        $this->sauce = "Сливочный";
        $this->toppings = ["Моцарелла", "Пармезан"];
    }
}
