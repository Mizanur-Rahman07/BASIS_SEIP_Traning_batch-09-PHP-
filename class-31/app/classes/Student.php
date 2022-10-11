<?php
namespace App\classes;
use App\classes\Database;

class Student{
    public $student_name, $student_seip_id, $student_email, $student_phone, $database;

    public function __construct($POST){
        $this->student_name = $POST['student_name'];
        $this->student_seip_id = $POST['student_seip_id'];
        $this->student_email = $POST['student_email'];
        $this->student_phone = $POST['student_phone'];
    }

    public function newStudent(){
		$this->sql = "INSERT INTO class_31  (student_name, student_seip_id, student_email, student_phone) VALUES('$this->student_name','$this->student_seip_id','$this->student_email','$this->student_phone','$this->database')";

        $this->database = new Database();
        mysqli_query($this->database->dbConnect(),$this->sql);

        // ------------
        if (mysqli_query($this->conn, $this->sql)) {
			 echo "New record created successfully";
			} else {
			 echo "Error: " . $this->sql . "<br>" . mysqli_error($this->conn);
			
			
			}


    }
    
}