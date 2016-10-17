<?php

class car{
    public $color; //property
    
    public function setColor($c)//รับค่า พารามิเตอร์ $c 
        {
        return 'Car is : '.$this->color=$c;
    }
    
    public function sayHello(){
        return 'say Hello';
    }
}
//เรียกใช้ class
 $newcar=new car;
 $test=$newcar->setColor('red');
 echo $test;
 echo $newcar->sayHello();
 echo '<hr>';
 echo $newcar->color='orange';