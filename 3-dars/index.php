<?php
require __DIR__ . "/Product.php";

$phone = new Product();
$phone->title = "Phone";
$phone->price = 200;

$book = new Product();
$book->title = "Book";
$book->price = 20.8;
var_dump($phone, $book);
