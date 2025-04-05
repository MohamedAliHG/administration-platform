

<?php

require 'autoload.php';

$student=new student();
$students=$student->showList();


session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Etudiant</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<?php include 'navbar.php'  ; ?>
  <br>
    <div class="container">

    <table class="table table-striped">
        <thead>
        <tr>
            <th>id</th>
            <th>Images</th> 
            <th>name</th>
            <th>birthday</th>  
            <th>Section</th>  
             
            <th></th> 
               
    
        </tr>
        </thead>

        <tbody>


        <?php 
        
        foreach($students as $student)
        {
        ?>

         <tr>
            <td><?= $student->id?></td>
            <td><img src=<?= $student->imgpath ?> style="width: 50px; height: 50px;"></td> 
            <td><?= $student->name?></td>
            <td><?= $student->birthday?></td> 
            <td><?= $student->section?></td>
            
            <td><a href="show-student-details.php?id=<?= $student->id; ?>"><i class="fa-solid fa-circle-info "></i></a>           
            <?php if($_SESSION['user']['role']=='admin'){ ?>
            <a href="delete-student.php?id=<?= $student->id; ?>"><i class="fa-solid fa-eraser"></i></a>
            <a href="new-student-credentials.php?id=<?= $student->id; ?>"><i class="fa-solid fa-pen-to-square"></i></a> <?php }?>   </td> 
        </tr>
       <?php } ?>
         </tbody>
       </table>

         </div>
      
</body>
</html> 