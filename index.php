<?php

class Product
{
    protected $price;
    protected $title;
    protected $id;
    protected $count;
    protected $discount;
    protected $brand;

    public function __construct($id, $title, $price, $brand, $count, $discount)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->count = $count;
        $this->discount = $discount;
        $this->brand = $brand;
    }

    public function getCount()
    {
        return $this->count;
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

    public function addToCart()
    {

    }

    public function delFromCart()
    {

    }
}

class Shoes extends Product
{
    protected $size;
    protected $color;
    protected $material;
    protected $season;

    public function __construct($id, $title, $price, $brand, $count, $discount, $color, $material, $season, $size)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->count = $count;
        $this->discount = $discount;
        $this->brand = $brand;

        $this->size = $size;
        $this->color = $color;
        $this->material = $material;
        $this->season = $season;
    }
}

class Pants extends Product
{
    protected $color;
    protected $material;
    protected $length;
    protected $waist;

    public function __construct($id, $title, $price, $brand, $count, $discount, $color, $material, $waist, $length)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->count = $count;
        $this->discount = $discount;
        $this->brand = $brand;

        $this->waist = $waist;
        $this->color = $color;
        $this->material = $material;
        $this->length = $length;
    }
}

class A1 {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A1();
$a2 = new A1();
$a1->foo(); // 1
$a2->foo(); // 2
$a1->foo(); // 3
$a2->foo(); // 4

// Сначала объявиться переменная $x при первом вызове функции. Затем инкриментируется и выведется на экран.
// При следующих вызовах строчка static $x = 0; будет игнорироваться.
// Статические переменные принадлежат именно классу, а не экземпляру класса.
// Поэтому при изменении этой переменной с помощью экзмепляра класса, её значение поменяется внутри класса.

echo "<br>";

class A2
{
    public function foo()
    {
        static $x = 0;
        echo ++$x;
    }
}

class B2 extends A2
{
}

$a1 = new A2();
$b1 = new B2();
$a1->foo(); // 1
$b1->foo(); // 1
$a1->foo(); // 2
$b1->foo(); // 2

// Хотя класс B2 и наследуется от класса A2, это уже другой класс.
// Поэтому статические переменные будут не зависимы друг от друга.