<?php

class MyClass {}
$a = new MyClass();
$b = new MyClass();
var_dump($a, $b);

function test($class)
{
  return $class;
};
var_dump(new (test("MyClass")));
var_dump(new (test("MyClass")));
