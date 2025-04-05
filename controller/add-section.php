<?php 

require '../autoload.php';

$id=$_POST['id'];
$description=$_POST['description'];
$designation=$_POST['designation'];



$section=new section($id,$designation,$description);
$section->addSection();
header('Location: ../vue/show-sections-list.php');