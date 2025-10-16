<?php
require __DIR__ . "/Product.php";

$phone = new Product();
$phone->title = "Book1";
$phone->price = 100;

$book = new Product();
$book->title = "Book";
$book->price = 65.8;
var_dump($phone, $book);
