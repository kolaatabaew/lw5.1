<?php
namespace App;

use PizzaLib\PizzaStore;
use PizzaLib\Pizza;

class MoscowPizzaStore extends PizzaStore {
    protected function createPizza(string $type): Pizza {
        return match ($type) {
            'cheese' => new MoscowCheesePizza(),
            'pepperoni' => new MoscowPepperoniPizza(),
            'meat' => new MoscowMeatPizza(),
            default => throw new \Exception("Тип пиццы $type не найден"),
        };
    }
}
