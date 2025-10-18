<?php
require_once __DIR__ . '/Cart.php';

class Cart
{

  public function __construct(
    public string $title,
    public float|int $price
  ) {
    echo "Product created: <br>";
  }

  public function getRealPrice($currency = "$"): string
  {
    return "{$currency}" . $this->price / 100;
  }
}
