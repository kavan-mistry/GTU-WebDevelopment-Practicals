<?php
    $connect = mysqli_connect("localhost","root","","");
    if (isset($_REQUEST['sub'])) 
    {
        $dbname = $_REQUEST['dbname'];
        $query = "CREATE DATABASE $dbname";

        if ($query) {
            echo "$dbname database is created";
        }
        else{
            echo "error in creating database $dbname";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>practical 9</title>
</head>
<body>
    <form style="margin-top:100px">
    <center>
        <h3>Create DATABASE</h3><br>
        <input type="text" name="dbname" placeholder="Enter Database Name">
        <br>
        <br>
        <input type="submit" value="Create" name="sub">
    </center>
    </form>
</body>
</html>