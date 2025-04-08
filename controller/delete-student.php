<?php

require '../autoload.php';


$id = htmlentities($_GET['id']);
$student = new student();
$student->deleteStudent($id);

header('Location: ../vue/show-students-list.php');


