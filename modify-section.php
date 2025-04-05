<?php 

require 'autoload.php';

$id=$_POST['id'];
$description=$_POST['description'];
$designation=$_POST['designation'];



$modification=new section();
$modification->modifySection($id,$designation,$description);
header('Location: show-sections-list.php');