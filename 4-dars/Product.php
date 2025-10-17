<?php

class Product
{
  public string $title = "Some Product";
  public int | float $price;

  public function sayHello(): string
  {
    return "Hello from " . __CLASS__;
  }
  public function getRealPrice(): int |float
  {
    return $this->price / 100;
  }
}
