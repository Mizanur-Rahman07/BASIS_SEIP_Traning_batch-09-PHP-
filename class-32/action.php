<?php
require_once 'vendor\autoload.php';

use App\classes\Database;
use App\classes\Student;
use App\classes\Home;


$database = new Database();


if (isset($_GET['page'])) {
   if ($_GET['page'] == 'home') {
      include 'pages/home.php';
   } 

 } elseif($_POST){
   if($_POST['submit']){
      $student = new Student($_POST);
      $student->newStudent();
      $studentInfo = $student->studentList();
      include 'pages/student_list.php';
   }



 }else{
   $home = new Home();
   $home->index();

 }


