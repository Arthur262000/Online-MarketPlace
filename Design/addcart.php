<?php
$Id = $_GET['Id'];

if (!$Id) {
    header('Location: login.html');
} else {

    $IdItem = $_GET['IdItem'];
    $option = $_GET['option'];
    $success = 0;
    if ($option == 1) {
        $price = $_POST['price'];
        $amb = $_POST['automaxbid'];
        $bestoffer = 0;
    } elseif ($option == 2) {
        $price = $_GET['price'];
        $bestoffer = 0;
        $amb = 0;
    } else {
        $price = $_POST['price'];
        $bestoffer = 1;
        $amb = 0;
    }

    

    $mysqli = new mysqli("localhost", "root", "", "WebMarket");

    $query = "INSERT INTO cart (IdItem, Idmember) values ($IdItem, $Id);";

    if (!$mysqli) {
        echo "Database Connection Error..." . mysqli_connect_error();
    } else {
        echo "<h3>Database Connection Success....</h3>";
        echo $query;
        if (mysqli_query($mysqli, $query)) {
            echo "New record created successfully";
            $query2 = "INSERT INTO buying (SellOption, AutoMaxBid, BestOffersnb ,IdItem, Idmembers, Success, Price)
             values ($option, $amb, $bestoffer, $IdItem, $Id, $success, $price);";
             echo $query2;
            if (mysqli_query($mysqli, $query2)) {
                echo "New record created successfully";
                header("Location: Index.php?page=Cart&Id=$Id");
            } else {
                echo "Error: " . "<br>" . mysqli_error($mysqli);
            }
        } else {
            echo "Error: " . "<br>" . mysqli_error($mysqli);
        }
    }
}
