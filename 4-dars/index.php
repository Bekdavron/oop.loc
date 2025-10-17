
<?php

require __DIR__ . "/Product.php";
$product = new Product();
$product->price = 1500;
$product->title = "Iphone 14 Pro";
// var_dump($product);

// echo $product->sayHello();
echo $product->getRealPrice();
