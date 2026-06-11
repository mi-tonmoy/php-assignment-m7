<?php
class Employee {
  
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function updateSalary($amount) {
        $this->salary += $amount;
    }

    public function getDetails() {
        echo "Name: " . $this->name . ", Salary: " . $this->salary;
    }
}

$employee = new Employee("Alice", 5000);
$employee->updateSalary(1000);
$employee->getDetails();

?>
