<?php
namespace App\classes;

class HelloWorld{
    public $message;
    public $firstName;
    public $lastName;
    public $x;
    public $y;
    public function __construct($data){
        // $this->message = 'hello World';
        $this->message = $data;
        $this->x= 10;
        $this->y= 20;
    }
    
    public function index(){
        echo $this->message;
        echo $this->firstName ='Mizanur';
        echo $this->lastName ='Rahman'.'<br>';

        echo $this->x + $this->y .'<br>' , $this->x - $this->y .'<br>' , $this->x * $this->y .'<br>' . $this->x / $this->y .'<br>'; 
        // echo $this->x - $this->y .'<br>'; 
        // echo $this->x * $this->y .'<br>'; 
        // echo $this->x / $this->y .'<br>'; 
        echo $this->x % $this->y .'<br>'; 
        echo $this->x ** $this->y .'<br>'; 
       

    }

}

?>