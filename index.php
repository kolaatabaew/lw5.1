<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\MoscowPizzaStore;

try {
    $store = new MoscowPizzaStore();

    echo "--- Заказ №1 ---\n";
    $store->orderPizza('cheese');

    echo "\n--- Заказ №2 ---\n";
    $store->orderPizza('meat');

} catch (\Exception $e) {
    echo "Ошибка: " . $e->getMessage();
}
