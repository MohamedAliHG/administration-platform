<?php

require '../autoload.php';

$id = $_POST['id'];
$name = $_POST['name'];
$birthday = $_POST['date'];
$section = $_POST['section'];

$path = __DIR__ . '\uploads\\' . $_FILES['fichier']['name'];

if (move_uploaded_file($_FILES['fichier']['tmp_name'], $path)) {
    $imgpath = 'http://localhost/admin-platform/administration-platform/controller/uploads/' . $_FILES['fichier']['name'];


} else {
    echo 'failed to upload';
    $imgpath = "";
}


$student_1 = new student($id, $name, $birthday, $section, $imgpath);
$student_1->addStudent();

header('Location: ../vue/show-students-list.php');