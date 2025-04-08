<?php

require '../autoload.php';
require '../assets/helper.php';

$designation = $_GET['designation'];

$student = new student();
$students = $student->getListByDesignation($designation);
display($students); 



?>
