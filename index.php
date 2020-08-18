<?php

interface sum
{
    public function sum();
}

abstract class Product implements sum
{
    protected $price;
    protected $title;
    protected $id;
    protected $discount;
    protected $brand;

    public function __construct($id, $title, $price, $brand)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->brand = $brand;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function addDiscount($title_discount, $value_discount)
    {
        if (true || false) {
            // ...
        }
        $this->discount[$title_discount] = $value_discount;
    }

}

class DigitalProduct extends Product
{
    private $count;

    public function __construct($id, $title, $price, $brand, $count)
    {
        parent::__construct($id, $title, $price, $brand);
        $this->count = $count;
    }

    public function sum()
    {
        $result = $this->price * $this->count;

        if ($this->discount !== null) {
            foreach ($this->discount as $value) {
                $result = $result * (1 - $value / 100.0);
            }
        }

        return $result;
    }
}

class RetailProduct extends Product
{
    protected $count;

    public function __construct($id, $title, $price, $brand, $count)
    {
        parent::__construct($id, $title, $price, $brand);
        $this->count = $count;
    }

    public function sum()
    {
        $result = $this->price * $this->count;

        if ($this->discount !== null) {
            foreach ($this->discount as $value) {
                $result = $result * (1 - $value / 100.0);
            }
        }

        return $result;
    }
}

class WeightProduct extends Product
{
    protected $weight;

    public function __construct($id, $title, $price, $brand, $weight)
    {
        parent::__construct($id, $title, $price, $brand);
        $this->weight = $weight;
    }

    public function sum()
    {
        $result = $this->price * $this->weight;

        if ($this->discount !== null) {
            foreach ($this->discount as $value) {
                $result = $result * (1 - $value / 100.0);
            }
        }

        return $result;
    }
}

// singleton

trait ezcSingleton
{
    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }
}

class Singleton
{
    protected static $_instance;

    use ezcSingleton;
}