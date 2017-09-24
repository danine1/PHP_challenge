<?php
include 'lib/data-functions.php';
$actors = array();
if (isset($_POST['name']))
{
    $actors["name"]=$_POST["name"];
}
if (isset($_POST['sex']))
{
    $actors["sex"]=$_POST["sex"];
}
if (isset($_POST['bio']))
{
    $actors["bio"]=$_POST["bio"];
}
insert_data ($actors);
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
    background-color: #4CAF50;
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

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
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

<?php



if ($_POST) {
    $errors = array();
    if (empty($_POST['name'])) {
        $errors[] = 'missing actorname';
    }
    if (empty($_POST['sex'])) {
        $errors[] = 'missing sex';
    }
    if (empty($_POST['bio'])) {
        $errors[] = 'missing biography';
    }
    if (empty($errors)) {
        //savedata()
        header('Location: actors_form.php?status=ok');
        exit();
    } else {
        foreach ($errors as $error) {
            echo $error;
        }
    }
}

?>

<form method="post" class="form">
    Actor Name:<input type="text" name="name"><br>
    Sex:<select name="sex">
	<option value="male">Male</option>
	<option value="female" selected>Female</option>
    </select><br>
     Biography:<textarea name="bio" id="" cols="30" rows="10"></textarea><br>
    <input type="submit" value="send">
</form>





