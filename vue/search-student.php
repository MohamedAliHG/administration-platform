<?php
require '../autoload.php';
require '../assets/helper.php';

$name = $_GET['nom'];

$student = new student();
$students = $student->findbyname($name);
display($students);

?>

