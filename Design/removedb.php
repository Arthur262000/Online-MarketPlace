<?php

$mysqli = new mysqli("localhost", "root", "", "WebMarket");

$Id = $_GET['Id'];

$query = "DELETE FROM cart WHERE Idmember = $Id";
$query2 = "DELETE FROM buying WHERE Idmember = $Id";


if (!$mysqli) {
    echo "Database Connection Error..." . mysqli_connect_error();
} else {
    echo "<h3>Database Connection Success....</h3>";
    echo $query;
    if (mysqli_query($mysqli, $query)) {
        if (mysqli_query($mysqli, $query)) {
        echo "New record created successfully";
        header("Location: Index.php?Id=$Id");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($mysqli);
  //header("Location: Index.php?page=Cart&Id=$Id");
