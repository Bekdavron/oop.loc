<?php
class A
{
  public int $age;
  protected string $name;
  private  float $salary;
  public function __construct($age, $name, $salary)
  {
    $this->age = $age;
    $this->name = $name;
    $this->salary = $salary;
  }

  public function greet()
  {
    return "Hello from class " . __CLASS__;
  }
}
