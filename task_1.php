<?php

trait Can
{
    public function move()
    {
        echo "Движение автомобиля<br>";
    }

    public function fly()
    {
        echo "Полёт самолёта<br>";
    }


}

class Car
{

    use Can;
}

class Aircraft
{

    use Can;
}

$car = new Car();
$airplane = new Aircraft();
$car->move();
$airplane->fly();
