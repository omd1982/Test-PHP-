<?php

//Имя - для чтения курс- можно менять
class Student {
    private $name;
    private $course;
    
    public function __construct($name){
        $this->name = $name;
        $this->course = 1;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function getCourse(){
        return $this->course;
    }
    
    // Перевод студента на новый курс:
    public function transferToNextCourse()
    {
        $this->course++;
    }
}


/*

//Имя - для чтения, возраст, и для чтения и для записи
class User
{
    private $name;
    private $age;
  
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function getAge(){
        return $this->age;
    }
    
    public function setAge($age){
        $this->age = $age;
    }
}

$user = new User('John', 25); // создаем объект с начальными данными

echo $user->getName().'<br />'; 

echo $user->getAge().'<br />'; 
echo $user->setAge(30).'<br />'; 
echo $user->getAge().'<br />'; 
*/

//Статические методы
/*
class Calc {

    public const PI = 3.14;
    private static $count = 0;
    public static function pi_2 ($a) {
        self :: $count++;
        return self :: PI * 2 + $a;
    }
    public static function getCounter () {
        return self :: $count;
    }
}

echo Calc :: pi_2(1).'<br />';
echo Calc :: pi_2(2).'<br />';
echo Calc :: pi_2(12.5).'<br />';
echo Calc :: getCounter().'<br />';
echo Calc :: PI;
*/

//Проверка корректности возраста
/*
class User_2
{
    public $name;
    public $age;

    public function setAge($age)
    {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }
    
    public function addAge($years)
    {
        $newAge = $this->age + $years; 
        
      
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge; 
        }
    }
    
    private function isAgeCorrect($age)
    {
        return $age >= 18 and $age <= 60;
    }
}

    $user = new User_2;
	
	$user->setAge(30); 
	echo $user->age.'<br />'; 
	
	$user->setAge(10); 
	echo $user->age.'<br />'; 
*/

    
/*
echo '--------------'.'<br />';
class Car {
    public $speed;
    public $color;
    public $volume;
}

$carTruck = new Car; 

$carTruck -> speed = 180;
$carTruck -> color = 'red';
$carTruck -> volume = 8.5;

echo $carTruck -> speed.'<br />';
echo $carTruck -> color.'<br />';
echo $carTruck -> volume.'<br />';

echo '--------------'.'<br />';

$carTruck_2 = new Car; 

$carTruck_2 -> speed = 300;
$carTruck_2 -> color = 'green';
$carTruck_2 -> volume = 15.5;

echo $carTruck_2 -> speed.'<br />';
echo $carTruck_2 -> color.'<br />';
echo $carTruck_2 -> volume.'<br />';

echo '--------------'.'<br />';

//Сумма скоростей и объемов
echo ($carTruck -> speed + $carTruck_2 -> speed).'<br />';
echo ($carTruck -> volume + $carTruck_2 -> volume).'<br />';

echo '--------------'.'<br />';

class User {
    public $name = 'Alex';
    public $age = 25;
    public function hello ($hi){
        return $hi;
    }
}

$userName = new User;
echo $userName -> hello('Hello').'<br />';
echo $userName -> age;

echo '--------------'.'<br />';

class Employee {
    public $name = 'Alex';
    public $age = 18;
    public $salary = 1500;

    public function getName() {
        return 'Меня зовут '.$this -> name.', мой возраст '.$this -> age.' моя зарплята '.$this -> salary;
    
    }
    public function checkAge() {
        if ($this->age >= 18) return 'Работнику больше 18 лет';
        else return 'Работнику меньше 18 лет';
    }
}

$emp = new Employee;
echo $emp -> getName();
echo '<br />';
$emp -> name = 'Elena';
$emp -> age = 19;
echo $emp -> getName().'<br />';
echo $emp -> checkAge();

echo '--------------'.'<br />';
*/

/*
//Статическая переменная

 function birth() {
    static $age = 0;
    $age = $age + 1;
    echo "Значение статической переменной: $age<br>";
  }
  // вызываем дважды функцию
  birth();
  birth();
*/
