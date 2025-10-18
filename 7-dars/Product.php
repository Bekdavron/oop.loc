<?php
class Product
{
  public function __construct(
    public string $title,
    public float|int $price
  ) {
    echo "Product created: <br>";
  }
}
