<?php

$mysqli = new mysqli("localhost", "root", "", "WebMarket");


$option = $_POST['options'];
$cardnum = $_POST['CardNum'];
$name = $_POST['NameDisp'];
$cvc = $_POST['CVC'];
$month = $_POST['Month'];
$year = $_POST['Year'];

$query = "INSERT INTO signin (Admin, login, pass) values (false, '$email', '$password');";

if (!$mysqli) {
    echo "Database Connection Error..." . mysqli_connect_error();
} else {
    echo "<h3>Database Connection Success....</h3>";
    echo $query;
    if (mysqli_query($mysqli, $query)) {
        echo "New record created successfully";
        $result1 = mysqli_query($mysqli, "SELECT * from `signin`;");

        while ($row = mysqli_fetch_array($result1)) {
            if ($row['login'] == $email && $row['pass'] == $password) {
                $id = $row['Id'];
                $query2 = "INSERT INTO members (IdSignIn, name_, surname, address1, address2, city, postalcode, country, phone)
             values ('$id', '$name', '$surname', '$adress1', '$adress2', '$city', '$zipcode', '$country', '$phone');";
                if (mysqli_query($mysqli, $query2)) {
                    header('Location: index.html');
                }
            }
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($mysqli);

?>