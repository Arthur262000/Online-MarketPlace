<?php

$mysqli = new mysqli("localhost", "root", "", "projet1") or die("Impossible to connect");
$query = "";

$login = $_POST['login'];
$password = $_POST['password'];

if (!$mysqli) {
    echo "Database Connection Error..." . mysqli_connect_error();
} else {
    echo "<h3>Database Connection Success....</h3>";
    echo "SELECT * from log WHERE login = '$login' AND passw = '$password'";
    $result1 = mysqli_query($mysqli, "SELECT * from log WHERE login = ' $login ' AND passw = ' $password ' ;");
    echo mysqli_num_rows($result1);
    if (mysqli_num_rows($result1) > 0) {

        $row = mysqli_fetch_array($result1);
        echo $row[0];
    } else {
        echo "<br>pas vu ";
    }
}


mysqli_close($mysqli);

//header('Location: index.html');
