<?php 

require '../autoload.php';

$id=$_POST['id'];
$newid=$_POST['newid'];
$name=$_POST['name'];
$birthday=$_POST['date'];
$path=__DIR__.'\\'.$_FILES['fichier']['name'];

if(move_uploaded_file($_FILES['fichier']['tmp_name'],$path)){
        $imgpath=$_FILES['fichier']['name'];    
   
    }    
else{
        echo 'failed to upload';
    }


$modification=new student();
$modification->modifyStudent($id,$newid,$name,$birthday,$imgpath);
header('Location: ../vue/show-students-list.php');