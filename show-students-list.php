

<?php

require 'autoload.php';

$student=new student();
$students=$student->showList();




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Etudiant</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> 
    
</head>
<body>

  <br>
    <div class="container">

    <table class="table table-striped">
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>birthday</th>        
    
        </tr>
        </thead>

        <tbody>


        <?php 
        
        foreach($students as $student)
        {
        ?>

         <tr>
            <td><?= $student->id?></td>
            <td><?= $student->name?></td>
            <td><?= $student->birthday?></td>            
            
        </tr>
       <?php } ?>
         </tbody>
       </table>

         </div>
      
</body>
</html> 