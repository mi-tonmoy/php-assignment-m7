<?php

class Vehicle {
    protected $brand;
   
    public function __construct($brand) {
        $this->brand = $brand;
    }
}

class Car extends Vehicle {
    private $model;

    public function __construct($brand, $model) {
        parent::__construct($brand);
        $this->model = $model;
    }

    public function displayDetails() {
        echo "This is a " . $this->brand . " " . $this->model . ".";
    }
}

$car = new Car("Toyota", "Corolla");
$car->displayDetails();

?>
