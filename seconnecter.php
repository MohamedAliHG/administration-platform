<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>se connecter</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">

</div>
    
    <form action="login-verification.php" method="get">
    
            <div class="row">
                <div class="col-md-6"> 
                <label>identifiant</label>
                <input type="text" name="id">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                <br><label>Password</label>
                <input type="password" name="pwd">
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