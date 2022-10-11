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
        $this->x= 30;
        $this->y= 20;

        $this->z = 10;
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
       
        echo $this->z++ .'<br>';  // ans = 10
        echo ++$this->z .'<br>';  // ans = 12
        echo $this->z-- .'<br>';  // ans = 12
        echo --$this->z .'<br>';  // ans = 10
        echo -$this->z .'<br>'; // ans = -10
        echo '<br>';
        echo '<br>';

        echo ($this->z < $this->y ) .'<br>'; 
        echo ($this->z > $this->y ) .'<br>'; 
        echo ($this->z >= $this->y) .'<br>'; 
        echo ($this->z <= $this->y) .'<br>'; 
        echo ($this->z == $this->y) .'<br>'; 
        echo ($this->z === $this->y).'<br>'; 

        echo ($this->z != $this->y) .'<br>'; 
        echo ($this->z !== $this->y).'<br>'; 
        echo '<br>';
        echo '<br>';

        echo ($this->z > $this->y ) && ($this->z == $this->x ); 
        echo '<br>';

        echo ($this->z > $this->y ) && ($this->z > $this->x ); 
        echo '<br>';

        echo ($this->z < $this->y ) && ($this->z == $this->x ); 
        echo '<br>';

        echo ($this->z < $this->y ) && ($this->z < $this->x ); 
        echo '<br>';
        echo '<br>';

        echo ($this->z > $this->y ) || ($this->z == $this->x ); 
        echo '<br>';

        echo ($this->z > $this->y ) || ($this->z > $this->x ); 
        echo '<br>';

        echo ($this->z < $this->y ) || ($this->z == $this->x ); 
        echo '<br>';

        echo ($this->z < $this->y ) || ($this->z < $this->x ); 
        echo '<br>';
        echo '<br>';

        if($this->z > $this->y){
            echo 'jodi khuda lage tahole vat khao';
        }elseif($this->z < $this->x){
            echo 'vat na khaile ,just pani khao';
        }else{
            echo 'khuda na lagle kicui khaio na';
        }
        echo '<br>';
        echo '<br>';

        switch($this->y){
            case 10: echo 'hello bro y 10';
            break;
            case 30: echo 'hello bro y 30';
            break;
            case 20: 
                // if your Bkash card pance and Shopping min amount 5k then 10% discount
                if($this->y==20 && $this->x==300){   
                    echo '10% Discount (your shopping condition is true)';
                    // if your shopping min amount 5k but not pance Bkash card
                }elseif($this->z==100 || $this->x==50){
                    echo 'just shopping amount 5k then discount 5%';
                }else{
                    echo 'Your are not Selected for discount';
                }
               
            break;
            case 40: echo 'hello bro y 40';
            break;
            default: echo 'Not Found';
            break;
        }
    }

}

?>