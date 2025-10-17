
<?php

require __DIR__ . "/Product.php";

$book = new Product();
$book->title = "PHP Book";
$book->price = 2999;

$phone = new Product();
$phone->title = "iPhone 14 Pro";
$phone->price = 99999;
echo $book->getRealPrice() . "\n";
echo $phone->getRealPrice() . "\n";
