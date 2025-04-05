<?php 
require 'autoload.php';

$name=$_GET['nom'];

$student=new student();
$students=$student->findbyname($name);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Etudiant</title>
   <?php include 'librairies.php' ?>


</head>
<body>
<header>
<?php include 'navbar.php'  ; ?>
    </header>
    <main>
  <br>
    <div class="container">

    <form action="search.php" method='get'>
            <span>
                <input type="text" name="nom" placeholder="nom">
            </span>
            <span>  
                <input type="submit" value="envoyer">
            </span>
    </form>
    <br>
    <table id="myTable" class="display">
        <thead>
        <tr>
            <th>id</th>
            <th>image</th>
            <th>name</th>
            <th>birthday</th>
            <th>Actions</th> 
    
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
            <td><a href="detailEtudiant.php?id=<?= $student->id; ?>"><i class="fa-solid fa-circle-info"></i></a>
            <a href="deletestudent.php?id=<?= $student->id; ?>"><i class="fa-solid fa-eraser"></i></a>
            <a href="modification.php?id=<?= $student->id; ?>"><i class="fa-solid fa-pen-to-square"></i></a></td> 
            
        </tr>
       <?php } ?>
         </tbody>
       </table>

         </div>
         <script>
          $(document).ready(function() {
          $('#myTable').DataTable({
        dom: 'Bfrtip',  
        buttons: [
          {
            extend: 'copy',  
            text: 'Copy'
          },
          {
            extend: 'csv',    
            text: 'CSV'
          },
          {
            extend: 'excel', 
            text: 'Excel'
          },
          {
            extend: 'pdf',    
            text: 'PDF'
          }
        ]
      });
          });
</script>

         </main>
</body>
</html> 