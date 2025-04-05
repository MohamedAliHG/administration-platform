<?php

require 'autoload.php';



$id=htmlentities($_GET['id']);
$student=new student();
$student->deleteStudent($id);

header('Location: show-students-list.php');


