<?php

require 'autoload.php';



$id=htmlentities($_GET['id']);
$section=new section();
$section->deleteSection($id);

header('Location: show-sections-list.php');


