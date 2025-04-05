<?php 
session_start();

if (isset($_SESSION['user']))
{
    header('Location: platform.php');
}
?>


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
<?php  
if(isset($_SESSION['errorMessage']))
{
?>
<div style="align-items: center";>
<?php echo $_SESSION['errorMessage'];
unset($_SESSION['errorMessage']);
?>
</div>
<?php } ?> <br>
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