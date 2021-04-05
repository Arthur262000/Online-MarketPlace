<?php
$Id = $_GET['Id'];
if (!$Id) {
    header('Location: login.html');
} else {

    $mysqli = new mysqli("localhost", "root", "", "WebMarket");

    $name = $_POST['Name'];
    $cat = $_POST['Category'];
    $sub = $_POST['subcategory'];

    $description = $_POST['Description'];
    $price = $_POST['Price'];
    $option1 = $_POST['option1'];
    $option2 = $_POST['option2'];
    $option = 0;

    if ($option2 == "") {
        if ($option1 == "Auction") {
            $option = 1;
        } elseif ($option1 == "BuyItNow") {
            $option = 2;
        } elseif ($option1 == "BestOffer") {
            $option = 3;
        }
    } elseif ($option1 == "Auction") {
        if ($option2 == "BuyItNow") {
            $option = 4;
        }
    } elseif ($option1 == "BuyItNow") {
        if ($option2 == "Auction") {
            $option = 5;
        } elseif ($option2 == "BestOffer") {
            $option = 6;
        }
    } elseif ($option1 == "BestOffer") {
        if ($option2 == "BuyItNow") {
            $option = 7;
        }
    }

    $photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));

    $date = date('Y/m/d');



    $query = "INSERT INTO item (Name_, Category, SubCategory, Idsell, Description, SellOption, Price, Available,Photo, Date_Added)
     values ('$name', '$cat', '$sub', '$Id', '$description', $option, $price, true, $photo, $date);";

    if (!$mysqli) {
        echo "Database Connection Error..." . mysqli_connect_error();
    } else {
        echo "<h3>Database Connection Success....</h3>";
        echo $query;
        if (mysqli_query($mysqli, $query)) {
            echo "New record created successfully";
            header("Location: Index.php?page=MyMarket&Id=$Id");
        } else {
            echo "Error: " ;
        }
    }
}
