<pre>
<?php

class Dog {
	public $weight;
	public $age;
	public $name;
	public $size;

	public function eat(){
		echo "animal eat 10kg food per day<br>";
	}
}

class Cat extends Dog {
	public $color;

public function eat(){
		echo "animal eat 5kg food per day<br>";

}
}
class Fish extends Dog {
	public $aquarium_size;

	public function eat(){
		echo "animal eat 2kg food per day<br>";
}
}


$dog = new Dog();
$cat = new Cat();
$fish = new Fish();

$dog->eat();
$cat->eat();
$fish->eat();