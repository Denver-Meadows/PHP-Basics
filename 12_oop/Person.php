<?php

class Person {
  // with PHP 7.4 we can specify the type each variable
  // there are also protected variables.  -- need more studying to refresh
    public string $name;
    public int $age;
    // by adding a ?, it allows the variable to accept null values
    private ?float $salary;

    // static variable and functions belong to the class itself, not the instances that are created.
    static int $counter = 0;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
        // self is needed to access the static variable.  So now whenever we created an instance, the counter will increase.
        self::$counter++;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    // create the public function so we can get access to the counter
    public static function getCounter()
    {
        return self::$counter;
    }
}