<?php

$mysqli = new mysqli("localhost", "root", "", "projet1");
$query = "";

$login = $_POST['login'];
$password = $_POST['password'];

if(!$mysqli){
    echo"Database Connection Error...".mysqli_connect_error();

} else{
    echo"<h3>Database Connection Success....</h3>";
    echo "SELECT * from log WHERE login = '$login' AND passw = '$password'";
    if($result = mysqli_query($mysqli, "SELECT * from log WHERE login = ' $login ' AND passw = ' $password ' ;")){
        echo mysqli_num_rows($result);  
        //echo $result;

 
        $row = mysqli_fetch_array($result);
        echo $row[0];
    }
    else{
        echo "<br>pas vu ";
    }

}


mysqli_close($mysqli);

//header('Location: index.html');
