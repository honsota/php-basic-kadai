<?php
// クラスを定義する
class Food {
    public $name;
    public $price;

    public function show_price(string $price){
        $this->price = $price;
    } 
}

// インスタンス化する
$fish = new Food();

$fish->show_price(1000);
print_r($fish);

// クラスを定義する
class Animal {
    public $name;
    public $height;
    public $weight;

    public function show_height(string $height){
        $this->height = $height;
}
}
// インスタンス化する
$dog = new Animal();
$dog->show_height(100);
print_r($dog);


?>