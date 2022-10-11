<?php
namespace App\classes;

class HelloWorld{
    public $message;
    public $x;
    public $y;
    public $z;
    public $array;
    public $array2;
    public $array3;
    public $student;

    public function __construct($data){
        // $this->message = 'hello World';
        $this->message = $data;
        $this->x= 30;
        $this->y= 20;
        $this->z= 10;
        $this->array= array(1,2,3,4,5,'Mizan');

        $this->array2=array(
            'name'=>'Mizan',
            'Age'=>22,
            'Address'=>'Shyamoli',
        );
       $this->array3=[
        ['a'=>'10'],
        ['b'=>20],
        ['c'=>'mizan'],
       ];
       

       $this->student=[
       [ 'teacher-name' => 'Rezaul',
        'father-name' => 'F-Name',
        'mother-name' => 'M-Name',
        'phone-no' =>[
            'gp'=> '01755463308',
            'bl'=> '01955463308',
            'Robi'=> '01855463308',
        ],
        'email' => 'rezaul@gmail.com',
        'gender' => 'Male',
        'age' => '24',
       ],
       [ 'teacher-name' => 'RAF',
        'father-name' => 'F-Name',
        'mother-name' => 'M-Name',
        'phone-no' => '01755463308',
        'email' => 'rezaul@gmail.com',
        'gender' => 'Male',
        'age' => '24',
    ],
       
       ];
    }
    
    public function index(){
        echo $this->message;
        echo '<br>';
        echo '<br>';
       
        for ($this->x ; $this-> x <=100; $this->x++){
            echo $this->x;
        }

        echo '<br>';
        echo '<br>';

        $this->y;
        while($this->y<50){
            echo $this->y .'';                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
            $this->y++;
        }

        echo '<br>';
        echo '<br>';

        do{
            echo $this->z .'';
            $this->z++;
        }while($this->x<40);

        echo '<br>';
        echo '<br>';

        echo '<pre>';
        print_r($this->array);
        var_dump ($this->array);

        print_r($this->array2);
        var_dump ($this->array2);

        echo '<br>';
        echo '<br>';

        print_r($this->array3);
        var_dump ($this->array3);

        echo '<br>';
        echo '<br>';
        
        foreach($this->array2 as $value){
            echo $value . '<br>';
        }
        echo '<br>';
        echo '<br>';

        foreach ($this->array2 as $key=>$value){
            echo $key . '=>' . $value . '<br>';
        }
        
        print_r( $this->student);

        foreach ($this->student as $mainValue){
            foreach ($mainValue as $key=> $value){
                if(is_array($value)){
                    foreach ($value as $key=> $item){
                        echo $key . '=>'.' ' . $item . '<br>';
                    }
                }else{
                    echo $key . '=>'.' ' . $value . '<br>';
                }

            }
            echo '<br>';
        }
    }

}

?>