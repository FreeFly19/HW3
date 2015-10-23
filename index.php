<?php

require 'autoloader.php';

use src\Delivery;
use src\Order;
use src\Product;

$pizza = new Product();
$pizza->setName('Pizza');
$pizza->setPrice(29.5);

$beer = new Product();
$beer->setName('Beer');
$beer->setPrice(12);

$order->addProduct($pizza);
$order->addProduct($beer);
$order->addProduct(new Delivery());

array_map(function (Product $product) {
    echo $product->getName() . "<br>";
}, $order->getProducts());

echo 'Total price: ' . $order->getPrice();