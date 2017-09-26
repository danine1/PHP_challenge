<?php 
    require 'lib/data-functions.php';

    $errors = array();
    function error($name,$output) {
        if ($_POST) {
            $errors = array();
            if (empty($_POST[$name])) {
                $errors[] = $output;
            } 
            if (empty($errors)) {
                // savedate()
                header("Location: thanks.php");
                exit();
            } else {
                foreach ($errors as $error) {
                    echo $error . '<br>';
                }
            } 
        } 
    }  

    $data = [];
    foreach($_POST as $key => $value) {
        $data[$key]=$value;
    }

    if (isset($data['name'])) {
        insert_data($data);
    }
?>

<style>
.form {
    width: 400px;
    margin-left:auto;
    margin-right:auto;
}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #aeff00;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.betty {
    display:block;
    margin-left:auto;
    margin-right:auto;
}

textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: none;
}
</style>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Betty Ford</title>
</head>
<body>

<div>
<img class="betty" src="betty.png" alt="">
<h1 style="text-align:center;font-family:helvetica;color:055b8c;">Actors/Actresses sign up here:</h1>
</div>

<form action="index.php" style="font-family:helvetica;color:055b8c;" method="post" class="form">
    Actor Name:<input type="text" name="name"><br>
    Sex:<select name="sex">
	<option value="male">Male</option>
	<option value="female" selected>Female</option>
    </select><br><br>
    Addiction<input type="radio" name="addiction" value="Cocaine" checked>Cocaine
    <input type="radio" name="addiction" value="Booze">Booze
    <input type="radio" name="addiction" value="other"> Other<br><br>   
     Sob Story:<textarea name="bio" id="" cols="30" rows="10"></textarea><br>
    <input type="submit" value="send">
    <a href="list.php">Current inmates.</a>
</form>

<p><?php error('name','You don\'t have a name?<br>');?></p>
    
</body>
</html>









