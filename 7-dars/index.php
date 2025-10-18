<?php
error_reporting(-1);
require_once __DIR__ . '/Cart.php';

$bookCartObj = new Cart("Learn PHP", 15000);
$book = $bookCartObj->getRealPrice($currency = "UZS ");
$notebookCartObj = new Cart("MacBook Pro", 250000);
$notebook = $notebookCartObj->getRealPrice();

var_dump($book, $notebook);
