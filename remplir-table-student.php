<?php 

require 'autoload.php';


$student_1=new student(1,'lucas','2003-07-01','GL');
$student_2=new student(2,'mendy','2002-09-10','RT');
$student_3=new student(3,'pedri','2001-08-01','CH');

$student_1->addStudent();
$student_2->addStudent();
$student_3->addStudent();