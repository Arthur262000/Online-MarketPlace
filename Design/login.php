<?php

$mysqli = new mysqli("localhost", "root", "", "WebMarket");


$login = $_POST['AccountMail'];
$password = $_POST['AccountPassword'];

$query = "SELECT * FROM `signin`;";

if (!$mysqli) {
    echo "Database Connection Error..." . mysqli_connect_error();
} else {
    echo "<h3>Database Connection Success....</h3>";
    echo $query;
    $result1 = mysqli_query($mysqli, $query);
    echo mysqli_num_rows($result1);

    while ($row = mysqli_fetch_array($result1)) {
        if ($row['login'] == $login && $row['pass'] == $password) {
            echo "<h1> COnnected </h1>";
            header('Location: index.html');
        }
    }
}


mysqli_close($mysqli);

//header('Location: index.html');
