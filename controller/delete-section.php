<?php

require '../autoload.php';



$id=htmlentities($_GET['id']);
$section=new section();
$section->deleteSection($id);

header('Location: ../vue/show-sections-list.php');


