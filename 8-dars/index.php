<?php
error_reporting(E_ALL);
require_once 'A.php';
require_once 'B.php';

$a = new A(25, "John", 50000);
echo $a->greet();
echo "\n";
echo $a->age;
// echo $a->name;
var_dump($a->salary);
echo "\n";
echo "-----------------\n";
