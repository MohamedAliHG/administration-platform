<?php $id = $_GET['id']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <form action="../controller/modify-student.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <input type="text" name="id" value=<?= $id ?>  style="display: none;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>id</label>
                <input type="text" name="newid">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label>name</label>
                <input type="text" name="name">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <br><label>birthday</label>
                <input type="date" name="date">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <br><label>image</label>
                <input type="file" name="fichier">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <input type="submit" value="envoyer">
            </div>
        </div>
    </form>
</div>
</body>
</html>