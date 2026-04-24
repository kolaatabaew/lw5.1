<?php
namespace App;

use PizzaLib\PizzaStore;
use PizzaLib\Pizza;
use PizzaLib\MoscowCheesePizza;
use PizzaLib\MoscowPepperoniPizza;

class MoscowPizzaStore extends PizzaStore {
    protected function createPizza(string $type): Pizza {
        if ($type === 'cheese') {
            return new MoscowCheesePizza();
        }
        return new MoscowPepperoniPizza();
    }
}
