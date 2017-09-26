<?php
    require 'lib/data-functions.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<nav>
<a href="index.php">Go to the form</a><br>
<a href="list.php">Go to the list</a><br>
</nav>

<h1>Details of <?php echo $_GET['name']; ?></h1>

<ol>
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

