<?php
$Id = $_GET['Id'];
if (!$Id) {
    header('Location: login.html');
} else {
    $mysqli = new mysqli("localhost", "root", "", "WebMarket");


    $month = $_POST['Month'];
    $year = $_POST['Year'];
    $cardname = $_POST['NameDisp'];
    $cardnumber = $_POST['CardNum'];
    $securitycode = $_POST['CVC'];
    $typecard = $_POST['options'];

    $query = "INSERT INTO payement (IdMembers, typecard, cardnumber, cardname, securitycode, year, month)
     values ($Id, '$typecard', '$cardnumber', '$cardname', '$securitycode', '$year', '$month');";

    if (!$mysqli) {
        echo "Database Connection Error..." . mysqli_connect_error();
    } else {
        echo "<h3>Database Connection Success....</h3>";
        echo $query;
        if (mysqli_query($mysqli, $query)) {
            echo "New record created successfully";
            header("Location: Index.php?page=MyCard&Id=$Id");
        } else {
            echo "Error: " . "<br>" . mysqli_error($mysqli);
        }
    }
}
