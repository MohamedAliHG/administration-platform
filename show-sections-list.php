

<?php

require 'autoload.php';

$section=new section();
$sections=$section->showList();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des sections</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> 
    
    
</head>
<body>
<header>
<?php include 'navbar.php'  ; ?>
    </header>
    <main>
        <br>
    <div class="container">
      
    <table class="table table-striped">
        <thead>
        <tr>
            <th>id</th>
            <th>designation</th>
            <th>description</th>
          
           
    
        </tr>
        </thead>

        <tbody>


        <?php 
        
        foreach($sections as $section)
        {
        ?>

         <tr>
            <td><?= $section->id?></td>
            <td><?= $section->designation?></td>
            <td><?= $section->description?></td>          
        </tr>
       <?php } ?>
         </tbody>
         </div>

         </main>
</body>
</html> 