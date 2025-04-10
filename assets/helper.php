<?php 
session_start();
function display($students){
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Etudiant</title>
    <?php include '../assets/librairies.php' ?>
</head>
<body>
<header>
    <?php include '../assets/navbar.php'; ?>
</header>
<main>
    <br>
    <div class="container">

        <form action="search-student.php" method='get'>
            <span>
                <input type="text" name="nom" placeholder="nom">
            </span>
            <span>  
                <input type="submit" value="envoyer">
            </span>

        </form>
        <?php if ($_SESSION['user']['role'] == 'admin') { ?>
            <span><a href="add-student-form.html"><i class="fa-solid fa-user-plus"></i></a></span>
        <?php } ?><br>
        <table id="myTable" class="display">
            <thead>
            <tr>
                <th>id</th>
                <th>Images</th>
                <th>name</th>
                <th>birthday</th>
                <th>Section</th>

                <th>Actions</th>


            </tr>
            </thead>

            <tbody>


            <?php

            foreach ($students as $student) {
                ?>

                <tr>
                    <td><?= $student->id ?></td>
                    <td><img src= <?= $student->imgpath ?> style="width: 50px; height: 50px;"></td>
                    <td><?= $student->name ?></td>
                    <td><?= $student->birthday ?></td>
                    <td><?= $student->section ?></td>

                    <td><a href="../controller/show-student-details.php?id=<?= $student->id; ?>"><i
                                    class="fa-solid fa-circle-info "></i></a>
                        <?php if ($_SESSION['user']['role'] == 'admin') { ?>
                            <a href="../controller/delete-student.php?id=<?= $student->id; ?>"><i
                                        class="fa-solid fa-eraser"></i></a>
                            <a href="new-student-credentials.php?id=<?= $student->id; ?>"><i
                                        class="fa-solid fa-pen-to-square"></i></a> <?php } ?>   </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

    </div>
    <script>
        <?php include 'scriptjs.js'; ?>
    </script>
</main>
</body>
</html> 

<?php
}