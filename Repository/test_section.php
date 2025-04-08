<?php

require '../autoload.php';

$section=new repository('section');

$section->create(['id'=>8,'designation'=>'MC','description'=>'mecanique']);

print_r($section->findAll());