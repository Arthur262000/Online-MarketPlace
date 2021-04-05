<?php

$mysqli = new mysqli("localhost", "root", "", "WebMarket");

$Id = $_GET['Id'];
$IdCart = $_GET['Idr'];

$query = "DELETE FROM cart WHERE Id = $IdCart";

if (!$mysqli) {
    echo "Database Connection Error..." . mysqli_connect_error();
} else {
    echo "<h3>Database Connection Success....</h3>";
    echo $query;
    if (mysqli_query($mysqli, $query)) {
        echo "New record created successfully";
        header("Location: Index.php?page=Cart&Id=$Id");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($mysqli);
  //header("Location: Index.php?page=Cart&Id=$Id");

?>