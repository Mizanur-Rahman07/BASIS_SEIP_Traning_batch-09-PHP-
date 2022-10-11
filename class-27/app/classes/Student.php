<?php
namespace App\classes;

class Student{
    public $student = [];
    public function __construct(){
        $this->student =[
            0=>[
                'id'=>1,
                'name'=> 'Mizan',
                'email'=> 'mizan@gmail.com',
                'phone'=> 01755463304,
            ],
            1=>[
                'id'=>2,
                'name'=> 'sunmun',
                'email'=> 'sunmun@gmail.com',
                'phone'=> 01755463304,
            ],
            2=>[
                'id'=>3,
                'name'=> 'train',
                'email'=> 'train@gmail.com',
                'phone'=> 01755463304,
            ],
            3=>[
                'id'=>4,
                'name'=> 'jaojao',
                'email'=> 'jaojao@gmail.com',
                'phone'=> 01755463304,
            ],

            ];
    }

    public function allStudent(){
       return $this->student;
    }
}