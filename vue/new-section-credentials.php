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
    <form action="../controller/modify-section.php" method="post" enctype="multipart/form-data">

        <div class="row">
            <div class="col-md-6">
                <input type="text" name="id" value=<?= $id ?>  style="display: none;">
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <label>designation</label>
                <input type="text" name="designation">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>description</label>
                <input type="text" name="description">
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