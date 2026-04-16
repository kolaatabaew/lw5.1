<?php
require 'vendor/autoload.php';

use App\MoscowPizzaStore;

$store = new MoscowPizzaStore();

echo "Заказ №1:\n";
$store->orderPizza('cheese');

echo "\nЗаказ №2:\n";
$store->orderPizza('pepperoni');
