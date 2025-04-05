<?php 
session_start();
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
        $_SESSION['user']=array(
            'role'=> 'admin'
        );

        
    }
    elseif ($reponse[0]->role=='user') {

        $_SESSION['user']=array(
            'role'=> 'user'
        );
    }
    header('Location: platform.php');
    
}
else{
    $_SESSION['errorMessage']='identifiant ou mot de passe incorect';
    header('Location: seconnecter.php');
}
