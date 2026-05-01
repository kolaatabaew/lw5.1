<?php
namespace App;
use PizzaLib\Pizza;

class MoscowPepperoniPizza extends Pizza {
    public function __construct() {
        $this->name = "Московская Пепперони";
        $this->sauce = "Томатный";
        $this->toppings = ["Колбаски", "Орегано"];
    }
}
