<?php
namespace App;

use PizzaLib\PizzaStore;
use PizzaLib\Pizza;

class MoscowPizzaStore extends PizzaStore {
    protected function createPizza(string $type): Pizza {
        if ($type === 'cheese') {
            return new class extends Pizza {
                public function __construct() {
                    $this->name = "Сырная Москва";
                    $this->sauce = "Сливочный";
                    $this->toppings[] = "Моцарелла";
                }
            };
        }
        
        // Для примера создаем Пепперони
        return new class extends Pizza {
            public function __construct() {
                $this->name = "Пепперони Столичная";
                $this->sauce = "Томатный острый";
                $this->toppings[] = "Колбаски";
            }
        };
    }
}
