<?php
class Cart
{
  public array $data = [];

  public function add(array $product)
  {
    $this->data[] = $product;
    return $this;
  }
  public function totalPrice(): int
  {
    $total = 0;
    foreach ($this->data as $item) {
      $total += $item['price'];
    }
    return $total;
  }
}
