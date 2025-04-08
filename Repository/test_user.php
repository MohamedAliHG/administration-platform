<?php

require '../autoload.php';

$user=new repository('users');

$user->create(['id'=>45671,'username'=>'med','email'=>'med@gmail.com','role'=>'user','pwd'=>4321]);

print_r($user->findAll());