<?php
    require 'lib/data-functions.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Betty Ford</title>
</head>
<body>

<nav style="text-align:center;font-family:helvetica;color:055b8c;">
<a style="text-align:center;font-family:helvetica;color:055b8c;" href="index.php">Go to the form</a><br>
<a style="text-align:center;font-family:helvetica;color:055b8c;" href="list.php">Go to the list</a><br>
</nav>

<h1 style="text-align:center;font-family:helvetica;color:055b8c;">Details of <?php echo $_GET['name']; ?></h1>

<ol style="text-align:center;font-family:helvetica;color:055b8c;">
<?php  
            foreach ($_GET as $key => $value) {
                if ($key=='id') {
                    continue;
                } else {
                echo '<li><span>' . $key . ':</span> <span>' . $value . '</span></li><br>' ;
                }
            }?>
</ol>
    
</body>
</html>

