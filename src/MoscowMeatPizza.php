<?php
namespace App;
use PizzaLib\Pizza;

class MoscowMeatPizza extends Pizza {
    public function __construct() {
        $this->name = "Московская Мясная";
        $this->sauce = "Барбекю";
        $this->toppings = ["Бекон", "Ветчина"];
    }
}
