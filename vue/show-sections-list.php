<?php

require '../autoload.php';

$section = new section();
$sections = $section->showList();
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des sections</title>
    <?php include '../assets/librairies.php' ?>

</head>
<body>
<header>
    <?php include '../assets/navbar.php'; ?>
</header>
<main>
    <br>
    <div class="container">
        <?php if ($_SESSION['user']['role'] == 'admin') { ?>
            <div><span><b>Ajouter une section</b></span><span><a href="add-section-form.html"><i
                                class="fa-solid fa-plus"></i></a></span></div><br>
        <?php } ?>
        <table id="myTable" class="display">
            <thead>
            <tr>
                <th>id</th>
                <th>designation</th>
                <th>description</th>
                <?php if ($_SESSION['user']['role'] == 'admin') { ?>
                    <th>Action</th>
                    <th>Liste Etudiant</th>
                <?php } ?>


            </tr>
            </thead>

            <tbody>


            <?php

            foreach ($sections as $section) {
                ?>

                <tr>
                    <td><?= $section->id ?></td>
                    <td><?= $section->designation ?></td>
                    <td><?= $section->description ?></td>
                    <?php if ($_SESSION['user']['role'] == 'admin') { ?>
                        <td>
                        <a href="../controller/delete-section.php?id=<?= $section->id; ?>"><i
                                    class="fa-solid fa-eraser"></i></a>
                        <a href="new-section-credentials.php?id=<?= $section->id; ?>"><i
                                    class="fa-solid fa-pen-to-square"></i></a> </td>
                        <td><a href="liste.php?designation=<?= $section->designation; ?>"><i
                                        class="fa-solid fa-list"></i></a></td>
                    <?php } ?>
                </tr>
            <?php } ?>
            </tbody>
    </div>
    <script>
        $(document).ready(function () {
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