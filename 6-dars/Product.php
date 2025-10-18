<?php
class Product
{
  public string $name;
  public float $price;

  public function __construct(string $name, float $price)
  {
    $this->name = $name;
    $this->price = $price;
  }
  public function getRealPrice($currency = '$'): string
  {
    return "{$currency}" . $this->price / 100;
  }
}
