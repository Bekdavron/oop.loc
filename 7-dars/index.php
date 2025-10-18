<?php
require_once "Product.php";
require_once "Cart.php";

$book = new Product("Learn PHP", 2999);
$phone = new Product("Smartphone", 59999);

$cart = new Cart();
$cart->add(['title' => $book->title, 'price' => $book->price]);
$cart->add(['title' => $phone->title, 'price' => $phone->price]);
echo "Total Price: " . $cart->totalPrice() / 100 . "$";
