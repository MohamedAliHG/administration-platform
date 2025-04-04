<?php
require 'autoload.php';
$user_1=new user(12315,'med','med@gmail.com','admin','1234');
$user_2=new user(45612,'ali','ali@gmail.com','user','azerty');

$user_1->addUser();
$user_2->addUser();