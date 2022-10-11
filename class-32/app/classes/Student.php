<?php
namespace App\classes;
use App\classes\Database;
use App\classes\allInfo;

class Student{
    public $stu_name, $roll, $phone, $gmail, $dept, $stu_address, $sql, $database;

    public function __construct($POST){
        $this->stu_name = $POST['stu_name'];
        $this->roll = $POST['roll'];
        $this->phone = $POST['phone'];
        $this->gmail = $POST['gmail'];
        $this->dept = $POST['dept'];
        $this->stu_address = $POST['stu_address'];
    }

    public function newStudent(){
		$this->sql = "INSERT INTO friend(stu_name, roll, phone, gmail, dept, stu_address ) VALUES('$this->stu_name','$this->roll','$this->phone','$this->gmail','$this->dept','$this->stu_address')";

        $this->database = new Database();
        mysqli_query($this->database->dbConnect(),$this->sql);
			 echo "New record created successfully";
		
    }

    public function studentList(){
        $this->sql = "SELECT * FROM friend ";
        $this->database = new Database();
        $this->allInfo = mysqli_query($this->database->dbConnect(), $this->sql);
        return $this->allInfo;
    }
    
}