<?php 

require 'autoload.php';



$id=$_GET['id'];
$pwd=$_GET['pwd'];

$user=new user();
$reponse=$user->login($id,$pwd);
$count=count($reponse);


if($count)
{
    if ($reponse[0]->role=='admin')
    {
        header('Location: platform.php');

        
    }
    else{
        echo 'permission denied';
    }
    
    
}
else{
    echo 'user unfound';
}
