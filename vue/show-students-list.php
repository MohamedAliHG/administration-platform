<?php

require '../autoload.php';
require '../assets/helper.php';

$student = new student();
$students = $student->showList();
display($students); 


?>