<?php

require '../autoload.php';


$id = htmlentities($_GET['id']);
$student = new student();
//$student->showDetailsV1($id);
$student->showDetailsV2($id);