<?php
require_once 'Cart.php';
$book = new Cart();
$book->add(['name' => 'PHP', 'price' => 2000])
  ->add(['name' => 'JS', 'price' => 1500])
  ->add(['name' => 'HTML', 'price' => 1000]);
var_dump($book->data) . '<br>';

$phone = new Cart();
echo $phone->add(['name' => 'iPhone', 'price' => 120000])->totalPrice() . PHP_EOL;
echo $phone->add(['name' => 'Samsung', 'price' => 80000])->totalPrice() . PHP_EOL;
echo $phone->add(['name' => 'Xiaomi', 'price' => 60000])->totalPrice() . PHP_EOL;
var_dump($phone->data);
$phoneTotal = $phone->totalPrice();
echo '<br>Phone total price: ' . $phoneTotal;
