<?php
require_once 'Product.php';

$product = new Product("Laptop", 999.99);
$product->price = 899.99; // Update the price
echo "Product Name: " . $product->name . "\n";
echo "Product price: " . $product->price . "\n";
